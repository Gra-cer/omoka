<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Productcategories;

/**
 * ProductcategoriesSearch represents the model behind the search form of `frontend\modules\admin\models\Productcategories`.
 */
class ProductcategoriesSearch extends Productcategories
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CategoryID'], 'integer'],
            [['CategoryName'], 'safe'],
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
        $query = Productcategories::find();

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
            'CategoryID' => $this->CategoryID,
        ]);

        $query->andFilterWhere(['like', 'CategoryName', $this->CategoryName]);

        return $dataProvider;
    }
}
