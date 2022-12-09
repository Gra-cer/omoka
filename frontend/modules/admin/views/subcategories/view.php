<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Subcategories */

$this->title = $model->sub_id;
$this->params['breadcrumbs'][] = ['label' => 'Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subcategories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'sub_id' => $model->sub_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'sub_id' => $model->sub_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sub_id',
            'sub_name',
            'category_name',
            'category_id',
            'created_at',
            'created_by',
        ],
    ]) ?>

</div>
