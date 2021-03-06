<?php

namespace Drupal\mdx_subscribe\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Core\File;
use Drupal\agero_gamification_api\Controller\GamificationApi;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Class MdxSubscription.
 *
 * @package Drupal\mdx_subscribe\FormBase
 */
class MdxSubscription extends SubscriptionForm {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mdx_subscription_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#action'] = 'https://inpublic.globenewswire.com/subscription-manager/signupuser/subscribe';
    $form['#tree'] = TRUE;
    
    $form['#method'] = 'POST';
    
    $form['#theme'] = 'subscribe-form';
    $form['#attributes'] = array('name' => 'subscribe', 'class' => array('mdx_subscription_form'));
    
    $form['f_id'] = array(
      '#type' => 'hidden',
      '#value' => 166,
    );
    
    $form['page_ver'] = array(
      '#type' => 'hidden',
      '#value' => 1,
    );
    
    $form['lan'] = array(
      '#type' => 'hidden',
      '#value' => 5,
    );
    
    $form['01'] = array(
      '#type' => 'hidden',
      '#name' => 'p_mandatory',
      '#value' => 'f_name',
    );
    
    $form['02'] = array(
      '#type' => 'hidden',
      '#name' => 'p_mandatory',
      '#value' => 'l_name',
    );
    
    $form['03'] = array(
      '#type' => 'hidden',
      '#name' => 'p_mandatory',
      '#value' => 'function',
    );
    
    $form['04'] = array(
      '#type' => 'hidden',
      '#name' => 'p_mandatory',
      '#value' => 'lang_pref',
    );
    
    $form['05'] = array(
      '#type' => 'hidden',
      '#name' => 'p_mandatory',
      '#value' => 'add_mail',
    );
    
    $form['base_href'] = array(
      '#type' => 'hidden',
      '#value' => 'https://cws.huginonline.com/R/166669/',
    );
    
    $form['f_name'] = array(
      '#type' => 'textfield',
      '#title' => t('First Name'),
      '#required' => true,
    );
    
    $form['l_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Last Name'),
      '#required' => true,
    );
    
    $form['function'] = array(
      '#type' => 'select',
      '#title' => t('Function'),
      '#options' => array(
        'Investor' => 'Investor', 
        'Healthcare Professional' => 'Healthcare Professional', 
        'Patient' => 'Patient', 
        'Other' => 'Other',
      ),
      '#required' => true,
    );
    
    $form['lang_pref'] = array(
      '#type' => 'select',
      '#title' => t('Language preference'),
      '#options' => array(
        'english' => t('English'), 
        'french' => t('French'), 
      ),
      '#required' => true,
    );
    
    $form['add_mail'] = array(
      '#type' => 'checboxes',
      '#title' => t('Receive Additional Mails'),
      '#options' => array(
        'company' => t('Company'), 
        'products' => t('Products'), 
        'marketing/sales' => t('Marketing/Sales'), 
      ),
      '#required' => true,
    );
    
    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => t('E-mail'),
      '#required' => true,
    );
    
    $form['country'] = array(
      '#type' => 'textfield',
      '#title' => t('Country'),
    );
    
    $form['home_place'] = array(
      '#type' => 'textfield',
      '#title' => t('Phone'),
    );
    
    $form['work_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Work Name'),
    );
    
    $form['salutation'] = array(
      '#type' => 'select',
      '#title' => t('Salutation'),
      '#options' => array(
        'mr' => t('Mr'), 
        'mrs' => t('Mrs'), 
        'dr' => t('Dr'), 
      ),
    );
    
    $form['comments'] = array(
      '#type' => 'textarea',
      '#title' => t('Comments'),
    );
    
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Subscribe'),
    );

    $form_state->setCached(FALSE);

    return $form;
  }

  /**
   * Implements a form validate handler.
   *
   * The validateForm method is the default method called for any submit elements.
   *
   * @param array $form
   *   The render array of the currently built form.
   * @param FormStateInterface $form_state
   *   Object describing the current state of the form.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * Implements a form submit handler.
   *
   * The submitForm method is the default method called for any submit elements.
   *
   * @param array $form
   *   The render array of the currently built form.
   * @param FormStateInterface $form_state
   *   Object describing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
  }
  
}
