<?php

namespace Drupal\acquia_onboard_jawaadIguazu\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for book routes.
 */
class AcquiaOnboardJawaadIguazuController extends ControllerBase {

  /**
   * Prints a listing of all books.
   *
   * @return array
   *   A render array representing the listing of all books content.
   */
  public function acquiaOnboardJawaadIguazuRender($githubid) {
    return [
      '#markup' => $this->t('<h2>Hello @ghid</h2>', [
        '@ghid' => $githubid,
      ]),
    ];
  }

}
