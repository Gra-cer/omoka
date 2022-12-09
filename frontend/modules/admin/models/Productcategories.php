<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "productcategories".
 *
 * @property int $CategoryID
 * @property string $CategoryName
 */
class Productcategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcategories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CategoryName'], 'required'],
            [['CategoryName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CategoryID' => 'Category ID',
            'CategoryName' => 'Category Name',
        ];
    }
}
