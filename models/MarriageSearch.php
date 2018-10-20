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
    public $globalSearch;

    public function rules()
    {
        return [
            [['id', 'groom_persons_id', 'bride_persons_id', 'book_no', 'page_no', 'line_no'], 'integer'],
            [['married_date', 'solemnize_by', 'sponsors', 'residence', 'marriage_license_no', 'issued_place', 'issued_date', 'exhibited_date', 'parish_priest','globalSearch'], 'safe'],
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
         $query->orFilterWhere(['like', 'groom_persons_id', $this->globalSearch])
            ->orFilterWhere(['like', 'bride_persons_id', $this->globalSearch])
            ->orFilterWhere(['like', 'sponsors', $this->globalSearch])
            ->orFilterWhere(['like', 'married_date', $this->globalSearch]);

        return $dataProvider;
    }
}
