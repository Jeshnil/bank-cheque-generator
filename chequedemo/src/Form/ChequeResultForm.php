<?php
/**
  * @file
  * Contains \Drupal\chequedemo\Form\ChequeResultForm
  */

namespace Drupal\chequedemo\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Component\Utility\Xss;

/**
  * Provides a Cheque
  */
class ChequeResultForm extends FormBase {
  /**
    * (@inheritdoc)
    */
  public function getFormId() {
    return 'chequeresult_form';
  }
  
  /**
    * (@inheritdoc)
    */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $fname = \Drupal::request()->get('fname');
    $lname = \Drupal::request()->get('lname');
    $pname = \Drupal::request()->get('pname');
    $sum = \Drupal::request()->get('sum');
    
    // Display cheque content - Bank name
    $form['bank'] = array(
      '#markup' => '<div class="sidebar"><h2>'.t('Commonwealth Bank of Australia').'</h2>',
    );
    // Display cheque content - Date
    $form['date'] = array(
      '#markup' => '<h2>'.t('Date: ').'<em>'.date('d F, Y').'</em>'.'</h2>',
    );
    // Display cheque content - Payee name
    $form['pay'] = array(
      '#markup' => '<h2>'.t('Pay: ').'<em>'.$pname.'</em>'.'</h2>',
    );
    // Display cheque content - Sum
    $form['textsum'] = array(
      '#markup' => '<h2>'.t('The sum of $').$sum.'</h2>',
    );
    // Display cheque content - Customer name
    $form['customer'] = array(
      '#markup' => '<h2>'.'<strong><em>'.$fname.t(' ').$lname.'</em></strong>'.'</h2></div>',
    );
    
    return $form;
  }
  
  /**
    * (@inheritdoc)
    */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
  }
}