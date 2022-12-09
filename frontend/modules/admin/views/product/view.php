<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Product */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'product_id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'product_id' => $model->product_id], [
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
            'product_id',
            'product_sku',
            'product_name',
            'product_price',
            'discounted_price',
            'product_cart_desc',
            'product_long_desc',
            'category',
            'subcategory',
            'units',
            'conditionitem',
            'discount',
            'discount_amount',
            'status',
            'product_create_date',
            'product_update_date',
            'product_delete_date',
            'product_live',
            'product_unlimited',
            'product_location',
            'dealoftheday',
            'slider',
            'user',
            'currency',
            'size',
            'stockstatus',
            'colour',
        ],
    ]) ?>

</div>
