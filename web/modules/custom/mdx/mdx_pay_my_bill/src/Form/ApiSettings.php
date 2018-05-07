<?php

namespace Drupal\mdx_pay_my_bill\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements the ajax demo form controller.
 */
class ApiSettings extends ConfigForm {
  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['api.settings'];
  }
  
  /**
   * Form Builder
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('api.settings');
     
    $form['apiEnvironment'] = array(
      '#title' => '<h2>Which API</h2>',
      '#type' => 'radios',
      '#options' => array(
        'Dev' => 'Development',
        'Production' => 'Production'),
      '#default_value' => $config->get('apiEnvironment'),
    );

    $form['dev'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Development'),
      '#collapsible' => TRUE,
    );

    $form['dev']['devTestTransactionKey'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test Transaction Key'),
      '#default_value' => $config->get('devTestTransactionKey'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test Transaction Key.'),
      '#required' => TRUE,
    );

    $form['dev']['devTestLoginID'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test Login ID'),
      '#default_value' => $config->get('devTestLoginID'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test Login ID.'),
      '#required' => TRUE,
    );

    $form['dev']['devTestMD5Hash'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test MD5 Hash'),
      '#default_value' => $config->get('devTestMD5Hash'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test MD5 Hash.'),
      '#required' => TRUE,
    );

    $form['prod'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Production'),
      '#collapsible' => TRUE,
    );

    $form['prod']['prodTestTransactionKey'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test Transaction Key'),
      '#default_value' => $config->get('prodTestTransactionKey'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test Transaction Key.'),
      '#required' => TRUE,
    );

    $form['prod']['prodTestLoginID'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test Login ID'),
      '#default_value' => $config->get('prodTestLoginID'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test Login ID.'),
      '#required' => TRUE,
    );

    $form['prod']['prodTestMD5Hash'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Test MD5 Hash'),
      '#default_value' => $config->get('prodTestMD5Hash'),
      '#size' => 30,
      '#maxlength' => 128,
      '#description' => $this->t('Enter Test MD5 Hash.'),
      '#required' => TRUE,
    );
	
		$form['responseBody'] = array(
      '#type' => 'text_format',
      '#title' => $this->t('Body'),
      '#default_value' => $config->get('responseBody')['value'],
      '#format' => $config->get('responseBody')['format'],
      '#required' => TRUE,
    );

    $form['actions'] = [
      '#type' => 'actions',
    ];
    
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }
  
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'api_settings';
  }

  /**
   * Final submit handler.
   *
   * Reports what values were finally set.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory->getEditable('api.settings');
    $config->set('apiEnvironment', $form_state->getValue('apiEnvironment'))->save();
    $config->set('responseBody', $form_state->getValue('responseBody'))->save();
    
    // Development Settings Data
    $config->set('devTestTransactionKey', $form_state->getValue('devTestTransactionKey'))->save();
    $config->set('devTestLoginID', $form_state->getValue('devTestLoginID'))->save();
    $config->set('devTestMD5Hash', $form_state->getValue('devTestMD5Hash'))->save();
    
    // Production Settings Data
    $config->set('prodTestTransactionKey', $form_state->getValue('prodTestTransactionKey'))->save();
    $config->set('prodTestLoginID', $form_state->getValue('prodTestLoginID'))->save();
    $config->set('prodTestMD5Hash', $form_state->getValue('prodTestMD5Hash'))->save();
    
    parent::submitForm($form, $form_state);
  }

}
