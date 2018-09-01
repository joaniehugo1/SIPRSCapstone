<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Confirmation;

/**
 * ConfirmationSearch represents the model behind the search form of `app\models\Confirmation`.
 */
class ConfirmationSearch extends Confirmation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'persons_id', 'confirmation_no', 'serial_no', 'page_no'], 'integer'],
            [['parish_name', 'confirmation_date', 'rev_monsignor', 'sponsors', 'given_date', 'parish_priest', 'solemnize_by'], 'safe'],
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
        $query = Confirmation::find();

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
            'confirmation_date' => $this->confirmation_date,
            'confirmation_no' => $this->confirmation_no,
            'serial_no' => $this->serial_no,
            'page_no' => $this->page_no,
            'given_date' => $this->given_date,
        ]);

        $query->andFilterWhere(['like', 'rev_monsignor', $this->rev_monsignor])
            ->andFilterWhere(['like', 'sponsors', $this->sponsors])
            ->andFilterWhere(['like', 'parish_priest', $this->parish_priest])
            ->andFilterWhere(['like', 'solemnize_by', $this->solemnize_by]);

        return $dataProvider;
    }
}
