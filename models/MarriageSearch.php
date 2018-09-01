<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marriage;

/**
 * MarriageSearch represents the model behind the search form of `app\models\Marriage`.
 */
class MarriageSearch extends Marriage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'groom_persons_id', 'bride_persons_id', 'book_no', 'page_no', 'line_no'], 'integer'],
            [['married_date', 'solemnize_by', 'sponsors', 'residence', 'marriage_license_no', 'issued_place', 'issued_date', 'exhibited_date', 'parish_priest'], 'safe'],
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
        $query = Marriage::find();

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
            'groom_persons_id' => $this->groom_persons_id,
            'bride_persons_id' => $this->bride_persons_id,
            'married_date' => $this->married_date,
            'book_no' => $this->book_no,
            'page_no' => $this->page_no,
            'line_no' => $this->line_no,
            'issued_date' => $this->issued_date,
            'exhibited_date' => $this->exhibited_date,
        ]);

        $query ->andFilterWhere(['like', 'solemnize_by', $this->solemnize_by])
            ->andFilterWhere(['like', 'sponsors', $this->sponsors])
            ->andFilterWhere(['like', 'residence', $this->residence])
            ->andFilterWhere(['like', 'marriage_license_no', $this->marriage_license_no])
            ->andFilterWhere(['like', 'issued_place', $this->issued_place])
            ->andFilterWhere(['like', 'parish_priest', $this->parish_priest]);

        return $dataProvider;
    }
}
