<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Productimages */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Productimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="productimages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'imageid' => $model->imageid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'imageid' => $model->imageid], [
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
            'imageid',
            'name',
            'description',
            'type',
            'size',
            'filepath',
            'customer_id',
            'IMAGE_URL:url',
            'FILE_SIZE',
            'ACTUAL_NAME',
            'uploadedby',
            'date',
            'productid',
        ],
    ]) ?>

</div>
