<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActSerie;

/**
 * ActSerieSearch represents the model behind the search form of `app\models\ActSerie`.
 */
class ActSerieSearch extends ActSerie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACT_SER_ID', 'USR_ID', 'SRS_ID'], 'integer'],
            [['ACT_SER_NOMBRE', 'ACT_SER_FECHAINICIO'], 'safe'],
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
        $query = ActSerie::find();

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
            'ACT_SER_ID' => $this->ACT_SER_ID,
            'USR_ID' => $this->USR_ID,
            'SRS_ID' => $this->SRS_ID,
            'ACT_SER_FECHAINICIO' => $this->ACT_SER_FECHAINICIO,
        ]);

        $query->andFilterWhere(['like', 'ACT_SER_NOMBRE', $this->ACT_SER_NOMBRE]);

        return $dataProvider;
    }
}
