<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_sku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discounted_price')->textInput() ?>

    <?= $form->field($model, 'product_cart_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_long_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <?= $form->field($model, 'subcategory')->textInput() ?>

    <?= $form->field($model, 'units')->textInput() ?>

    <?= $form->field($model, 'conditionitem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'discount_amount')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'product_create_date')->textInput() ?>

    <?= $form->field($model, 'product_update_date')->textInput() ?>

    <?= $form->field($model, 'product_delete_date')->textInput() ?>

    <?= $form->field($model, 'product_live')->textInput() ?>

    <?= $form->field($model, 'product_unlimited')->textInput() ?>

    <?= $form->field($model, 'product_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dealoftheday')->textInput() ?>

    <?= $form->field($model, 'slider')->textInput() ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stockstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colour')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
