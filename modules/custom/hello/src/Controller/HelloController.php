<?php
/**
 * @file
 * Contains \Drupal\commissions_and_hearings\Controller\HelloController.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello DD, World!'),
    );
  }
}