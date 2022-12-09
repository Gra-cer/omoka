<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $t_id
 * @property string $photo
 * @property string $message
 * @property string $name
 * @property string $position
 * @property string $company
 * @property string $date
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'message', 'name', 'position', 'company', 'date'], 'required'],
            [['date'], 'safe'],
            [['photo', 'name', 'position', 'company'], 'string', 'max' => 255],
            [['message'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            'photo' => 'Photo',
            'message' => 'Message',
            'name' => 'Name',
            'position' => 'Position',
            'company' => 'Company',
            'date' => 'Date',
        ];
    }
}
