<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Productimages */

$this->title = 'Create Productimages';
$this->params['breadcrumbs'][] = ['label' => 'Productimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productimages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
