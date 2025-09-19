#!/usr/bin/env bash
##
# Example of the custom per-project command that will run after website is installed.
#
# Clone this file and modify it to your needs or simply remove it.
#
# For ordering multiple commands, use a two-digit suffix for clarity and consistency.
# This approach ensures a clear sequence and avoids potential ordering issues.
#
# Example:
# - provision-10-example.sh
# - provision-20-example.sh
# - provision-30-example.sh
#
# shellcheck disable=SC2086

set -eu
[ "${VORTEX_DEBUG-}" = "1" ] && set -x

# ------------------------------------------------------------------------------

info() { printf "   ==> %s\n" "${1}"; }
task() { printf "     > %s\n" "${1}"; }
note() { printf "       %s\n" "${1}"; }

drush() { ./vendor/bin/drush -y "$@"; }

info "Started example operations."

environment="$(drush php:eval "print \Drupal\core\Site\Settings::get('environment');")"
note "Environment: ${environment}"

# Perform operations based on the current environment.
if echo "${environment}" | grep -q -e dev -e stage -e ci -e local; then
  note "Running example operations in non-production environment."

  # Set site name.
  task "Setting site name."
  drush php:eval "\Drupal::service('config.factory')->getEditable('system.site')->set('name', 'CivicTheme CMS Demo')->save();"


  # Install site dependencies
  drush recipe /app/recipes/civictheme_drupal_cms_preinstall
  drush recipe /app/recipes/civictheme_drupal_cms
  drush recipe /app/recipes/civictheme_content_default
  pushd /app/web/themes/custom/civictheme_subtheme
  npm install
  npm run build
  popd
  task "Installing civictheme_subtheme theme."
  drush theme:enable civictheme_subtheme

  task "Setting civictheme_subtheme as a default theme."
  drush config-set system.theme default civictheme_subtheme
  task "Running deployment hooks."
  drush deploy:hook

  # Conditionally perform an action if this is a "fresh" database.
  if [ "${VORTEX_PROVISION_OVERRIDE_DB:-0}" = "1" ]; then
    note "Fresh database detected. Performing additional example operations."
  else
    note "Existing database detected. Performing additional example operations."
  fi
else
  note "Skipping example operations in production environment."
fi

info "Finished example operations."
