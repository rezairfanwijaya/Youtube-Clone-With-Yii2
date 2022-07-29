<?php

use yii\bootstrap4\Nav;
 
?>

<aside class="mt-3 flex-grow-1" style="width: 200px;">
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
            'class' => 'mt-5 d-flex flex-column content flex-1'

        ]])?>

        <hr>
</aside>