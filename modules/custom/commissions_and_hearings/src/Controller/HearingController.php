<?php
/**
 * @file
 * Contains \Drupal\commissions_and_hearings\Controller\HelloController.
 */

namespace Drupal\commissions_and_hearings\Controller;

use Drupal\Core\Controller\ControllerBase;

class HearingController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
}