<?php

namespace Drupal\sample_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a sample block.
 *
 * @Block(
 *   id = "sample_block_basic",
 *   admin_label = @Translation("Sample: basic block")
 * )
 */
class SampleBasicBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Content of the sample block.'),
    );
  }

}
