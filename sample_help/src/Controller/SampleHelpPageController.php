<?php

namespace Drupal\sample_help\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for our sample page route.
 */
class SampleHelpPageController extends ControllerBase {

  /**
   * Returns build array for our sample page.
   */
  public function showPage() {
    $output = [];

    $output[] = [
      '#markup' => $this->t('This is a sample help page.'),
    ];

    return $output;
  }

}
