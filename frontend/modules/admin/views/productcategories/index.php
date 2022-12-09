<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\ProductcategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcategories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productcategories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CategoryID',
            'CategoryName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
