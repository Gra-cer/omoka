<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OrderID') ?>

    <?= $form->field($model, 'OrderUserID') ?>

    <?= $form->field($model, 'OrderAmount') ?>

    <?= $form->field($model, 'OrderShipName') ?>

    <?= $form->field($model, 'OrderShipAddress') ?>

    <?php // echo $form->field($model, 'OrderShipAddress2') ?>

    <?php // echo $form->field($model, 'OrderCity') ?>

    <?php // echo $form->field($model, 'OrderState') ?>

    <?php // echo $form->field($model, 'OrderZip') ?>

    <?php // echo $form->field($model, 'OrderCountry') ?>

    <?php // echo $form->field($model, 'OrderPhone') ?>

    <?php // echo $form->field($model, 'OrderFax') ?>

    <?php // echo $form->field($model, 'OrderShipping') ?>

    <?php // echo $form->field($model, 'OrderTax') ?>

    <?php // echo $form->field($model, 'OrderEmail') ?>

    <?php // echo $form->field($model, 'OrderDate') ?>

    <?php // echo $form->field($model, 'OrderShipped') ?>

    <?php // echo $form->field($model, 'OrderTrackingNumber') ?>

    <?php // echo $form->field($model, 'OrderStatus') ?>

    <?php // echo $form->field($model, 'StatusCompleted') ?>

    <?php // echo $form->field($model, 'StatusDeclined') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
