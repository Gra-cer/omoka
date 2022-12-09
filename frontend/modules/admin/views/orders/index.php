<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OrderID',
            'OrderUserID',
            'OrderAmount',
            'OrderShipName',
            'OrderShipAddress',
            //'OrderShipAddress2',
            //'OrderCity',
            //'OrderState',
            //'OrderZip',
            //'OrderCountry',
            //'OrderPhone',
            //'OrderFax',
            //'OrderShipping',
            //'OrderTax',
            //'OrderEmail:email',
            //'OrderDate',
            //'OrderShipped',
            //'OrderTrackingNumber',
            //'OrderStatus',
            //'StatusCompleted',
            //'StatusDeclined',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
