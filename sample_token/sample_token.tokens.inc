<?php

/**
 * @file
 * Token callbacks for the sample_token module.
 */
use Drupal\Core\Render\BubbleableMetadata;

/**
 * Implements hook_token_info().
 */
function sample_token_token_info() {
  $info['tokens']['sample'] = [
    'name' => t('Sample token'),
    'description' => t('This is a sample token group for development purposes.'),
  ];
  $info['tokens']['sample']['time'] = [
    'name' => t('Timestamp'),
    'description' => t('Get the current UNIX timestamp.'),
    'dynamic' => TRUE,
  ];
  $info['tokens']['sample']['module-name'] = [
    'name' => t('Module name'),
    'description' => t('Get the module name.'),
  ];

  return $info;
}

/**
 * Implements hook_tokens().
 */
function sample_token_tokens($type, array $tokens, array $data = array(), array $options = array(), BubbleableMetadata $bubbleable_metadata) {
  $replacements = [];

  switch ($type) {
    case 'sample':
      foreach ($tokens as $name => $original) {
        switch ($name) {
          case 'time':
            $replacements[$original] = REQUEST_TIME;
            break;
          case 'module-name':
            $replacements[$original] = basename(__FILE__, '.tokens.inc');
            break;
        }
      }
      break;
  }

  return $replacements;
}
