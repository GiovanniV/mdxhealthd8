<?php

namespace Drupal\mdx_press_release\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * PressReleaseDisclaimerForm class.
 */
class PressReleaseDisclaimerForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $options = NULL) {
    $form['open_modal'] = [
      '#type' => 'link',
      '#title' => $this->t('Open Modal'),
      '#url' => Url::fromRoute('mdx_press_release.open_press_release_disclaimer_form'),
      '#attributes' => [
        'class' => [
          'use-ajax',
        ],
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'modal_form_example_form';
  }

  /**
   * Gets the configuration names that will be editable.
   *
   * @return array
   *   An array of configuration object names that are editable if called in
   *   conjunction with the trait's config() method.
   */
  protected function getEditableConfigNames() {
    return ['config.modal_form_example_form'];
  }

}