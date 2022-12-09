<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Productimages;

/**
 * ProductimagesSearch represents the model behind the search form of `frontend\modules\admin\models\Productimages`.
 */
class ProductimagesSearch extends Productimages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageid', 'size', 'customer_id', 'FILE_SIZE', 'productid'], 'integer'],
            [['name', 'description', 'type', 'filepath', 'IMAGE_URL', 'ACTUAL_NAME', 'uploadedby', 'date'], 'safe'],
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
        $query = Productimages::find();

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
            'imageid' => $this->imageid,
            'size' => $this->size,
            'customer_id' => $this->customer_id,
            'FILE_SIZE' => $this->FILE_SIZE,
            'date' => $this->date,
            'productid' => $this->productid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'filepath', $this->filepath])
            ->andFilterWhere(['like', 'IMAGE_URL', $this->IMAGE_URL])
            ->andFilterWhere(['like', 'ACTUAL_NAME', $this->ACTUAL_NAME])
            ->andFilterWhere(['like', 'uploadedby', $this->uploadedby]);

        return $dataProvider;
    }
}
