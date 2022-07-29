<?php

use yii\bootstrap4\Nav;
 
?>

<aside class="mt-3 shadow" style="width: 200px; ">
    <?php echo  Nav::widget([
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Video',
                'url' => ['/video/index']
            ]
            ],

        'options' => [
            'class' => 'mt-5 d-flex flex-column content'

        ]])?>

</aside>