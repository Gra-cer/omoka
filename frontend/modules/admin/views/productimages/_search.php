<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\ProductimagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productimages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'imageid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'filepath') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'IMAGE_URL') ?>

    <?php // echo $form->field($model, 'FILE_SIZE') ?>

    <?php // echo $form->field($model, 'ACTUAL_NAME') ?>

    <?php // echo $form->field($model, 'uploadedby') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'productid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
