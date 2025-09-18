<div align="center">

# CivicTheme CMS Demo

Drupal 11 implementation of CivicTheme CMS Demo for CivicTheme CMS Demo

[![Database, Build, Test and Deploy](https://github.com/ct_cms/ct_cms/actions/workflows/build-test-deploy.yml/badge.svg)](https://github.com/ct_cms/ct_cms/actions/workflows/build-test-deploy.yml)

![Drupal 11](https://img.shields.io/badge/Drupal-11-blue.svg)
[![codecov](https://codecov.io/gh/ct_cms/ct_cms/graph/badge.svg)](https://codecov.io/gh/ct_cms/ct_cms)

![Automated updates](https://img.shields.io/badge/Automated%20updates-RenovateBot-brightgreen.svg)

[//]: # (DO NOT REMOVE THE BADGE BELOW. IT IS USED BY VORTEX TO TRACK INTEGRATION)

[![Vortex](https://img.shields.io/badge/Vortex-25.8.1-65ACBC.svg)](https://github.com/drevops/vortex/tree/25.8.1)

</div>

## Onboarding to Vortex

Use [Onboarding checklist](docs/onboarding.md) to track the project onboarding
to Vortex progress. Remove this section once onboarding is finished.

## Environments

- DEV: https://dev.ct-cms.com
- STAGE: https://stage.ct-cms.com
- PROD: https://www.ct-cms.com

## Local environment setup

- Make sure that you have latest versions of all required software installed: [Docker](https://www.docker.com/), [Pygmy](https://github.com/pygmystack/pygmy), [Ahoy](https://github.com/ahoy-cli/ahoy)
- Make sure that all local web development services are shut down (Apache/Nginx, Mysql, MAMP etc).
- Checkout project repository (in one of the [supported Docker directories](https://docs.docker.com/desktop/settings-and-maintenance/settings/#virtual-file-shares)).

- `pygmy up`
- `ahoy build`

## Project documentation

- [FAQs](docs/faqs.md)
- [Testing](docs/testing.md)

- [CI](docs/ci.md)

- [Deployment](docs/deployment.md)

---
_This repository was created using the [Vortex](https://github.com/drevops/vortex) Drupal project template_
