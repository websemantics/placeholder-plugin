<?php

namespace Websemantics\PlaceholderPlugin;

/**
 * Class PlaceholderPluginFunctions.
 *
 * @link      http://websemantics.ca
 *
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <adnan@websemantics.ca>
 * @copyright 2012-2015 Web Semantics, Inc.
 */
class PlaceholderPluginFunctions
{
    /**
     * Return a stream entry form.
     *
     * @param array $params:
     *
     * width  : image width
     * height : image height
     * color : text color
     * background : image background color
     * fontSize : text font size
     *
     * @return $this
     */
    public function image(array $params = [])
    {
        $width = array_get($params, 'width', 100);
        $height = array_get($params, 'height', 100);
        $color = array_get($params, 'color', '959595');
        $background = array_get($params, 'background', 'cdcdcd');
        $text = array_get($params, 'text', $width.' x '.$height);
        $angle = array_get($params, 'angle', 0);
        $fontSize = array_get($params, 'fontSize', ($width < 60) ? 5 : 10);

        $font = realpath(__DIR__.'/../resources/font/arial.ttf');
        $image = imagecreatetruecolor($width, $height);

        $dimensions = imagettfbbox($fontSize, $angle, $font, $text);
        $textWidth = abs($dimensions[4] - $dimensions[0]);
        $textHeight = abs($dimensions[5] - $dimensions[1]);

        imagefill($image, 0, 0, '0x'.ltrim($background, '#'));
        imagettftext(
            $image,
            $fontSize,
            $angle,
            ceil(($width - $textWidth) / 2),
            ceil(($height + $textHeight) / 2),
            '0x'.ltrim($color, '#'),
            $font,
            $text
        );

        ob_start();
        imagepng($image);
        $imagedata = ob_get_contents();
        ob_end_clean();

        imagedestroy($image);

        return "<img src='".'data: image/jpeg;base64,'.base64_encode($imagedata)."'>";
    }
}
