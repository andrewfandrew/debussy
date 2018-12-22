<?php

namespace Drupal\debussy\Utility;

/**
 * Trait to implement a "drop-in" template for Example's controllers.
 *
 * This is a simple utility trait to allow our example modules to put their
 * explanatory text into a twig template, and pass any variables needed
 * for the template.  By default, the template will be named
 * 'explanation.html.twig, and should be placed in the module's templates/
 * directory.
 *
 * These templates should be localizable as is usual for Drupal's Twig
 * templates, using the {% trans } and {% endtrans %} tags to block out the
 * text that needs to be passed to the translator. Modules using this
 * trait should:
 *
 *  - Implement the getModuleName() member function.
 *  - Override the getDescriptionVariables() member function in order to
 *    pass variables to Twig needed to render your template.
 *
 * @see \Drupal\Core\Render\Element\InlineTemplate
 * @see https://www.drupal.org/developing/api/8/localization
 */
trait ExplanationTemplateTrait {

    /**
     * Generate a render array with our templated content.
     *
     * @return array
     *   A render array.
     */
    public function explanation()
    {
        $template_path = $this->getExplanationTemplatePath();
        $template = file_get_contents($template_path);
        $build = [
            'description' => [
                '#type' => 'inline_template',
                '#template' => $template,
                '#context' => $this->getExplanationVariables(),
            ],
        ];
        return $build;
    }

    /**
     * Name of our module.
     *
     * @return string
     *   A module name.
     */
    abstract protected function getModuleName();

    /**
     * Variables to act as context to the twig template file.
     *
     * @return array
     *   Associative array that defines context for a template.
     */
    protected function getExplanationVariables() {
        $variables = [
            'module' => $this->getModuleName(),
        ];
        return $variables;
    }

    /**
     * Get full path to the template.
     *
     * @return string
     *   Path string.
     */
    protected function getExplanationTemplatePath() {
        return drupal_get_path('module', $this->getModuleName()) . "/templates/explanation.html.twig";
    }

}
