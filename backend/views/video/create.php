<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <div class="d-flex flex-column justify-content-center align-items-center">
        <!-- icon upload -->
        <div class="upload-icon mb-3">
            <i class="fa-solid fa-upload"></i>
        </div>

        <!-- caption -->
        <p>Drag and drop a file you want to upload</p>
        <p class="text-muted" style="line-height:0.5px">Your video will be private until you publish it</p>

        <?php ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ])?>

        <!-- button -->
        <button class="btn btn-primary btn-file mt-4" style="width:210px">
            Select File
            <input type="file" id="videoFile" name="video">
        </button>

        <?php ActiveForm::end()?>

    </div>

</div>