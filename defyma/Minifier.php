<?php
/**
 * Defy M Aminuddin
 * defyma85@gmail.com
 * defyma.com
 */

namespace defyma\helper;

use Yii;
use yii\base\Widget;

class Minifier extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        //Original YII Spaceless
        $html = trim(preg_replace('/>\s+</', '><', ob_get_clean()));

        //Minify
        $minDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'minifier'.DIRECTORY_SEPARATOR."Minifier.php";
        require_once($minDir);
        $minifier      = new \Minifier_DEFYMA;
        $html_compress = $minifier->minifyHTML($html);

        $html_compress .= "
<!-- Generate Date: ".date('Y-m-d H:i:s')." -->

";
        //Output
        echo $html_compress;
    }
}
