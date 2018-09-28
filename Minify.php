<?php
/**
 * Defy M Aminuddin
 * defyma85@gmail.com
 * defyma.com
 */

namespace defyma\helper;

use Yii;
use yii\base\Component;

class Minify extends Component
{

    public static function minify($content)
    {
        //Minify
        $minDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'minifier'.DIRECTORY_SEPARATOR."Minifier.php";
        require_once($minDir);
        $minifier      = new \Minifier_DEFYMA;

        $html_compress = $minifier->minifyHTML($content);

        $html_compress .= "
<!-- Generate Date: ".date('Y-m-d H:i:s')." -->

";
        //Output
        return $html_compress;
    }
}
