<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Product;

/**
 * ProductSearch represents the model behind the search form of `frontend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'category', 'subcategory', 'units', 'discount', 'status', 'product_live', 'product_unlimited', 'dealoftheday', 'slider', 'user'], 'integer'],
            [['product_sku', 'product_name', 'product_price', 'product_cart_desc', 'product_long_desc', 'conditionitem', 'product_create_date', 'product_update_date', 'product_delete_date', 'product_location', 'currency', 'size', 'stockstatus', 'colour'], 'safe'],
            [['discounted_price', 'discount_amount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'product_id' => $this->product_id,
            'discounted_price' => $this->discounted_price,
            'category' => $this->category,
            'subcategory' => $this->subcategory,
            'units' => $this->units,
            'discount' => $this->discount,
            'discount_amount' => $this->discount_amount,
            'status' => $this->status,
            'product_create_date' => $this->product_create_date,
            'product_update_date' => $this->product_update_date,
            'product_delete_date' => $this->product_delete_date,
            'product_live' => $this->product_live,
            'product_unlimited' => $this->product_unlimited,
            'dealoftheday' => $this->dealoftheday,
            'slider' => $this->slider,
            'user' => $this->user,
        ]);

        $query->andFilterWhere(['like', 'product_sku', $this->product_sku])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_price', $this->product_price])
            ->andFilterWhere(['like', 'product_cart_desc', $this->product_cart_desc])
            ->andFilterWhere(['like', 'product_long_desc', $this->product_long_desc])
            ->andFilterWhere(['like', 'conditionitem', $this->conditionitem])
            ->andFilterWhere(['like', 'product_location', $this->product_location])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'stockstatus', $this->stockstatus])
            ->andFilterWhere(['like', 'colour', $this->colour]);

        return $dataProvider;
    }
}
