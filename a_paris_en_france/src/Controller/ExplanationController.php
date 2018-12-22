<?php

namespace Drupal\a_paris_en_france\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\debussy\Utility\ExplanationTemplateTrait;

/**
 * Controller for ********.
 *
 * This controller only deals with the description path.
 */
class ExplanationController extends ControllerBase {

    use ExplanationTemplateTrait;

    /**
     * {@inheritdoc}
     */
    protected function getModuleName() {
        return 'a_paris_en_france';
    }

}
