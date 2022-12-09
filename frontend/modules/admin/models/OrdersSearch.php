<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `frontend\modules\admin\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OrderID', 'OrderUserID', 'OrderShipped', 'OrderStatus'], 'integer'],
            [['OrderAmount', 'OrderShipping', 'OrderTax'], 'number'],
            [['OrderShipName', 'OrderShipAddress', 'OrderShipAddress2', 'OrderCity', 'OrderState', 'OrderZip', 'OrderCountry', 'OrderPhone', 'OrderFax', 'OrderEmail', 'OrderDate', 'OrderTrackingNumber', 'StatusCompleted', 'StatusDeclined'], 'safe'],
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
        $query = Orders::find();

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
            'OrderID' => $this->OrderID,
            'OrderUserID' => $this->OrderUserID,
            'OrderAmount' => $this->OrderAmount,
            'OrderShipping' => $this->OrderShipping,
            'OrderTax' => $this->OrderTax,
            'OrderDate' => $this->OrderDate,
            'OrderShipped' => $this->OrderShipped,
            'OrderStatus' => $this->OrderStatus,
        ]);

        $query->andFilterWhere(['like', 'OrderShipName', $this->OrderShipName])
            ->andFilterWhere(['like', 'OrderShipAddress', $this->OrderShipAddress])
            ->andFilterWhere(['like', 'OrderShipAddress2', $this->OrderShipAddress2])
            ->andFilterWhere(['like', 'OrderCity', $this->OrderCity])
            ->andFilterWhere(['like', 'OrderState', $this->OrderState])
            ->andFilterWhere(['like', 'OrderZip', $this->OrderZip])
            ->andFilterWhere(['like', 'OrderCountry', $this->OrderCountry])
            ->andFilterWhere(['like', 'OrderPhone', $this->OrderPhone])
            ->andFilterWhere(['like', 'OrderFax', $this->OrderFax])
            ->andFilterWhere(['like', 'OrderEmail', $this->OrderEmail])
            ->andFilterWhere(['like', 'OrderTrackingNumber', $this->OrderTrackingNumber])
            ->andFilterWhere(['like', 'StatusCompleted', $this->StatusCompleted])
            ->andFilterWhere(['like', 'StatusDeclined', $this->StatusDeclined]);

        return $dataProvider;
    }
}
