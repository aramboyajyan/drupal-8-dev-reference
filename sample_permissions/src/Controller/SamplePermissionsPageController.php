<?php

namespace Drupal\sample_permissions\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for our sample page route.
 */
class SamplePermissionsPageController extends ControllerBase {

  /**
   * Prints the overview page.
   */
  public function overviewPage() {
    $build = [];

    $build['content'] = [
      '#prefix' => '<p>',
      '#markup' => $this->t('This is overview page. You will see your level of permissions below:'),
      '#suffix' => '</p>',
    ];

    $level1_access = \Drupal::currentUser()->hasPermission('sample permission 1');
    $level2_access = \Drupal::currentUser()->hasPermission('sample permission 2');
    $level3_access = \Drupal::currentUser()->hasPermission('sample permission 3');

    if ($level1_access) {
      $build['level1'] = [
        '#prefix' => '<p>',
        '#markup' => $this->t('You have access to the first level.'),
        '#suffix' => '</p>',
      ];
    }

    if ($level2_access) {
      $build['level2'] = [
        '#prefix' => '<p>',
        '#markup' => $this->t('You have access to the second level.'),
        '#suffix' => '</p>',
      ];
    }

    if ($level3_access) {
      $build['level3'] = [
        '#prefix' => '<p>',
        '#markup' => $this->t('You have access to the third level.'),
        '#suffix' => '</p>',
      ];
    }

    if (!$level1_access && !$level2_access && !$level3_access) {
      $build['no_access'] = [
        '#prefix' => '<p>',
        '#markup' => $this->t('You do not have access to any of the levels.'),
        '#suffix' => '</p>',
      ];
    }

    return $build;
  }

  /**
   * Returns render array for the level1 permission page.
   */
  public function level1Page() {
    $build = [];
    $build['content'] = [
      '#prefix' => '<p>',
      '#markup' => $this->t('You have level 1 permissions.'),
      '#suffix' => '</p>',
    ];

    return $build;
  }

  /**
   * Returns render array for the level2 permission page.
   */
  public function level2Page() {
    $build = [];
    $build['content'] = [
      '#prefix' => '<p>',
      '#markup' => $this->t('You have level 2 permissions.'),
      '#suffix' => '</p>',
    ];

    return $build;
  }

  /**
   * Returns render array for the level3 permission page.
   */
  public function level3Page() {
    $build = [];
    $build['content'] = [
      '#prefix' => '<p>',
      '#markup' => $this->t('You have level 3 permissions.'),
      '#suffix' => '</p>',
    ];

    return $build;
  }

}
