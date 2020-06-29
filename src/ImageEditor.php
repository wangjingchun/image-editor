<?php

namespace wangjingchun;

use Grafika\Grafika;

/*
 * 图片处理
 */
class ImageEditor
{
    /*
     * resizeFill
     */
    public static function resizeFill($basepath, $image)
    {
        $dirname = pathinfo($image, PATHINFO_DIRNAME);
        $filename = pathinfo($image, PATHINFO_BASENAME);

        $editor = Grafika::createEditor();

        $imageObj = null;
        $imageResizeFill = $dirname . '/thumb_' . $filename;

        $editor->open($imageObj, $basepath . $image);
        $editor->resizeFill($imageObj, 200, 200);
        $editor->save($imageObj, $basepath . $imageResizeFill);

        return $imageResizeFill;
    }
}