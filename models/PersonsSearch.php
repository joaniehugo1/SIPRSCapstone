<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Persons;

/**
 * PersonsSearch represents the model behind the search form of `app\models\Persons`.
 */
class PersonsSearch extends Persons
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;
    
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'fathers_name', 'mothers_name', 'nationality', 'gender', 'birth_date', 'birth_place','globalSearch'], 'safe'],
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
        $query = Persons::find();

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
        // $query->andFilterWhere([
        //     'id' => $this->id,
        //     'birth_date' => $this->birth_date,
        // ]);

        $query->orFilterWhere(['like', 'name', $this->globalSearch])
            ->orFilterWhere(['like', 'fathers_name', $this->globalSearch])
            ->orFilterWhere(['like', 'mothers_name', $this->globalSearch])
            ->orFilterWhere(['like', 'nationality', $this->globalSearch])
            ->orFilterWhere(['like', 'gender', $this->globalSearch])
            ->orFilterWhere(['like', 'birth_place', $this->globalSearch]);

        return $dataProvider;
    }
}
