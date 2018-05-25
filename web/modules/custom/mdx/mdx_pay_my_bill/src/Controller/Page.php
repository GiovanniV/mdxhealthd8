<?php

namespace Drupal\mdx_pay_my_bill\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Define the generic class for working with Agero Gamification Pages
 */
abstract class Page extends ControllerBase {

	protected $formBuilder;
  /**
   * Request stack.
   *
   * @var RequestStack
   */
  protected $request;
  /**
   * Constructor.
   *
   * @param formBuilder $formBuilder
   */
  public function __construct(FormBuilderInterface $formBuilder, RequestStack $request) {
    $this->formBuilder = $formBuilder;
		$this->request = $request;
  }

  // Uses Symfony's ContainerInterface to declare dependency to be passed to constructor
  public static function create(ContainerInterface $container) {
    return new static(
			$container->get('form_builder'),
			$container->get('request_stack')
    );
  }
	
}