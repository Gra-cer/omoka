<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Orders */

$this->title = $model->OrderID;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'OrderID' => $model->OrderID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'OrderID' => $model->OrderID], [
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
            'OrderID',
            'OrderUserID',
            'OrderAmount',
            'OrderShipName',
            'OrderShipAddress',
            'OrderShipAddress2',
            'OrderCity',
            'OrderState',
            'OrderZip',
            'OrderCountry',
            'OrderPhone',
            'OrderFax',
            'OrderShipping',
            'OrderTax',
            'OrderEmail:email',
            'OrderDate',
            'OrderShipped',
            'OrderTrackingNumber',
            'OrderStatus',
            'StatusCompleted',
            'StatusDeclined',
        ],
    ]) ?>

</div>
