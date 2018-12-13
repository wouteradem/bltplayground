<?php

namespace Drupal\acquia_onboard_jamesaldred\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for AcquiaOnboardJamesaldred module routes.
 */
class AcquiaOnboardJamesaldredController extends ControllerBase {

  /**
   * Returns an the githubid from the url.
   *
   * @param string $githubid
   *   The last part of the slug.
   *
   * @return array
   *   The content to render
   */
  public function doRender(string $githubid) {

    return [
      '#markup'    => $this->t("<strong>The github ID is:</strong> @githubid",
              ['@githubid' => $githubid]
      ),
    ];
  }

}
