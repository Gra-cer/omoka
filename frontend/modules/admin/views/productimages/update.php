<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Productimages */

$this->title = 'Update Productimages: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Productimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'imageid' => $model->imageid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productimages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
