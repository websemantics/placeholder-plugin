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

use Websemantics\PlaceholderPlugin\Image\Command\GetImage;
use Anomaly\Streams\Platform\Addon\Plugin\PluginCriteria;
use Anomaly\Streams\Platform\Support\Collection;

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
            new \Twig_SimpleFunction(
                'placeholder',
                function ($params = []) {
                    return new PluginCriteria(
                        'render',
                        function (Collection $options) use ($params) {
                            return $this->dispatch(new GetImage($options->put('params', $params)));
                        }
                    );
                }
            ),
        ];
    }
}
