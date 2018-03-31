<?php

namespace Drupal\mdx_subscribe\Plugin\Block;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;

/**
 * Provides a MDx Subscribe Form Block
 *
 * @Block(
 *   id = "mdx_subscribe_form",
 *   admin_label = @Translation("MDx Subscribe Form Block"),
 *   category = @Translation("MDx Subscribe Form Block"),
 * )
 */
class MdxSubscribeFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $mdxSubscribeForm = \Drupal::formBuilder()->getForm('Drupal\mdx_subscribe\Form\MdxSubscription');
    
    return $mdxSubscribeForm;
  }

}