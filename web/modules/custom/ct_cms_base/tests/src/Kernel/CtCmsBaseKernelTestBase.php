<?php

declare(strict_types=1);

namespace Drupal\Tests\ct_cms_base\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\ct_cms_base\Traits\ArrayTrait;
use Drupal\Tests\ct_cms_base\Traits\AssertTrait;
use Drupal\Tests\ct_cms_base\Traits\MockTrait;
use Drupal\Tests\ct_cms_base\Traits\ReflectionTrait;

/**
 * Class CtCmsBaseKernelTestBase.
 *
 * Base class for kernel tests.
 *
 * @package Drupal\ct_cms_base\Tests
 */
abstract class CtCmsBaseKernelTestBase extends KernelTestBase {

  use ArrayTrait;
  use AssertTrait;
  use MockTrait;
  use ReflectionTrait;

}
