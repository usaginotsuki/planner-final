<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActDeporte;

/**
 * ActDeporteSearch represents the model behind the search form of `app\models\ActDeporte`.
 */
class ActDeporteSearch extends ActDeporte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACT_DPR_ID', 'USR_ID', 'DPR_ID'], 'integer'],
            [['ACT_DPR_NOMBRE', 'ACT_DPR_FECHAINICIO'], 'safe'],
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
        $query = ActDeporte::find();

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
            'ACT_DPR_ID' => $this->ACT_DPR_ID,
            'USR_ID' => $this->USR_ID,
            'DPR_ID' => $this->DPR_ID,
            'ACT_DPR_FECHAINICIO' => $this->ACT_DPR_FECHAINICIO,
        ]);

        $query->andFilterWhere(['like', 'ACT_DPR_NOMBRE', $this->ACT_DPR_NOMBRE]);

        return $dataProvider;
    }
}
