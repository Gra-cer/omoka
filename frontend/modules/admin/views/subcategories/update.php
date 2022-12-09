<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Subcategories */

$this->title = 'Update Subcategories: ' . $model->sub_id;
$this->params['breadcrumbs'][] = ['label' => 'Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_id, 'url' => ['view', 'sub_id' => $model->sub_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subcategories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
