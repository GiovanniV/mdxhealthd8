<?php

namespace Drupal\mdx_press_release\Form;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBuilder;
use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Ajax\CloseModalDialogCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Locale\CountryManager;

/**
 * PressReleaseDisclaimerForm class.
 */
class PressReleaseDisclaimerForm extends FormBase {
  
  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilder
   */
  protected $formBuilder;

  /**
   * The PressReleaseModalFormController constructor.
   *
   * @param \Drupal\Core\Form\FormBuilder $formBuilder
   *   The form builder.
   */
  public function __construct(FormBuilder $formBuilder) {
    $this->formBuilder = $formBuilder;
  }

  /**
   * {@inheritdoc}
   *
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   The Drupal service container.
   *
   * @return static
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'press_release_disclaimer_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $pressId = NULL, $currentStep = 1) {
    $form['#prefix'] = '<div id="press_release_disclaimer_form">';
    $form['#suffix'] = '</div>';
    $form['#attributes'] = [
      'class' => ['show-step-one']
    ];
    
    $form['#attached']['library'][] = 'core/drupal.dialog.ajax';
    
    // The status messages that will contain any form errors.
    $form['status_messages'] = [
      '#type' => 'status_messages',
      '#weight' => -10,
    ];

    $form['press_id'] = [
      '#type' => 'value', 
      '#value' => $pressId
    ];
    
    // A required checkbox field.
    $form['step_one'] = [
      '#prefix' => '<div class="step-one">',
      '#suffix' => '</div>',
    ];
    $form['step_one']['content'] = [
      '#markup' => $this->t('Please read this carefully as it applies to all persons who visit this website. The following pages contain information relating to an offering and admission to trading on a regulated market in relation to securities of MDxHealth SA ("MDxHealth"). This information may not be accessed by residents of certain countries based on applicable securities law regulations.'),
    ];
    
    $form['step_one']['content_01'] = [
      '#prefix' => '<h5>',
      '#markup' => $this->t('From the menu please choose the country where you reside:'),
      '#suffix' => '</h5>',
    ];
    
    $countries = \Drupal\Core\Locale\CountryManager::getStandardList();
    foreach ($countries as $key => $value) {
      $countries[$key] = $value->__toString();
    }
    // A required checkbox field.
    $form['step_one']['country'] = [
      '#type' => 'select',
      '#options' => $countries,
      '#title' => $this->t('Select Country'),
      '#required' => TRUE,
    ];

    $content_03 = "<p>Please read this carefully as it applies to all persons who visit this website. The following pages contain information relating to an offering and admission to trading on a regulated market in relation to securities of MDxHealth SA (\"MDxHealth\"). This information may not be accessed by residents of certain countries based on applicable securities law regulations. Accordingly, if you wish to access this part of the website you must first inform yourself about and then observe the statutory and regulatory requirements applicable to you and to your jurisdiction. In order to establish whether or not you may view the information and documents please read the disclaimer below in full.</p><p><strong>THIS WEBSITE AND THE MATERIALS CONTAINED THEREIN ARE NOT FOR RELEASE, DISTRIBUTION OR PUBLICATION, IN WHOLE OR IN PART, DIRECTLY OR INDIRECTLY, IN THE UNITED STATES OF AMERICA, AUSTRALIA, CANADA, JAPAN OR ANY OTHER JURISDICTION WHERE TO DO SO WOULD BE PROHIBITED BY APPLICABLE LAW.</strong></p><p>This website and the information contained herein or to which it gives access are not intended for, and may not be accessed by, or distributed or disseminated to, persons resident or physically present in the United States of America (including its territories, the \"United States\"), Australia, Canada or Japan, and do not constitute, or form part of, an offer or invitation to sell or issue, or a solicitation of an offer or invitation to purchase or subscribe for, nor shall there be any sale or purchase of, any securities of MDxHealth in the United States, Australia, Canada, Japan or South Africa or in any other jurisdiction in which such offer, invitation, solicitation, sale, issue, purchase or subscription would be unlawful prior to registration, unless an exemption from registration or qualification under the securities laws of any such jurisdiction is applicable. The securities of MDxHealth referred to on this website have not been and will not be registered under the U.S. Securities Act of 1933, as amended (the \"U.S. Securities Act\"), and may not be offered or sold in the United States absent registration with the United States Securities and Exchange Commission or an exemption from registration under the U.S. Securities Act.</p><p>All persons residing outside of the United States, Australia, Canada and Japan who wish to access the documents contained on this website should first ensure that they are not subject to local laws or regulations that prohibit or restrict their right to access this website, or require registration or approval for any acquisition of securities by them. MDxHealth assumes no responsibility if there is a violation of applicable law and regulations by any person.</p><p>No action has been taken by MDxHealth that would permit an offer of MDxHealth's shares or the possession or distribution of the materials to which this website gives access or any other offering or publicity material relating to MDxHealth's shares in any jurisdiction where action for that purpose is required. MDxHealth has not authorised any public offering in any Member State of the European Economic Area. With respect to any Member State of the European Economic Area that has implemented Directive 2003/71/EC of the European Parliament and of the Council of 4 November 2003, as amended (together with any applicable implementing measures in such Member State, the \"Prospectus Directive\"), this website and the information contained herein, or to which it gives access, is only addressed to, and is only directed at, qualified investors in that Member State within the meaning of the Prospectus Directive.</p><p>In addition, in the United Kingdom, this website and the information contained herein, or to which it gives access, is addressed to, and directed only at:</p> <p>(a) persons who have professional experience in matters relating to investments falling within article 19(5) of the Financial Services and Markets Act 2000 (Financial Promotion) Order 2005, as amended (the \"Order\"), and (b) high net worth entities, and other persons to whom they may otherwise lawfully be communicated, falling within article 49(2) of the Order (all such persons together being referred to as \"Relevant Persons\"). In the United Kingdom, any investment or investment activity to which this website and the information contained herein, or to which it gives access, relates, is available only to Relevant Persons and will be engaged in only with Relevant Persons. Any person in the United Kingdom who is not a Relevant Person should not act or rely on this website and the information contained herein, or to which it gives access.</p><p>If you are not permitted to view materials on this website or are in any doubt as to whether you are permitted to view these materials, please exit this webpage.</p><p>Access to electronic versions of these materials is being made available on this webpage by MDxHealth in good faith and for information purposes only.By selecting \"Yes\" you confirm and certify that:</p><p>You are not a resident of or physically present in the United States, Australia, Canada or Japan or any other restricted jurisdiction, and that you are either:</p><p> </p><ol><li>(a) a resident of, and domiciled in, a Member State of the European Economic Area other than the United Kingdom and a qualified investor within the meaning of the Prospectus Directive</li><li>(b) a resident of, and domiciled in, the United Kingdom, a qualified investor within the meaning of the Prospectus Directive and a Relevant Person, or </li><li>(c)&nbsp;otherwise authorised to access this information pursuant to applicable laws or regulations.</li></ol>";
    
    $content_04 = "<p>By clicking \"confirm\" you confirm and certify that you have read and understood the foregoing, and hereby make the certifications above and agree to comply with all of the above restrictions</p>";
    
    $form['step_two'] = [
      '#prefix' => '<div class="step-two">',
      '#suffix' => '</div>',
    ];
    
    $form['step_two']['content_03'] = [
      '#markup' => $this->t($content_03),
    ];
    
    $form['step_two']['status'] = [
      '#type' => 'radios',
      '#options' => ['Yes' => 'Yes', 'No' => 'No'],
    ];
    
    $form['step_two']['content_04'] = [
      '#markup' => $this->t($content_04),
    ];

    $form['actions'] = array('#type' => 'actions');
    $form['actions']['next'] = [
      '#type' => 'submit',
      '#value' => $this->t('Next'),
      '#attributes' => [
        'class' => [
          'use-ajax btn',
        ],
      ],
      '#ajax' => [
        'callback' => [$this, 'submitModalFormAjax'],
        'event' => 'click',
      ],
    ];

    return $form;
  }

  /**
   * AJAX callback handler that displays any errors or a success message.
   */
  public function submitModalFormAjax(array $form, FormStateInterface $form_state) {
    $countryAllowed = ['AF', 'AL'];
    $pressId = $form_state->getValue('press_id');
    $country = $form_state->getValue('country');
    $status = $form_state->getValue('status');
    
    $accessDeniedMessage = '<p><strong>Access Not Permitted</strong></p><p><strong>The IPO website is not accessible in your country of residence. Please contact investor relations for further information.</strong></p><p><strong>Investor Relations</strong><br>US: +1 949 812 6979<br>BE: +32 4 364 20 70<br>ir@mdxhealth.com</p>';
    
    $response = new AjaxResponse();
    
    if ($form_state->hasAnyErrors()) {
      $response->addCommand(new ReplaceCommand('#press_release_disclaimer_form', $form));
    }
    elseif(in_array($country, $countryAllowed)) {
      unset($form['#attributes']);
      $form['#attributes'] = [
        'class' => ['show-step-two']
      ];
      $form['actions']['next']['#value'] = $this->t('Confirm');
      if($status == 'Yes') {
        $response->addCommand(new CloseModalDialogCommand());
        $response->addCommand(new RedirectCommand('/node/' . $pressId));
      }
      elseif($status == 'No') {
        $response->addCommand(new OpenModalDialogCommand("Press Release - Disclaimer", $accessDeniedMessage, ['width' => 500]));  
      }
      else {
        $response->addCommand(new ReplaceCommand('#press_release_disclaimer_form', $form));
      }
    }
    else {
      $response->addCommand(new OpenModalDialogCommand("Press Release - Disclaimer", $accessDeniedMessage, ['width' => 500]));    
    }
    
    
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}

  /**
   * Gets the configuration names that will be editable.
   *
   * @return array
   *   An array of configuration object names that are editable if called in
   *   conjunction with the trait's config() method.
   */
  protected function getEditableConfigNames() {
    return ['config.press_release_disclaimer_form'];
  }

}