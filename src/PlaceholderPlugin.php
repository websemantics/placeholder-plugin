<?php

namespace Websemantics\PlaceholderPlugin;

/*
 * Class PlaceholderPlugin.
 *
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <adnan@websemantics.ca>
 * @copyright 2012-2015 Web Semantics, Inc.
 */

class PlaceholderPlugin extends \Anomaly\Streams\Platform\Addon\Plugin\Plugin
{
    /**
     * The plugin functions.
     *
     * @var PlaceholderPluginFunctions
     */
    protected $functions;

    /**
     * Create a new PlaceholderPlugin instance.
     *
     * @param PlaceholderPluginFunctions $functions
     */
    public function __construct(PlaceholderPluginFunctions $functions)
    {
        $this->functions = $functions;
    }

    /**
     * Return plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('placeholder', [$this->functions, 'image'], ['is_safe' => ['html']]),
        ];
    }
}
