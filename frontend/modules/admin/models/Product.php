<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $product_sku
 * @property string $product_name
 * @property string $product_price
 * @property float $discounted_price
 * @property string $product_cart_desc
 * @property string $product_long_desc
 * @property int $category
 * @property int $subcategory
 * @property int $units
 * @property string $conditionitem
 * @property int $discount
 * @property float $discount_amount
 * @property int $status
 * @property string $product_create_date
 * @property string $product_update_date
 * @property string $product_delete_date
 * @property int|null $product_live
 * @property int|null $product_unlimited
 * @property string|null $product_location
 * @property int $dealoftheday
 * @property int $slider
 * @property int $user
 * @property string $currency
 * @property string $size
 * @property string $stockstatus
 * @property string $colour
 *
 * @property Cartitems[] $cartitems
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_sku', 'product_name', 'product_price', 'discounted_price', 'product_cart_desc', 'product_long_desc', 'category', 'subcategory', 'units', 'conditionitem', 'discount', 'discount_amount', 'status', 'slider', 'user', 'currency', 'size', 'stockstatus', 'colour'], 'required'],
            [['discounted_price', 'discount_amount'], 'number'],
            [['category', 'subcategory', 'units', 'discount', 'status', 'product_live', 'product_unlimited', 'dealoftheday', 'slider', 'user'], 'integer'],
            [['product_create_date', 'product_update_date', 'product_delete_date'], 'safe'],
            [['product_sku', 'product_name', 'product_price', 'conditionitem', 'product_location', 'currency'], 'string', 'max' => 255],
            [['product_cart_desc', 'product_long_desc'], 'string', 'max' => 1000],
            [['size', 'stockstatus', 'colour'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_sku' => 'Product Sku',
            'product_name' => 'Product Name',
            'product_price' => 'Product Price',
            'discounted_price' => 'Discounted Price',
            'product_cart_desc' => 'Product Cart Desc',
            'product_long_desc' => 'Product Long Desc',
            'category' => 'Category',
            'subcategory' => 'Subcategory',
            'units' => 'Units',
            'conditionitem' => 'Conditionitem',
            'discount' => 'Discount',
            'discount_amount' => 'Discount Amount',
            'status' => 'Status',
            'product_create_date' => 'Product Create Date',
            'product_update_date' => 'Product Update Date',
            'product_delete_date' => 'Product Delete Date',
            'product_live' => 'Product Live',
            'product_unlimited' => 'Product Unlimited',
            'product_location' => 'Product Location',
            'dealoftheday' => 'Dealoftheday',
            'slider' => 'Slider',
            'user' => 'User',
            'currency' => 'Currency',
            'size' => 'Size',
            'stockstatus' => 'Stockstatus',
            'colour' => 'Colour',
        ];
    }

    /**
     * Gets query for [[Cartitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCartitems()
    {
        return $this->hasMany(Cartitems::className(), ['ProductID' => 'product_id']);
    }
}
