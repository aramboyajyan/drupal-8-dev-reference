For current user:

    \Drupal::currentUser()->hasPermission('permission name');

For a specific user:
  
    $account = user_load(USER_ID);
    $account->hasPermission('permission name');
