<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $currency_id
 * @property string $currency_name
 * @property int $status
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_name', 'status'], 'required'],
            [['status'], 'integer'],
            [['currency_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'currency_id' => 'Currency ID',
            'currency_name' => 'Currency Name',
            'status' => 'Status',
        ];
    }
}
