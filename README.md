# Minifier View (HTML, CSS and JavaScript) For Yii2 Like "Spaceless Custom Yii2"

This minifier using https://github.com/mrclay/minify, and integrated for yii2

## Install With Composer

```
php composer.phar require defyma/yii2-minifier:"v1.*.*"
```

## Or Require it
```
"defyma/yii2-minifier": "v1.*.*"
```

# How To Use

1. Add ```<?php \defyma\helper\Minifier::begin(); ?>``` and ```<?php \defyma\helper\Minifier::end(); ?>``` in Layout or View

## Example
layout/main.php

```
    
    <!-- Minifier Begin -->
    <?php \defyma\helper\Minifier::begin(); ?>
    
    <?php $this->beginPage() ?>
    
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <!--
            // Content Head
            -->
        </head>
        <body>
            <?php $this->beginBody() ?>
    
            <!--
            // Content Body
            -->
    
            <?php $this->endBody() ?>
        </body>
    </html>
    
    <?php $this->endPage() ?>
    
    <?php \defyma\helper\Minifier::end(); ?>
     <!-- Minifier END -->
```
----

## Library used
- Original Spaceless Yii2
- HTML & CSS Minifier Using **Minify** By Stephen Clay <steve@mrclay.org>
- JavaScript Minify Using **JShrink** By Elan Ruusamäe <glen@pld-linux.org>

To Use Custom Library please refer to **@vendor\defyma\yii2-minifier\Minifier.php**.
