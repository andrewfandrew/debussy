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

class RelativePronounsController extends ControllerBase
{

    public function relative_pronouns()
    {

        $build['rp-table'] = [
            '#type' => 'table',
            '#caption' => $this->t('Relative pronoun qui used as subject.'),
            '#header' => [$this->t('Rules and patterns'), $this->t('Comme ça..')],
            '#rows' => [
                [$this->t('Links ideas to persons and things already mentioned'), $this->t('')],
                [$this->t('Relative pronouns links two sentences'), $this->t('')],
                [$this->t('The second sentence becomes the subordinate clause '), $this->t('Elle regarde le chat qui dort.')],
                [$this->t('Use qui used as a subject'), $this->t('Je connais le personne qui parle.')],
                [$this->t('Tne verb following qui agrees in person and number with the noun that qui replaces'), $this->t("C'est moi qui suis arrivée la première.")],
            ],
            '#description' => $this->t('Using qui to replace the subject of the sentence'),
        ];

        $build['between-rp-tables'] = [
            '#markup' => '<em>' . t('More about relative pronouns..') .'</em>',
        ];

        $build['rp-table-1'] = [
            '#type' => 'table',
            '#caption' => $this->t('Que as the object when the clause already has a subject'),
            '#header' => [$this->t('Name'), $this->t('Favorite color')],
            '#rows' => [
                [$this->t('Like qui, que may refer to people or things'), $this->t("C'est le journaliste que nous préférons.")],
                [$this->t(''), $this->t('')],
                [$this->t(''), $this->t('')],
                [$this->t(''), $this->t('')],
                [$this->t(''), $this->t('')],
            ],
            '#description' => $this->t('Relative pronoun que used as the object when subordinate clause already has a subject.'),
        ];

        return $build;
    }
}

