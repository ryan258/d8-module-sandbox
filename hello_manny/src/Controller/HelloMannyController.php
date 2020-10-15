<?php
namespace Drupal\hello_manny\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the hello manny message.
 */

class HelloMannyController extends ControllerBase {
  /**
   * Hello Manny.
   * 
   * return array
   */
  public function helloManny() {
    return [
      '#markup' => $this->t('Hello Manny!')
    ];
  }
}
