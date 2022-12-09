<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Productcategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productcategories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CategoryName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
