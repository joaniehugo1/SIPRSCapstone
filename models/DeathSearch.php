<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Death;

/**
 * DeathSearch represents the model behind the search form of `app\models\Death`.
 */
class DeathSearch extends Death
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'persons_id', 'folio_no', 'book_no'], 'integer'],
            [['death_date', 'buried', 'municipal_cemetery', 'cause_of_death', 'receive_the_last_sacrament_of', 'confession_extreme', 'unction_and_holy_vaticum', 'receive_any_sacrament', 'page_name', 'parish_name', 'certificate_date'], 'safe'],
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
        $query = Death::find();

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
            'death_date' => $this->death_date,
            'folio_no' => $this->folio_no,
            'book_no' => $this->book_no,
            'certificate_date' => $this->certificate_date,
        ]);

        $query->andFilterWhere(['like', 'buried', $this->buried])
            ->andFilterWhere(['like', 'municipal_cemetery', $this->municipal_cemetery])
            ->andFilterWhere(['like', 'cause_of_death', $this->cause_of_death])
            ->andFilterWhere(['like', 'receive_the_last_sacrament_of', $this->receive_the_last_sacrament_of])
            ->andFilterWhere(['like', 'confession_extreme', $this->confession_extreme])
            ->andFilterWhere(['like', 'unction_and_holy_vaticum', $this->unction_and_holy_vaticum])
            ->andFilterWhere(['like', 'receive_any_sacrament', $this->receive_any_sacrament])
            ->andFilterWhere(['like', 'page_name', $this->page_name])
            ->andFilterWhere(['like', 'parish_name', $this->parish_name]);

        return $dataProvider;
    }
}
