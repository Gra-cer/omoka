<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/ @var $this yii\web\View /
/ @var $model frontend\models\Clients /
/ @var $form yii\widgets\ActiveForm /
?>

<div class="clients-form" style="background:#fff;padding:10px;margin-top:10px;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
     <h1>Create Client</h1>  
     </div>
        <div class="col-md-4"></div>
    </div>
    
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
<div class="form-group mb-0">
                <?= $form->field($model, 'companyname')->textInput(['maxlength' => true,'required'=>true])->label('Company Name') ?>
        </div>

        </div>
        <div class="col-md-6">
    <div class="form-group mb-03">
                <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true,'required'=>true]) ?>
        </div>
    </div>
        </div>
    <div class="row">
        <div class="col-md-6">
     <div class="form-group mb-03">
                <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => true,'required'=>true]) ?>
        </div>
        </div>
        <div class="col-md-6">
     <div class="form-group mb-03">
                <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true,'required'=>true]) ?>
        </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
     <div class="form-group mb-03">
                <?= $form->field($model, 'company_address')->textInput(['maxlength' => true,'required'=>true]) ?>
        </div>
            </div>
        <div class="col-md-6">
     <div class="form-group mb-03">
       <?php $listData=['1'=>'Monthly','3'=>'Quartery'];

    echo $form->field($model, 'payment_period')->dropDownList(
    $listData,
    ['prompt'=>'Select payment period...']);  
    ?>
     </div>
            </div>
            </div>
    
    <div class="row">
        <div class="col-md-6">
        <div class="form-group mb-03">
         
         <?php $status=[''=>'Select','1'=>'Active Client','2'=>'Free Trial','3'=>'Dormant Client'] ?>
                <?= $form->field($model, 'active_status')->dropdownlist($status); ?>
        </div>
        </div>
        <div class="col-md-6">
     <div class="form-group mb-03">
                <?= $form->field($model, 'packagepaid_amount')->textInput(['maxlength' => true,'required'=>true]) ?>
        </div>
            </div>
        </div>
    
     <div class="row">
        <div class="col-md-6">
     <div class="form-group mb-03">
         
        <?= $form->field($model, 'freetrial_enddate')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Select date ...','id'=>'fromdate'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-m-dd',
       // 'startDate' => date('yyyy-m-dd h:i')
    ]
]); ?>
        </div>
        </div>
        <div class="col-md-6">
     <div class="form-group mb-03">
                <?= $form->field($model, 'pin_no')->textInput(['maxlength' => true]) ?>
        </div>
            </div>
        </div>
    
    <div class="row">
        <div class="col-md-6">
    <div class="form-group mb-03">
          
                  <?= $form->field($model, 'number_employees')->textInput(['maxlength' => true]) ?>
       
 
               
        </div>
        </div>
        <div class="col-md-6">
    <div class="form-group mb-03">

         <?= 
         $form->field($model, 'package')->dropDownList($packages, 
             ['prompt'=>'- Choose package -']) ?>
                                            </div>
                                            </div>
        </div>
         <div class="row">
             <div class="col-md-6">
             <?= $form->field($model, 'country')->dropDownList(
           ArrayHelper::map(\frontend\models\Country::find()->all(), 'id', 'code'),
            ['prompt'=>'Select country..']
            ) ?>
             </div>
        <div class="col-md-6">
        <div class="form-group mb-4">
            <?php $clientstatus=[''=>'Select Client Status','1'=>'Trained','2'=>'Not Trained'] ?>
                <?= $form->field($model, 'clientstatus')->dropdownlist($clientstatus); ?>
                    
            </div>
            </div>
         </div>
    
        <div class="row">
             <div class="col-md-6">
             <?= $form->field($model, 'businessdeveloper')->dropDownList(
           ArrayHelper::map(frontend\modules\humanresource\models\Employee::find()->all(), 'employee_id', 'name'),
            ['prompt'=>'Select business developer..']
            ) ?>
                 
             </div>
        <div class="col-md-6">
        <div class="form-group mb-4">
           <?= $form->field($model, 'supportexecutive')->dropDownList(
           ArrayHelper::map(frontend\modules\humanresource\models\Employee::find()->all(), 'employee_id', 'name'),
            ['prompt'=>'Select business developer..']
            ) ?>
            </div>
            </div>
        </div>
    
       <div class="row">
             <div class="col-md-6">
             <?= $form->field($model, 'company_logo')->fileInput() ?>
             </div>
        </div>
             
               <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-outline-primary btn-rounded waves-effect width-md waves-light']) ?>
    </div>   
          
   

    <?php ActiveForm::end(); ?>

</div>
