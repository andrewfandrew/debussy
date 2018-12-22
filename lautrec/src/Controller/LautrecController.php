<?php

namespace Drupal\lautrec\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\debussy\Utility\ExplanationTemplateTrait;

/**
 * Controller for the tabledrag example.
 *
 * This controller only deals with the description path.
 */
class LautrecController extends ControllerBase {

  use ExplanationTemplateTrait;

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'lautrec';
  }

}
