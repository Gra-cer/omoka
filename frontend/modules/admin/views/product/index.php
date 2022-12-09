<?php

use frontend\modules\admin\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
<!--  -->
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

 <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-primary btn-xs']) ?>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
  
                        <div class="table-responsive">
                           
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        
                        
                        <th>Product Name</th>
                       <th>Price</th>
                       <th>Discounted Price</th>
                        <th>Action</th>
                      
                        
                    </tr>
                    </thead>
                    <tbody>
                         <?php foreach($model as $video){  ?>
                    <tr class="gradeX">
                        
                        <td class="center"><?= $video['product_name'] ?></td>
                        <td class="center"><?= $video['product_price'] ?></td>
                        <td class="center"><?= $video['discounted_price'] ?></td>
                        <td class="center"> 
                      <?= Html::a('Update', ['update','product_id'=>$video['product_id']], ['class'=>'btn btn-success btn-xs']) ?>
                       <?= Html::a('View', ['view','product_id'=>$video['product_id']], ['class'=>'btn btn-success btn-xs']) ?>
                       
                       <?= Html::a('Upload Image', ['uploadimage','product_id'=>$video['product_id']], ['class'=>'btn btn-success btn-xs']) ?>
                          
                      </td>
                       
                      
                       
                       
                 
                    </tr>
                        <?php } ?>
                    </tbody>
                    
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>


</div>
<?php
$script = <<< JS
   $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
          }
                ]

            });

        });         
JS;
$this->registerJs($script);
?> 
