<?php

namespace Drupal\mdx_pay_my_bill\Controller;

use Drupal\Core\Link;
use Drupal\Core\Url;

require_once base_path() . '/anet_php_sdk/AuthorizeNet.php';

print(base_path());

/**
 * Simple page controller for drupal.
 */
class PayMyBill extends Page {
	/*
   * Constructor
   */
  public function __construct() {
    $apiSettings = $this->config('api.settings');
    $payMyBillSettings = $this->config('mdx_pay_my_bill.settings');
    
    $prefill = $apiSettings->get('prefill');
    $apiEnvironment = $apiSettings->get('apiEnvironment');
    
    $this->pay_my_bill_name = $payMyBillSettings->get('pay_my_bill_name');
    $this->pay_my_bill_account = $payMyBillSettings->get('pay_my_bill_account');
    $this->pay_my_bill_amount = $payMyBillSettings->get('pay_my_bill_amount');
    
    switch ($apiEnvironment) {
      case 'Dev':
        $this->responseBody = $apiSettings->get('responseBody');
        $this->transactionKey = $apiSettings->get('devTestTransactionKey');
        $this->loginID = $apiSettings->get('devTestLoginID');
        $this->mD5Hash = $apiSettings->get('devTestMD5Hash');
        $this->testMode = false;
        break;
      case 'Production':
        $this->responseBody = $apiSettings->get('responseBody');
        $this->transactionKey = $apiSettings->get('prodTestTransactionKey');
        $this->loginID = $apiSettings->get('prodTestLoginID');
        $this->mD5Hash = $apiSettings->get('prodTestMD5Hash');
				$this->testMode = true;
        break;
    }
  }
	
  /**
   * Pay My Bill Form
   */
  public function PayMyBill() {
    $render = [];
		
		$info = 'Thank you for using MDxHealth Pay My Bill option.<br/>Please enter the patient\'s name, account number and the amount you would like to pay below. You will be directed to a secure page to enter your payment information.';
		
		$body = '<p>Please feel free to contact our Billing Department with any questions or concerns on <a href="tel:+1 866.259.5644">+1 866.259.5644</a> or email <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=patient.first@mdxhealth.com" target="_blank">patient.first@mdxhealth.com</a> Monday to Friday 8AM to 5PM Pacific Time.</p>';
		
    if (!isset($_SESSION['display_form']) || !$_SESSION['display_form']) {
			$PayMyBillForm = \Drupal::formBuilder()->getForm('Drupal\mdx_pay_my_bill\Form\PayMyBillForm');
		}
    else {
      $amount = $this->pay_my_bill_amount;
      $fp_sequence = $this->pay_my_bill_name . ' - ' . $this->pay_my_bill_account;
      $forms = AuthorizeNetDPM::getCreditCardForm($amount, $fp_sequence, base_path() . '/paymybill/response', $this->loginID, $this->transactionKey, $this->testMode, $this->prefill);
      $_SESSION['display_form'] = FALSE;
    }
		
		$render[] = array(
      '#theme' => 'pay_my_bill',
      '#info' => $info,
      '#form' => $PayMyBillForm,
      '#body' => $body,
    );
		
    return $render;
  }

  /**
   * Pay My Bill Response
   */
  public function PayMyBillResponse() {
    $render = [];
		
    return $render;
  }

  /**
   * Pay My Bill Confirmation
   */
  public function PayMyBillConfirmation() {
    $render = [];
		
    return $render;
  }

}
