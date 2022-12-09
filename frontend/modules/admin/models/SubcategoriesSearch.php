<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Subcategories;

/**
 * SubcategoriesSearch represents the model behind the search form of `frontend\modules\admin\models\Subcategories`.
 */
class SubcategoriesSearch extends Subcategories
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_id', 'category_id', 'created_by'], 'integer'],
            [['sub_name', 'category_name', 'created_at'], 'safe'],
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
        $query = Subcategories::find();

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
            'sub_id' => $this->sub_id,
            'category_id' => $this->category_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'sub_name', $this->sub_name])
            ->andFilterWhere(['like', 'category_name', $this->category_name]);

        return $dataProvider;
    }
}
