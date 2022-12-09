<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "productimages".
 *
 * @property int $imageid
 * @property string $name
 * @property string $description
 * @property string $type
 * @property int $size
 * @property string $filepath
 * @property int $customer_id
 * @property string $IMAGE_URL
 * @property int $FILE_SIZE
 * @property string $ACTUAL_NAME
 * @property string $uploadedby
 * @property string $date
 * @property int $productid
 */
class Productimages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productimages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'type', 'size', 'filepath', 'customer_id', 'IMAGE_URL', 'FILE_SIZE', 'ACTUAL_NAME', 'uploadedby', 'productid'], 'required'],
            [['size', 'customer_id', 'FILE_SIZE', 'productid'], 'integer'],
            [['date'], 'safe'],
            [['name', 'description', 'type', 'filepath', 'IMAGE_URL', 'ACTUAL_NAME', 'uploadedby'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'imageid' => 'Imageid',
            'name' => 'Name',
            'description' => 'Description',
            'type' => 'Type',
            'size' => 'Size',
            'filepath' => 'Filepath',
            'customer_id' => 'Customer ID',
            'IMAGE_URL' => 'Image  Url',
            'FILE_SIZE' => 'File  Size',
            'ACTUAL_NAME' => 'Actual  Name',
            'uploadedby' => 'Uploadedby',
            'date' => 'Date',
            'productid' => 'Productid',
        ];
    }
    public function imageUpload($id)
    {
        $imagemodel= new Productimages();
       
        //get files for the case if any
        $files= $imagemodel->find()->where(['productid'=>$id])->all();
        return $files;
    }
}

