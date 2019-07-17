<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Merchandise;
use yii\data\ArrayDataProvider;
/**
 * MerchandiseSearch represents the model behind the search form about `common\models\Merchandise`.
 */
class MerchandiseSearch extends Merchandise
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merchandiseID'], 'integer'],
            [['merchandiseDescription', 'beginning', 'destination', 'nowNode'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Merchandise::find();

        //print_r($query);
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
            'merchandiseID' => $this->merchandiseID,
            'nowNode'=> $this->destination,
        ]);

        $query->andFilterWhere(['like', 'merchandiseDescription', $this->merchandiseDescription])
            ->andFilterWhere(['like', 'beginning', $this->beginning])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'nowNode', $this->nowNode]);

        return $dataProvider;
    }
}
