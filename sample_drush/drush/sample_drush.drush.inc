<?php

/**
 * @file
 * Drush integration.
 */

/**
 * Implements hook_drush_command().
 */
function sample_drush_drush_command() {
  $items = [];

  // The key in the $items array is the name of the command.
  $items['sample'] = [
    'callback' => 'sample_drush_callback',
    'description' => dt('Sample Drush action executed through the sample custom module.'),
    // For older version of Drush (v6 and lower). In newer versions this is
    // deprecated.
    'bootstrap' => DRUSH_BOOTSTRAP_DRUSH,
    'arguments' => [
      'arg1' => dt('Optional. Sample argument 1.'),
      'arg2' => dt('Optional. Sample argument 2.'),
    ],
    'aliases' => ['smpl'],
  ];

  return $items;
}

/**
 * Implements hook_drush_help().
 */
function sample_drush_drush_help($section) {
  switch ($section) {
    case 'drush:sample':
      return dt('This is the help text displayed for our custom Drush command.');
  }
}

/**
 * Callback for our custom command.
 */
function sample_drush_callback() {
  // Default argument values.
  $arg1 = 'default argument 1';
  $arg2 = 'default argument 2';

  // Get the arguments from CLI.
  $args = func_get_args();
  if (!empty($args[0])) $arg1 = $args[0];
  if (!empty($args[1])) $arg2 = $args[1];

  drush_log(dt('This is a custom Drush command. Argument 1: @arg1. Argument 2: @arg2.', [
    '@arg1' => $arg1,
    '@arg2' => $arg2,
  ]), 'ok');
}
