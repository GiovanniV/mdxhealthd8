<?php

namespace Drupal\mdx\MdxBlockBase;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;

/**
 * Provides a MDx Subscribe Form Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("MDx Subscribe Form Block"),
 *   category = @Translation("MDx Subscribe Form Block"),
 * )
 */
abstract MdxBlockBase extends BlockBase {
  
  protected $formBuilder;
  /**
   * Constructor.
   *
   * @param formBuilder $formBuilder
   */
  public function __construct(FormBuilderInterface $formBuilder) {
    $this->formBuilder = $formBuilder;
  }

  // Uses Symfony's ContainerInterface to declare dependency to be passed to constructor
  public static function create(ContainerInterface $container) {
    return new static(
			$container->get('form_builder')
    );
  }

}