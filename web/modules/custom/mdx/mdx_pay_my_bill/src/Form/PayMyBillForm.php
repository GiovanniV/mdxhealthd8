<?php

namespace Drupal\mdx_pay_my_bill\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Core\File;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Class PayMyBillForm.
 *
 * @package Drupal\mdx_pay_my_bill\Form
 */
class PayMyBillForm extends Form {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'pay_my_bill_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(
    array $form,
    FormStateInterface $form_state, $missionData = []
  ) {
    
    $form['#tree'] = TRUE;
		
		$form['payMyBillName'] = array(
			'#type'        => 'textfield',
			'#title'       => t('Patient name'),
			'#required'    => TRUE,
			'#description' => 'Enter patient name'
    );

    $form['payMyBillAccount'] = array(
			'#type'        => 'textfield',
			'#title'       => t('Account'),
			'#required'    => TRUE,
			'#description' => 'Enter account'
    );

    $form['payMyBillAmount'] = array(
			'#type'        => 'textfield',
			'#title'       => t('Amount'),
			'#required'    => TRUE,
			'#description' => 'Enter amount in follow format eg. 10 or 10.00'
    );
		
		$form['submit'] = array(
			'#type'  => 'submit',
			'#value' => t('Next Step'),
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
    $username = $form_state->getValue('payMyBillName');
		$account = $form_state->getValue('payMyBillAccount');
		$amount = $form_state->getValue('payMyBillAmount');
		
		if (!$this->usernameRegex($username)) {
			$form_state->setErrorByName('payMyBillName', t('Plain text only allowed. Numbers, letters, spaces, hyphen and underscore'));
			$_SESSION['display_form'] = FALSE;
		} elseif (!$this->accountRegex($account)) {
			$form_state->setErrorByName('payMyBillAccount', t('You can input only numbers, letters, hyphens'));
			$_SESSION['display_form'] = FALSE;
		} elseif (!$this->amountRegex($amount)) {
			$form_state->setErrorByName('payMyBillAmount', t('Please enter integer or decimal number with max two decimals eg. 10 or 10.00'));
			$_SESSION['display_form'] = FALSE;
		} else {
			$_SESSION['display_form'] = TRUE;
      $config = $this->configFactory->getEditable('api.settings');
      $config->set('pay_my_bill_name', $form_state->getValue('payMyBillName'))->save();
      $config->set('pay_my_bill_account', $form_state->getValue('payMyBillAccount'))->save();
      $config->set('pay_my_bill_amount', $form_state->getValue('payMyBillAmount'))->save();
		}
		
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
	
	function amountRegex($account) {
		if (preg_match('/^(?=.*\\d)\\d*(?:\\.\\d\\d)?$/', $account, $matches)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function usernameRegex($text) {
		if (preg_match('/^[a-z-A-Z]+[a-z-A-Z0-9-_\s]+$/', $text, $matches)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function accountRegex($text) {
		if (preg_match('/^[a-z-A-Z]+[a-z-A-Z0-9-]+$/', $text, $matches)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}