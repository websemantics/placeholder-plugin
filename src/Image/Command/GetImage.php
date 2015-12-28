<?php

namespace Websemantics\PlaceholderPlugin\Image\Command;

/*
 * Class GetImage.
 *
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <adnan@websemantics.ca>
 * @copyright 2012-2015 Web Semantics, Inc.
 */

use Anomaly\Streams\Platform\Support\Collection;

class GetImage implements \Illuminate\Contracts\Bus\SelfHandling
{
    /**
     * The placeholder width.
     *
     * @var int
     */
    protected $width;

    /**
     * The placeholder height.
     *
     * @var int
     */
    protected $height;

    /**
     * The placeholder color.
     *
     * @var int
     */
    protected $color;

    /**
     * The placeholder background.
     *
     * @var int
     */
    protected $background;

    /**
     * The placeholder fontSize.
     *
     * @var int
     */
    protected $fontSize;

    /**
     * The placeholder text.
     *
     * @var int
     */
    protected $text;

    /**
     * The placeholder text font.
     *
     * @var int
     */
    protected $font;

    /**
     * Create a new RenderNavigation instance.
     *
     * @param Collection $options
     */
    public function __construct(Collection $options)
    {
        $this->width = array_get(
            $options,
            'width',
            array_get($options['params'], 'width', 100)
        );

        $this->height = array_get(
            $options,
            'height',
            array_get($options['params'], 'height', 100)
        );

        $this->color = ltrim(array_get(
            $options,
            'color',
            array_get($options['params'], 'color', '959595')
        ), '#');

        $this->background = ltrim(array_get(
            $options,
            'background',
            array_get($options['params'], 'background', 'cdcdcd')
        ), '#');

        $this->font = array_get(
            $options,
            'font',
            array_get($options['params'], 'font', 'arial')
        );

        $this->fontSize = array_get(
            $options,
            'fontSize',
            array_get($options['params'], 'fontSize', ($this->width < 60) ? 8 : 14)
        );

        $this->text = array_get(
            $options,
            'text',
            array_get($options['params'], 'text', $this->width.' x '.$this->height)
        );
    }

    /**
     * Handle the command.
     *
     * @return null|string
     */
    public function handle()
    {
        return "<svg viewBox='0 0 $this->width $this->height' width='$this->width' height='$this->height' 
                     xmlns='http://www.w3.org/2000/svg'>
                  <g>
                    <title>Placeholder</title>
                    <rect width='$this->width' height='$this->height' y='0' x='0' fill='#$this->background'/>
                    <text x='50%' y='50%' text-anchor='middle' alignment-baseline='middle' 
                          font-size='$this->fontSize' dominant-baseline='middle' font-family='$this->font' 
                          fill='#$this->color'>
                          $this->text
                    </text>
                  </g>
                </svg>";
    }
}
