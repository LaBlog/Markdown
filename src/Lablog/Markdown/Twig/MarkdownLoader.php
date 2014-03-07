<?php

namespace Lablog\Markdown\Twig;

use Twig_Environment;
use Twig_Function_Function;
use Twig_Filter_Method;
use Twig_Extension;
use Michelf\MarkdownExtra;

class MarkdownLoader extends Twig_Extension
{

    /**
     * Load the markdown class object.
     *
     * @return void
     */
    public function __construct()
    {
        $this->markdown = new MarkdownExtra;
    }

    public function getName()
    {
        return 'MarkdownLoader';
    }

    public function getFilters()
    {
        return array(
            'markdown' => new Twig_Filter_Method($this, 'markdownTransform')
        );
    }

    public function markdownTransform($markdown)
    {
        return $this->markdown->transform($markdown);
    }
}