<?php

namespace Drupal\hello_velir\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a block called "HelloVelir block".
 *
 * @Block(
 *  id = "hello_velir_block",
 *  admin_label = @Translation("HelloVelir block")
 * )
 */
class HelloVelirBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Fetch current user.
    $account = \Drupal::currentUser();

    $logged_in = \Drupal::currentUser()->isAuthenticated();
    if($logged_in !== TRUE){
      return [
        '#markup' => t('Log In'),
      ];
    }
    else{
      return [
        '#markup' => t('Welcome, @username !',
          array(
            '@username' => user_format_name($account),
          )
        ),
      ];
    }

  }
}
