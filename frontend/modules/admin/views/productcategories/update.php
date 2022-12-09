<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Productcategories */

$this->title = 'Update Productcategories: ' . $model->CategoryID;
$this->params['breadcrumbs'][] = ['label' => 'Productcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CategoryID, 'url' => ['view', 'CategoryID' => $model->CategoryID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productcategories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
