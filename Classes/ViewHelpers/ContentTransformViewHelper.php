<?php
namespace Medienreaktor\NewsInstantArticles\ViewHelpers;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

/**
 * ContentTransformViewHelper
 *
 * @package TYPO3
 * @subpackage NewsInstantArticles
 */
class ContentTransformViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Render content
     *
     * @return string Transformed content
     */
    public function render()
    {
        $content = $this->renderChildren();

        $content = str_replace('<h3>', '<h2>', $content);
        $content = str_replace('</h3>', '</h2>', $content);
        $content = str_replace('<h4>', '<h2>', $content);
        $content = str_replace('</h4>', '</h2>', $content);
        $content = str_replace('<h5>', '<h2>', $content);
        $content = str_replace('</h5>', '</h2>', $content);
        $content = str_replace('<h6>', '<h2>', $content);
        $content = str_replace('</h6>', '</h2>', $content);
        $content = str_replace(' class="bodytext"', '', $content);

        return $content;
    }
}
