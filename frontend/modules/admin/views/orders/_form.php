<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrderUserID')->textInput() ?>

    <?= $form->field($model, 'OrderAmount')->textInput() ?>

    <?= $form->field($model, 'OrderShipName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderShipAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderShipAddress2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderCity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderState')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderZip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderFax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderShipping')->textInput() ?>

    <?= $form->field($model, 'OrderTax')->textInput() ?>

    <?= $form->field($model, 'OrderEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderDate')->textInput() ?>

    <?= $form->field($model, 'OrderShipped')->textInput() ?>

    <?= $form->field($model, 'OrderTrackingNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrderStatus')->textInput() ?>

    <?= $form->field($model, 'StatusCompleted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StatusDeclined')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
