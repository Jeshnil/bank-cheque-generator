<?php
/**
  * @file
  * Contains \Drupal\chequedemo\Form\ChequeForm
  */

namespace Drupal\chequedemo\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
  * Provides a Cheque Generator form
  */
class ChequeForm extends FormBase {
  /**
    * (@inheritdoc)
    */
  public function getFormId() {
    return 'chequedemo_form';
  }
  
  /**
    * (@inheritdoc)
    */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Form input for First Name
    $form['fname'] = array(
      '#title' => t('First Name'),
      '#type' => 'textfield',
      '#size' => 60,
      '#description' => t('Please enter your First Name.'),
      '#required' => TRUE,
    );
    // Form input for Last Name
    $form['lname'] = array(
      '#title' => t('Last Name'),
      '#type' => 'textfield',
      '#size' => 60,
      '#description' => t('Please enter your Last Name.'),
      '#required' => TRUE,
    );
    // Form input for Payee Name
    $form['pname'] = array(
      '#title' => t('Payee Name'),
      '#type' => 'textfield',
      '#size' => 60,
      '#description' => t('Please enter the Payee Name.'),
      '#required' => TRUE,
    );
    // Form input for Sum
    $form['sum'] = array(
      '#title' => t('Sum'),
      '#type' => 'number',
      '#size' => 10,
      '#min' => 1,
      '#max' => 1000000,
      '#description' => t('Please enter value between 1 and 1000000.'),
      '#required' => TRUE,
    );
    // Form input for Submit button
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Generate Cheque'),
    );
    return $form;
  }
  
  /**
    * (@inheritdoc)
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Check and validate form input for first name
    if (strlen($form_state->getValue('fname')) > 60) {
      $form_state->setErrorByName('fname', $this->t('The first name is too long. Please enter less than 60 characters.'));
    }
    // Check and validate form input for last name
    if (strlen($form_state->getValue('lname')) > 60) {
      $form_state->setErrorByName('lname', $this->t('The last name is too long. Please enter less than 60 characters.'));
    }
    // Check and validate form input for payee name
    if (strlen($form_state->getValue('pname')) > 60) {
      $form_state->setErrorByName('pname', $this->t('The payee name is too long. Please enter less than 60 characters.'));
    }
  }
  
  /**
    * (@inheritdoc)
    */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Set redirect path upon form submission to page with cheque
    $fname = $form_state->getValue('fname');
    $lname = $form_state->getValue('lname');
    $pname = $form_state->getValue('pname');
    $sum = $form_state->getValue('sum');
    // Passing parameters using query
    $path_param['query'] = [
     'fname' => $fname,
     'lname' => $lname,
     'pname' => $pname,
     'sum' => $sum,
    ];
    // Redirect to Cheque result page upon submission
    $form_state->setRedirectUrl(Url::fromUri('internal:' . '/cheque-result', $path_param));
  }
  
}