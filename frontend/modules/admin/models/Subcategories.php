<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "subcategories".
 *
 * @property int $sub_id
 * @property string $sub_name
 * @property string $category_name
 * @property int $category_id
 * @property string $created_at
 * @property int $created_by
 */
class Subcategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subcategories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_name', 'category_name', 'category_id', 'created_at', 'created_by'], 'required'],
            [['category_id', 'created_by'], 'integer'],
            [['created_at'], 'safe'],
            [['sub_name', 'category_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'sub_name' => 'Sub Name',
            'category_name' => 'Category Name',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
