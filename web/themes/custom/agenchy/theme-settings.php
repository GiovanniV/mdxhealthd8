<?php
use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\file\Entity\File;
use Drupal\Core\Url;

function agenchy_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state) { 
    $form['settings'] = array(
        '#type' => 'details',
        '#title' => t('Theme settings'),
        '#open' => TRUE,
    );
  //Switcher setting
    $form['settings']['switcher'] = array(
        '#type' => 'details',
        '#title' => t('Switcher Style'),
        '#open' => FALSE,
    );
    //Switcher style
      $form['settings']['switcher']['disable_switch'] = array(
          '#title' => t('Switcher style'),
          '#type' => 'select',
          '#options' => array('on' => t('ON'), 'off' => t('OFF')),
          '#default_value' => theme_get_setting('disable_switch', 'agenchy'),
      );
    //Switcher layout
      $form['settings']['switcher']['layout'] = array(
          '#type' => 'select',
          '#title' => t('Default layout'),
          '#options' => array(
              'boxed' => t('Boxed'),
              'wide' => t('Full width'),
              'layout-wide' => t('Wide'),
          ),
          '#default_value' => theme_get_setting('layout', 'agenchy'),
      );
    //Switcher background image
      $form['settings']['switcher']['bg_image'] = array(
        '#type' => 'textfield',
        '#title' => t('URL of the background image'),
        '#default_value' => theme_get_setting('bg_image'),
        '#description' => t('Enter a URL background image.'),
        '#size' => 40,
        '#maxlength' => 512,
        '#attributes' => array('disabled' => 'disabled'),
      );
    //Switcher background image upload
      $form['settings']['switcher']['bg_image_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload background image'),
        '#size' => 40,
        '#attributes' => array('enctype' => 'multipart/form-data'),
        '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
        '#element_validate' => array('bg_image_validate')

      );
  //Header
    $form['settings']['header'] = array(
        '#type' => 'details',
        '#title' => t('Header settings'),
        '#open' => FALSE,
    );
    //Header style
      $form['settings']['header']['header_style'] = array(
          '#title' => t('Header version'),
          '#type' => 'select',
          '#options' => array(
              'style1' => t('Header 1 - Default'),
              'style2' => t('Header 2 - Center'),
              'style3' => t('Header 3 - Login'),
              'style4' => t('Header 4 - Profile'),
              'style5' => t('Header 5 - Full Width'),
              'style6' => t('Header 6 - Below Slider'),
              'style7' => t('Header 7 - Sticky'),
              'style8' => t('Header 8 - Transparent'),
              'style9' => t('Header 9- Semi Transparent'),
              'style10' => t('Header 10 - Semi Transparent - Light'),
          ),
          '#default_value' => theme_get_setting('header_style', 'agenchy'),
      );
    //Page headerss
      $form['settings']['header']['page_header'] = array(
          '#type' => 'details',
          '#title' => t('Page header settings'),
          '#open' => FALSE,
      );
    //Page Headers Style
      $form['settings']['header']['page_header']['page_headers_style'] = array(
          '#title' => t('Page Headers Style'),
          '#type' => 'select',
          '#options' => array(
              'default' => t('Page Header - Default'),
              'dark' => t('Page Header - Dark'),
              'small' => t('Page Header - Small'),
              'center' => t('Page Header - Center'),
              'button' => t('Page Header - Button'),
              'contact' => t('Page Header - Contact'),
              'video' => t('Page Header - Background Video'),
              'image' => t('Page Header - Background Image'),
              'color' => t('Page Header - Background Color'),
          ),
          '#default_value' => theme_get_setting('page_headers_style', 'agenchy'),
      );
    //Background Image for style Page Header - Center
      $form['settings']['header']['page_header']['image_page_header'] = array(
            '#type' => 'details',
            '#title' => t('Background Image Page Header'),
            '#open' => FALSE,
      );
      $form['settings']['header']['page_header']['image_page_header']['image_page_header_bg'] = array(
        '#type' => 'textfield',
        '#title' => t('URL of the Header background image.'),
        '#default_value' => theme_get_setting('image_page_header_bg'),
        '#description' => t('Enter a URL background image.'),
        '#size' => 40,
        '#maxlength' => 512,
        '#attributes' => array('disabled' => 'disabled'),
      );
      $form['settings']['header']['page_header']['image_page_header']['image_page_header_bg_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload Header background image'),
        '#size' => 40,
        '#attributes' => array('enctype' => 'multipart/form-data'),
        '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
        '#element_validate' => array('image_page_header_bg_validate')

      );
    //Content Page Header - Background Video
      $form['settings']['header']['page_header']['video_page_header'] = array(
            '#type' => 'details',
            '#title' => t('Background Video Page Header'),
            '#open' => FALSE,
      );
      $form['settings']['header']['page_header']['video_page_header']['field_header_bg_video'] = array(
          '#title' => t('Header bg video'),
          '#type' => 'textfield',
          '#description' => t('For Page Header - Background Video'),
          '#default_value' => theme_get_setting('field_header_bg_video', 'agenchy'),
      );
    //Button Page Header Contact
      $form['settings']['header']['page_header']['page_header_contact'] = array(
            '#type' => 'details',
            '#title' => t('Button and Path For Page Header Contact'),
            '#open' => FALSE,
      );
      $form['settings']['header']['page_header']['page_header_contact']['button_page_header_contact'] = array(
        '#type' => 'textarea',
        '#title' => t('Button or Path'),
        '#default_value' => theme_get_setting('button_page_header_contact', 'agenchy'),
      );
    //Button Page Header Button
      $form['settings']['header']['page_header']['page_header_button'] = array(
            '#type' => 'details',
            '#title' => t('Button and Path For Page Header Button'),
            '#open' => FALSE,
      );
      $form['settings']['header']['page_header']['page_header_button']['button_page_header_button'] = array(
        '#type' => 'textarea',
        '#title' => t('Button or Path'),
        '#default_value' => theme_get_setting('button_page_header_button', 'agenchy'),
      );

    //Header logo
      $form['settings']['header']['logo_image'] = array(
          '#type' => 'details',
          '#title' => t('Logo'),
          '#default_value' => theme_get_setting('logo_image', 'agenchy'),
      );
    //Header logo image
      $form['settings']['header']['logo_image']['logo_image_header_bg'] = array(
        '#type' => 'textfield',
        '#title' => t('URL of the logo image'),
        '#default_value' => theme_get_setting('logo_image_header_bg'),
        '#description' => t('Enter a URL logo image.'),
        '#size' => 40,
        '#maxlength' => 512,
        '#attributes' => array('disabled' => 'disabled'),
      );
    //Header logo image upload
      $form['settings']['header']['logo_image']['logo_image_header_bg_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload logo image'),
        '#size' => 40,
        '#attributes' => array('enctype' => 'multipart/form-data'),
        '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
        '#element_validate' => array('logo_image_header_bg_validate')

      );
    //Header social networks
      $form['settings']['header']['header_social_networks'] = array(
        '#type' => 'textarea',
        '#title' => t('Social networks'),
        '#default_value' => theme_get_setting('header_social_networks', 'agenchy'),
      );
    //print_r($form['settings']['header']['second_logo']);
    $form['settings']['general_setting'] = array(
        '#type' => 'details',
        '#title' => t('General Settings'),
        '#open' => FALSE,
    );

    $form['settings']['general_setting']['general_setting_tracking_code'] = array(
        '#type' => 'textarea',
        '#title' => t('Tracking Code'),
        '#default_value' => theme_get_setting('general_setting_tracking_code', 'agenchy'),
    );
   
  // Blog settings
    $form['settings']['blog'] = array(
      '#type' => 'details',
      '#title' => t('Blog settings'),
      '#open' => FALSE,
    );
    $form['settings']['blog']['blog_listing'] = array(
      '#type' => 'details',
      '#title' => t('Blog listing'),
      '#open' => FALSE,
    );
    $form['settings']['blog']['blog_listing']['blog_layout'] = array(
      '#type' => 'select',
      '#title' => t('Default layout'),
      '#options' => array(
          'grid' => t('Grid'),
          'list' => t('List'),
          'large' => t('Large'),
          '2_column' => t('2 Column'),
          '3_column' => t('3 Column'),
          '4_column' => t('4 Column'),
      ),
      '#default_value' => theme_get_setting('blog_layout', 'agenchy'),
    );
    $form['settings']['blog']['blog_listing']['blog_sidebar'] = array(
      '#type' => 'select',
      '#title' => t('Default sidebar'),
      '#options' => array(
          'none' => t('None'),
          'left' => t('Left'),
          'right' => t('Right'),
        ),
      '#default_value' => theme_get_setting('blog_sidebar', 'agenchy'),
    );
  // Cases settings
    $form['settings']['cases'] = array(
      '#type' => 'details',
      '#title' => t('Cases settings'),
      '#open' => FALSE,
    );
    $form['settings']['cases']['cases_listing'] = array(
      '#type' => 'details',
      '#title' => t('Cases listing'),
      '#open' => FALSE,
    );
    $form['settings']['cases']['cases_listing']['cases_layout'] = array(
      '#type' => 'select',
      '#title' => t('Default layout'),
      '#options' => array(
          'grid' => t('Grid'),
          'list' => t('List'),
          '2_column' => t('2 Column'),
          '3_column' => t('3 Column'),
          '4_column' => t('4 Column'),
      ),
      '#default_value' => theme_get_setting('cases_layout', 'agenchy'),
    );
    $form['settings']['cases']['cases_listing']['cases_sidebar'] = array(
      '#type' => 'select',
      '#title' => t('Default sidebar'),
      '#options' => array(
          'none' => t('None'),
          'left' => t('Left'),
          'right' => t('Right'),
        ),
      '#default_value' => theme_get_setting('cases_sidebar', 'agenchy'),
    );
  // Services settings
    $form['settings']['services'] = array(
      '#type' => 'details',
      '#title' => t('Services settings'),
      '#open' => FALSE,
    );
    $form['settings']['services']['services_listing'] = array(
      '#type' => 'details',
      '#title' => t('Services listing'),
      '#open' => FALSE,
    );
    $form['settings']['services']['services_listing']['services_layout'] = array(
      '#type' => 'select',
      '#title' => t('Default layout'),
      '#options' => array(
          'grid' => t('Grid'),
          'list' => t('List'),
          '2_column' => t('2 Column'),
          '3_column' => t('3 Column'),
          '4_column' => t('4 Column'),
      ),
      '#default_value' => theme_get_setting('services_layout', 'agenchy'),
    );
    $form['settings']['services']['services_listing']['services_sidebar'] = array(
      '#type' => 'select',
      '#title' => t('Default sidebar'),
      '#options' => array(
          'none' => t('None'),
          'left' => t('Left'),
          'right' => t('Right'),
        ),
      '#default_value' => theme_get_setting('services_sidebar', 'agenchy'),
    );
  //shop
    $form['settings']['shop'] = array(
      '#type' => 'details',
      '#title' => t('Shop settings'),
      '#open' => FALSE,
    );
    $form['settings']['shop']['shop_listing'] = array(
      '#type' => 'details',
      '#title' => t('Shop listing'),
      '#open' => FALSE,
    );
    $form['settings']['shop']['shop_listing']['shop_layout'] = array(
      '#type' => 'select',
      '#title' => t('Default layout'),
      '#options' => array(
          '2_column' => t('Grid 2 Column'),
          '3_column' => t('Grid 3 Column'),
          '4_column' => t('Grid 4 Column'),
      ),
      '#default_value' => theme_get_setting('shop_layout', 'agenchy'),
    );
  //other page
    $form['settings']['other_page'] = array(
      '#type' => 'details',
      '#title' => t('Other pages'),
      '#open' => FALSE,
    );
    $form['settings']['other_page']['other_page_header_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('URL of the header background image'),
      '#default_value' => theme_get_setting('other_page_header_bg'),
      '#description' => t('Enter a URL background image.'),
      '#size' => 40,
      '#maxlength' => 512,
      '#attributes' => array('disabled' => 'disabled'),
    );
    $form['settings']['other_page']['other_page_header_bg_upload'] = array(
      '#type' => 'file',
      '#title' => t('Upload header background image'),
      '#size' => 40,
      '#attributes' => array('enctype' => 'multipart/form-data'),
      '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
      '#element_validate' => array('other_page_header_bg_validate'),
    );
  //maintenance page
    $form['settings']['maintenance_page'] = array(
      '#type' => 'details',
      '#title' => t('Maintenance page'),
      '#open' => FALSE,
    );
    $form['settings']['maintenance_page']['maintenance_page_header_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('URL of the header background image'),
      '#default_value' => theme_get_setting('maintenance_page_header_bg'),
      '#description' => t('Enter a URL background image.'),
      '#size' => 40,
      '#maxlength' => 512,
      '#attributes' => array('disabled' => 'disabled'),
    );
    $form['settings']['maintenance_page']['maintenance_page_header_bg_upload'] = array(
      '#type' => 'file',
      '#title' => t('Upload header background image'),
      '#size' => 40,
      '#attributes' => array('enctype' => 'multipart/form-data'),
      '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
      '#element_validate' => array('maintenance_page_header_bg_validate'),
    );
  // custom css
    $form['settings']['custom_css'] = array(
      '#type' => 'details',
      '#title' => t('Custom CSS'),
      '#open' => FALSE,
    );
  

    $form['settings']['custom_css']['custom_css'] = array(
      '#type' => 'textarea',
      '#title' => t('Custom CSS'),
      '#default_value' => theme_get_setting('custom_css', 'agenchy'),
      '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
    );
  //footer settings
    $form['settings']['footer'] = array(
      '#type' => 'details',
      '#title' => t('Footer settings'),
      '#open' => FALSE,
    );
    $form['settings']['footer']['footer_style'] = array(
      '#type' => 'select',
      '#options' => array(
        'style1' => t('Style 1 (Default)'),
        'style2' => t('Style 2'),
        'style3' => t('Style 3'),
        'style4' => t('Style 4'),
        'style5' => t('Style 5'),
        'style6' => t('Style 6'),
        'style7' => t('Style 7'),
        'style8' => t('Style 8'),
        ),
      '#required' => FALSE,
      '#title' => t('Footer style'),
      '#default_value' => theme_get_setting('footer_style', 'agenchy'),
    );
    $form['settings']['footer']['footer_image'] = array(
      '#type' => 'details',
      '#title' => t('Footer style 5 Background Image'),
      '#open' => FALSE,
    );
    $form['settings']['footer']['footer_image']['footer_image_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('URL of the footer background image'),
      '#default_value' => theme_get_setting('footer_image_bg'),
      '#description' => t('Enter a URL footer background image.'),
      '#size' => 40,
      '#maxlength' => 512,
      '#attributes' => array('disabled' => 'disabled'),
    );
    $form['settings']['footer']['footer_image']['footer_image_bg_upload'] = array(
      '#type' => 'file',
      '#title' => t('Upload footer background image'),
      '#size' => 40,
      '#attributes' => array('enctype' => 'multipart/form-data'),
      '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),
      '#element_validate' => array('footer_image_bg_validate')
    );
    $form['settings']['footer']['copyright_text'] = array(
      '#type' => 'textarea',
      '#title' => t('Copyright text'),
      '#default_value' => theme_get_setting('copyright_text', 'agenchy'),
    );
}
//Switcher bg
function bg_image_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('bg_image_upload', $validators, "public://bg_image", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('bg_image', $file_url);
    }
 }
}
//logo image
function logo_image_header_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('logo_image_header_bg_upload', $validators, "public://logo_image", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('logo_image_header_bg', $file_url);
    }
 }
}
//background image header center
function image_page_header_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('image_page_header_bg_upload', $validators, "public://image_page_header", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('image_page_header_bg', $file_url);
    }
 }
}
function product_tags_page_header_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('product_tags_page_header_bg_upload', $validators, "public://product_tags", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('product_tags_page_header_bg', $file_url);
    }
 }
}
function shop_page_header_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('shop_page_header_bg_upload', $validators, "public://shop_listing", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('shop_page_header_bg', $file_url);
    }
 }
}

function cart_page_header_bg_validate($element, FormStateInterface $form_state) {
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('cart_page_header_bg_upload', $validators, "public://cart_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('cart_page_header_bg', $file_url);
    }
 }
}

function checkout_page_header_bg_validate($element, FormStateInterface $form_state) {
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('checkout_page_header_bg_upload', $validators, "public://checkout_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('checkout_page_header_bg', $file_url);
    }
 }
}
function review_page_header_bg_validate($element, FormStateInterface $form_state) {
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('review_page_header_bg_upload', $validators, "public://review_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('review_page_header_bg', $file_url);
    }
 }
}
function complete_page_header_bg_validate($element, FormStateInterface $form_state) {
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('complete_page_header_bg_upload', $validators, "public://complete_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('complete_page_header_bg', $file_url);
    }
 }
}
function other_page_header_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('other_page_header_bg_upload', $validators, "public://other_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('other_page_header_bg', $file_url);
    }
 }
}
function maintenance_page_header_bg_validate($element, FormStateInterface $form_state) {
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('maintenance_page_header_bg_upload', $validators, "public://maintenance_page", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('maintenance_page_header_bg', $file_url);
    }
 }
}
function footer_image_bg_validate($element, FormStateInterface $form_state){
  global $base_url;

  $validators = array('file_validate_extensions' => array('png gif jpg jpeg apng svg'));
  $file = file_save_upload('footer_image_bg_upload', $validators, "public://footer_image", NULL, FILE_EXISTS_REPLACE);

  if (!empty($file)) {
    // change file's status from temporary to permanent and update file database
    if ((is_object($file[0]) == 1)) {
      $file[0]->status = FILE_STATUS_PERMANENT;
      $file[0]->save();
      $uri = $file[0]->getFileUri();
      $file_url = file_create_url($uri);
      $file_url = str_ireplace($base_url, '', $file_url);
      $form_state->setValue('footer_image_bg', $file_url);
    }
 }
}
