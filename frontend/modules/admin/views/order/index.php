<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'product_sku',
            'product_name',
            'product_price',
            'discounted_price',
            //'product_cart_desc',
            //'product_long_desc',
            //'category',
            //'subcategory',
            //'units',
            //'conditionitem',
            //'discount',
            //'discount_amount',
            //'status',
            //'product_create_date',
            //'product_update_date',
            //'product_delete_date',
            //'product_live',
            //'product_unlimited',
            //'product_location',
            //'dealoftheday',
            //'slider',
            //'user',
            //'currency',
            //'size',
            //'stockstatus',
            //'colour',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
