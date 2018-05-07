<?php

namespace Drupal\mdx_pay_my_bill\Controller;

use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Simple page controller for drupal.
 */
class PayMyBill extends Page {
	/*
   * Constructor
   */
  public function __construct() {
    $apiSettings = $this->config('api.settings');
    $apiEnvironment = $apiSettings->get('apiEnvironment');

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
		if (!isset($_SESSION['display_form']) || !$_SESSION['display_form']) {
			$PayMyBillForm = \Drupal::formBuilder()->getForm('Drupal\mdx_pay_my_bill\Form\PayMyBillForm');
			
			$render[] = array(
				'#form' => $PayMyBillForm,
			);
		}
		
    return $PayMyBillForm;
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
