<?php

/**
 * @file
 * Contains Drupal\mdx_pay_my_bill\Form\Form.
 */

namespace Drupal\mdx_pay_my_bill\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Path\PathValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Drupal\Core\Url;

/**
 * Define the generic class for working with forms
 *
 * @see \Drupal\Core\Form\FormBase
 */
abstract class Form extends FormBase {
  /**
   * The path object
   *
   * @var Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;
  
  /**
   * The path object
   *
   * @var \Drupal\Core\Path\PathValidator
   */
  protected $pathValidate;

  /**
   * Request stack.
   *
   * @var RequestStack
   */
  protected $request;
  /**
   * Constructor.
   *
   * @param PathValidator $pathValidate
   */
  public function __construct(PathValidator $pathValidate, RequestStack $request, ConfigFactory $configFactory) {
    $this->pathValidate = $pathValidate;
    $this->request = $request;
  }

  // Uses Symfony's ContainerInterface to declare dependency to be passed to constructor
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.validator'),
      $container->get('request_stack'),
      $container->get('config.factory')
    );
  }

  /**
   * Get Route Name From Path
   */
  public function getRouteNameFromPath($path) {
    $routeName = $this->pathValidate->getUrlIfValid($path)->getRouteName();
    return $routeName;
  }

  /**
   * Get Route Name Using Path
   */
  public function getUrlFromRouteName($path) {
    $routeName = $this->getRouteNameFromPath($path);
    $url = Url::fromRoute($routeName);
    return $url;
  }

  /*
  * Form Goto
  */
  public function formGoto($path) {
    $response = new RedirectResponse($path);
    $response->send();
    return;
  }
	
}
