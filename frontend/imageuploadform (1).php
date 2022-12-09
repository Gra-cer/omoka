<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\Modal;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use dosamigos\fileupload\FileUploadUI;
use frontend\modules\admin\models\Product;

/* @var $this yii\web\View */
/* @var $model frontend\modules\humanresource\models\Leaveapp */
/* @var $form yii\widgets\ActiveForm */
?>

<style>

.fade:not(.show) {
    opacity: 1  !important;
}

</style>

<div style="background:#fff; padding:10px; margin-top:10px;" class="imgupload">
     <?=  Html::a('My Leave Analyses',['myleave'],['class'=>'btn btn-outline-info btn-rounded waves-effect width-md waves-light']) ;?>

    <h3>Upload Leave Justification Documents</h3> 
  <div class="tab-pane" id="documents-b2">
              <p>
                  
                   <?=
                                            FileUploadUI::widget([
                                                'model' => $model,
                                                'attribute' => 'IMAGE_URL',
                                                'url' => ['imageupload','id' =>$product_id],
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
                  
                  <table role="presentation" class="table m-0 table-colored-bordered table-bordered-primary">
                                        <tbody class="files">
                                            <?php foreach($files as $file) {?>
                                            <tr id="peter" class="template-download fade in">
                                     <td>
                                         <span class="preview">

                                                 <a href="#" title="" download="" data-gallery=""> Added By <?= $file['uploadedby']?></a>

                                         </span>
                                     </td>
                                     <td>
                                         <p class="name">

                                                 <a href="<?= $file['IMAGE_URL']?>" title="<?= $file['ACTUAL_NAME']?>" download="<?= $file['ACTUAL_NAME']?>" data-gallery=""><?= $file['ACTUAL_NAME']?></a>

                                         </p>

                                     </td>
                                     <td>
                                         <span class="size"><?= $file['FILE_SIZE']/1000000?> MB</span>
                                     </td>
                                     <td>

                                            <?php if($file['uploadedby'] == Yii::$app->user->identity->username){ ?>
                                                 <i valuedata="<?= $file['name']?>" class="glyphicon glyphicon-trash delete"></i>
                                                 <span>Delete</span>
                                            
                                            <input type="checkbox" name="delete" value="1" class="toggle"><?php } ?>

                                     </td>
                                 </tr>
                                            <?php } ?>
                                        
                                   </tbody>
                            </table>
                  
                  
                  
                  
                  
              </p>
                                         
          </div>
        
</div>



         
