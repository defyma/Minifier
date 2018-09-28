<?php

/**
 * Defy M Aminuddin
 * defyma85@gmail.com
 * defyma.com
 */

class Minifier_DEFYMA {

    private $minDir;

    function __construct()
    {
        $this->minDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'minify-3.0.3-custom'.DIRECTORY_SEPARATOR;

        require $this->minDir.'config.php';

        ob_start();
    }

    function minifyHTML($htmlView)
    {
        //Minify HTML
        require_once $this->minDir.'lib/Minify/HTML.php';

        //Minify CSS
        require_once $this->minDir.'lib/Minify/CSS/Compressor.php';
        require_once $this->minDir.'lib/Minify/CommentPreserver.php';
        require_once $this->minDir.'lib/Minify/CSS/UriRewriter.php';
        require_once $this->minDir.'lib/Minify/CSS.php';

        //Minify JS
        require_once $this->minDir.'lib/Minify/JS/JShrink_minifier.php';
        require_once $this->minDir.'lib/Minify/JS/JShrink.php';

        $minOutput = Minify_HTML_DEFYMA::minify($htmlView, array(
            'cssMinifier' => array('Minify_CSS_DEFYMA', 'minify'),
            'jsMinifier' => array('Minify\JSdefyma\JShrink_DEFYMA', 'minify')
        ));

        return $minOutput;
    }

}
