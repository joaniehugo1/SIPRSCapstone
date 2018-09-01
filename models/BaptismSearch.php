<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Baptism;

/**
 * BaptismSearch represents the model behind the search form of `app\models\Baptism`.
 */
class BaptismSearch extends Baptism
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'persons_id', 'book_no', 'page_no', 'serial_no'], 'integer'],
            [['parish_name', 'god_parents', 'officiating_priest', 'parish_priest', 'baptism_date', 'baptism_place'], 'safe'],
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
        $query = Baptism::find();

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
            'id' => $this->id,
            'persons_id' => $this->persons_id,
            'book_no' => $this->book_no,
            'page_no' => $this->page_no,
            'serial_no' => $this->serial_no,
            'baptism_date' => $this->baptism_date,
        ]);

       $query->andFilterWhere(['like', 'god_parents', $this->god_parents])
            ->andFilterWhere(['like', 'officiating_priest', $this->officiating_priest])
            ->andFilterWhere(['like', 'parish_priest', $this->parish_priest])
            ->andFilterWhere(['like', 'baptism_place', $this->baptism_place]);

        return $dataProvider;
    }
}
