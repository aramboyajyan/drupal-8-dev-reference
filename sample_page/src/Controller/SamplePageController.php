<?php

namespace Drupal\sample_page\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for our sample page route.
 */
class SamplePageController extends ControllerBase {

  /**
   * Prints a sample page.
   *
   * @return array
   *   A render array for our sample page.
   */
  public function render() {
    $output = [];

    $output[] = array(
      '#markup' => 'This is a sample page.',
    );

    return $output;
  }

}
