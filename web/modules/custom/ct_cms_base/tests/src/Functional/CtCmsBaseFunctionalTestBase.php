<?php

declare(strict_types=1);

namespace Drupal\Tests\ct_cms_base\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\ct_cms_base\Traits\ArrayTrait;
use Drupal\Tests\ct_cms_base\Traits\AssertTrait;
use Drupal\Tests\ct_cms_base\Traits\MockTrait;
use Drupal\Tests\ct_cms_base\Traits\ReflectionTrait;

/**
 * Class CtCmsBaseFunctionalTestBase.
 *
 * Base class for functional tests.
 *
 * @package Drupal\ct_cms_base\Tests
 */
abstract class CtCmsBaseFunctionalTestBase extends BrowserTestBase {

  use ArrayTrait;
  use AssertTrait;
  use MockTrait;
  use ReflectionTrait;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

}
