<?php

namespace wangjingchun;

use Grafika\Grafika;

/*
 * 图片处理
 */
class ImageEditor
{
    /*
     * resizeExact
     *
     * Resize image to exact dimensions ignoring aspect ratio
     */
    public static function resizeExact($basepath, $image, $width, $height)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResize = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeExact($imageObj, $width, $height);
        $editor->save($imageObj, $basepath . $imageResize);

        return $imageResize;
    }

    /*
     * resizeExactHeight
     *
     * Resize image to exact height. Width is auto calculated
     */
    public static function resizeExactHeight($basepath, $image, $height)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResize = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeExactHeight($imageObj, $height);
        $editor->save($imageObj, $basepath . $imageResize);

        return $imageResize;
    }

    /*
     * resizeExactWidth
     *
     * Resize image to exact width. Height is auto calculated
     */
    public static function resizeExactWidth($basepath, $image, $width)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResize = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeExactWidth($imageObj, $width);
        $editor->save($imageObj, $basepath . $imageResize);

        return $imageResize;
    }

    /*
     * resizeFill
     *
     * Resize image to fill all the space in the given dimension. Excess parts are cropped
     */
    public static function resizeFill($basepath, $image, $width, $height)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResize = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeFill($imageObj, $width, $height);
        $editor->save($imageObj, $basepath . $imageResize);

        return $imageResize;
    }

    /*
     * resizeFit
     *
     * Resize an image to fit within the given width and height. The re-sized image will not exceed the given dimension
     */
    public static function resizeFit($basepath, $image, $width, $height)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResize = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeFit($imageObj, $width, $height);
        $editor->save($imageObj, $basepath . $imageResize);

        return $imageResize;
    }

}