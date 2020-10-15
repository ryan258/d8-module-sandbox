<?php
namespace Drupal\hello_manny;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares a greeting for the Manny.
 */

class HelloMannyGreeting {
  use StringTranslationTrait;

  /**
   * Returns the greeting 
   */
  public function getGreeting() {
    $time = new \DateTime();
    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      return $this->t('Good morning Manny');
    }
    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      return $this->t('Good afternoon Manny');
    }
    if ((int) $time->format('G') >= 18) {
      return $this->t('Good evening Manny');
    }
  }
}