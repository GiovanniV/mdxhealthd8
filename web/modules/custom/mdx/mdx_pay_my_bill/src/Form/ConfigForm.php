<?php

/**
 * @file
 * Contains Drupal\mdx_pay_my_bill\Form\ConfigForm.
 */

namespace Drupal\mdx_pay_my_bill\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Config\ConfigFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Define the generic class for working with Agero Gamification forms
 *
 * @see \Drupal\Core\Form\FormBase
 */
abstract class ConfigForm extends ConfigFormBase {
  
  /**
   * The path object
   *
   * @var Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;
  
  /**
   * Constructor.
   *
   * @param ConfigFactory $ConfigFactory
   */
  public function __construct(ConfigFactory $configFactory) {
    $this->configFactory = $configFactory;
  }

  // Uses Symfony's ContainerInterface to declare dependency to be passed to constructor
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }
  
  
}
