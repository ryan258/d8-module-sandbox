<?php
namespace Drupal\hello_manny\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_manny\HelloMannyGreeting;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for the hello manny message.
 */

class HelloMannyController extends ControllerBase {
  /**
   * @var \Drupal\hello_manny\HelloMannyGreeting
   */
  protected $greeting;

  /**
   * HelloMannyController constructor.
   * 
   * @params \Drupal\hello_manny\HelloMannyGreeting $greeting
   */
  public function __construct(HelloMannyGreeting $greeting) {
    $this->greeting = $greeting;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('hello_manny.greeting')
    );
  }

  /**
   * Hello Manny.
   * 
   * return array
   */
  public function helloManny() {
    return [
      '#markup' => $this->greeting->getGreeting(),
    ];
  }
}
