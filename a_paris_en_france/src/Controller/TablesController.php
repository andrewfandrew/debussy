<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 14/12/2018
 * Time: 03:39
 */
namespace Drupal\a_paris_en_france\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller routines for A Paris En France routes
 */
class TablesController extends ControllerBase
{
    public function tables()
    {
        $build['table'] = [
            '#type' => 'table',
            '#caption' => $this->t('Our favorite colors.'),
            '#header' => [$this->t('Name'), $this->t('Favorite color')],
            '#rows' => [
                [$this->t('Amber'), $this->t('teal')],
                [$this->t('Addi'), $this->t('green')],
                [$this->t('Blake'), $this->t('#063')],
                [$this->t('Enid'), $this->t('indigo')],
                [$this->t('Joe'), $this->t('green')],
            ],
            '#description' => $this->t('Example of using #type.'),
        ];

        $build['paragraph-1'] = [
            '#markup' => '<em>' . t('Falling between two stalls..') .'</em>',
        ];

        $build['table1'] = [
            '#type' => 'table',
            '#caption' => $this->t('Our favorite colors.'),
            '#header' => [$this->t('Name'), $this->t('Favorite color')],
            '#rows' => [
                [$this->t('Amber'), $this->t('teal')],
                [$this->t('Addi'), $this->t('green')],
                [$this->t('Blake'), $this->t('#063')],
                [$this->t('Enid'), $this->t('indigo')],
                [$this->t('Joe'), $this->t('green')],
            ],
            '#description' => $this->t('Example of using #type.'),
        ];

        return $build;
    }

}

