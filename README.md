# Minifier View For Yii2

This minifier using https://github.com/mrclay/minify, and integrated for yii2


# How To Use

1. Clone Or Download this project, and extract
2. Copy **defyma** folder to **@app\components**
3. Add ```use app\components\defyma\DefyMinifier;``` in Layout, And
4. Add ```<?php DefyMinifier::begin(); ?>``` and ```<?php DefyMinifier::end(); ?>```

## Example
layout/main.php

```
<?php
//use it
use app\components\defyma\DefyMinifier;
?>
    
    <!-- Minifier Begin -->
    <?php DefyMinifier::begin(); ?>
    
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
    
    <?php DefyMinifier::end(); ?>
     <!-- Minifier END -->
```