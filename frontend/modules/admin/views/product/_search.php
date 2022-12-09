<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'product_sku') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_price') ?>

    <?= $form->field($model, 'discounted_price') ?>

    <?php // echo $form->field($model, 'product_cart_desc') ?>

    <?php // echo $form->field($model, 'product_long_desc') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'subcategory') ?>

    <?php // echo $form->field($model, 'units') ?>

    <?php // echo $form->field($model, 'conditionitem') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'discount_amount') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'product_create_date') ?>

    <?php // echo $form->field($model, 'product_update_date') ?>

    <?php // echo $form->field($model, 'product_delete_date') ?>

    <?php // echo $form->field($model, 'product_live') ?>

    <?php // echo $form->field($model, 'product_unlimited') ?>

    <?php // echo $form->field($model, 'product_location') ?>

    <?php // echo $form->field($model, 'dealoftheday') ?>

    <?php // echo $form->field($model, 'slider') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'stockstatus') ?>

    <?php // echo $form->field($model, 'colour') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
