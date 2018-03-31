<?php

namespace Drupal\mdx_subscribe\Plugin\Block;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\mdx\MdxBlockBase;

/**
 * Provides a MDx Subscribe Form Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("MDx Subscribe Form Block"),
 *   category = @Translation("MDx Subscribe Form Block"),
 * )
 */
class MdxSubscribeFormBlock extends BlockBase {
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    //$mdxSubscribeForm = $this->formBuilder->getForm('Drupal\mdx_subscribe\Form\MdxSubscription');
    
    return array(
      '#markup' => 'Testing',
    );
  }

}