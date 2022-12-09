<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\ProductimagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productimages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productimages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'imageid',
            'name',
            'description',
            'type',
            'size',
            //'filepath',
            //'customer_id',
            //'IMAGE_URL:url',
            //'FILE_SIZE',
            //'ACTUAL_NAME',
            //'uploadedby',
            //'date',
            //'productid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
