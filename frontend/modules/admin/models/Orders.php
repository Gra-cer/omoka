<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $OrderID
 * @property int $OrderUserID
 * @property float $OrderAmount
 * @property string $OrderShipName
 * @property string $OrderShipAddress
 * @property string $OrderShipAddress2
 * @property string $OrderCity
 * @property string $OrderState
 * @property string $OrderZip
 * @property string $OrderCountry
 * @property string $OrderPhone
 * @property string $OrderFax
 * @property float $OrderShipping
 * @property float $OrderTax
 * @property string $OrderEmail
 * @property string $OrderDate
 * @property int $OrderShipped
 * @property string|null $OrderTrackingNumber
 * @property int $OrderStatus
 * @property string $StatusCompleted
 * @property string $StatusDeclined
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OrderUserID', 'OrderAmount', 'OrderShipName', 'OrderShipAddress', 'OrderShipAddress2', 'OrderCity', 'OrderState', 'OrderZip', 'OrderCountry', 'OrderPhone', 'OrderFax', 'OrderShipping', 'OrderTax', 'OrderEmail', 'OrderStatus', 'StatusCompleted', 'StatusDeclined'], 'required'],
            [['OrderUserID', 'OrderShipped', 'OrderStatus'], 'integer'],
            [['OrderAmount', 'OrderShipping', 'OrderTax'], 'number'],
            [['OrderDate'], 'safe'],
            [['OrderShipName', 'OrderShipAddress', 'OrderShipAddress2', 'OrderEmail', 'StatusCompleted', 'StatusDeclined'], 'string', 'max' => 100],
            [['OrderCity', 'OrderState', 'OrderCountry'], 'string', 'max' => 50],
            [['OrderZip', 'OrderPhone', 'OrderFax'], 'string', 'max' => 20],
            [['OrderTrackingNumber'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'OrderID' => 'Order ID',
            'OrderUserID' => 'Order User ID',
            'OrderAmount' => 'Order Amount',
            'OrderShipName' => 'Order Ship Name',
            'OrderShipAddress' => 'Order Ship Address',
            'OrderShipAddress2' => 'Order Ship Address2',
            'OrderCity' => 'Order City',
            'OrderState' => 'Order State',
            'OrderZip' => 'Order Zip',
            'OrderCountry' => 'Order Country',
            'OrderPhone' => 'Order Phone',
            'OrderFax' => 'Order Fax',
            'OrderShipping' => 'Order Shipping',
            'OrderTax' => 'Order Tax',
            'OrderEmail' => 'Order Email',
            'OrderDate' => 'Order Date',
            'OrderShipped' => 'Order Shipped',
            'OrderTrackingNumber' => 'Order Tracking Number',
            'OrderStatus' => 'Order Status',
            'StatusCompleted' => 'Status Completed',
            'StatusDeclined' => 'Status Declined',
        ];
    }
}
