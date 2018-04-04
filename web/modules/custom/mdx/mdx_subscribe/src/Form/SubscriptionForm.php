<?php

/**
 * @file
 * Contains Drupal\mdx_subscribe\Form\FormBase.
 */

namespace Drupal\mdx_subscribe\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Path\PathValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Drupal\Core\Url;

/**
 * Define the generic class for working with Agero Gamification forms
 *
 * @see \Drupal\Core\Form\FormBase
 */
abstract class SubscriptionForm extends FormBase {
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
  public function __construct(PathValidator $pathValidate, RequestStack $request) {
    $this->pathValidate = $pathValidate;
    $this->request = $request;
  }

  // Uses Symfony's ContainerInterface to declare dependency to be passed to constructor
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.validator'),
      $container->get('request_stack')
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
  * Gamification Goto
  */
  public function gamificationGoto($path) {
    $response = new RedirectResponse($path);
    $response->send();
    return;
  }

}
