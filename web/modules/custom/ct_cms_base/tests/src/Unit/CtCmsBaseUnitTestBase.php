<?php

declare(strict_types=1);

namespace Drupal\Tests\ct_cms_base\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\Tests\ct_cms_base\Traits\ArrayTrait;
use Drupal\Tests\ct_cms_base\Traits\AssertTrait;
use Drupal\Tests\ct_cms_base\Traits\MockTrait;
use Drupal\Tests\ct_cms_base\Traits\ReflectionTrait;

/**
 * Class CtCmsBaseUnitTestBase.
 *
 * Base class for all unit test cases.
 *
 * @package Drupal\ct_cms_base\Tests
 */
abstract class CtCmsBaseUnitTestBase extends UnitTestCase {

  use ArrayTrait;
  use AssertTrait;
  use MockTrait;
  use ReflectionTrait;

}
