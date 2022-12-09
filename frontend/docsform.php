<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\modules\humanresource\models\Branches;
use frontend\modules\humanresource\models\Nature;
use yii\bootstrap4\Modal;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use dosamigos\fileupload\FileUploadUI;
use frontend\models\Companydocuments;

/* @var $this yii\web\View */
/* @var $model frontend\modules\humanresource\models\Leaveapp */
/* @var $form yii\widgets\ActiveForm */
?>

<style>

.fade:not(.show) {
    opacity: 1  !important;
}

</style>

<div style="background:#fff; padding:10px; margin-top:10px;" class="leaveapp-form">
     <?=  Html::a('My Company documents',['index'],['class'=>'btn btn-outline-info btn-rounded waves-effect width-md waves-light']) ;?>

    <h3>Upload Company Documents</h3> 
  <div class="tab-pane" id="documents-b2">
              <p>
                  
                   <?=
                                            FileUploadUI::widget([
                                                'model' => $filesmodel,
                                                'attribute' => 'IMAGE_URL',
                                                'url' => ['/companydocuments/upload'],
                                                'gallery' => false,
                                                'fieldOptions' => [
                                                    'accept' => '*'
                                                ],
                                                'clientOptions' => [
                                                    'maxFileSize' => 200000000
                                                ],
                                                // ...
                                                'clientEvents' => [
                                                    'fileuploaddone' => 'function(e, data) {
                                                             console.log(e);
                                                             console.log(data);
                                                         }',
                                                    'fileuploadfail' => 'function(e, data) {
                                                             console.log(e);
                                                             console.log(data);
                                                         }',
                                                ],
                                            ]);
                                            ?>
                  
                  
              </p>
                                         
          </div>
        
</div>



         
