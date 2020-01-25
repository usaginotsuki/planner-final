<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LstDeporte;

/**
 * LstDeporteSearch represents the model behind the search form of `app\models\LstDeporte`.
 */
class LstDeporteSearch extends LstDeporte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DPR_ID', 'DPR_DIASxSEM', 'DPR_HORASxDIA'], 'integer'],
            [['DPR_TITULO', 'DPR_DEPORTE', 'DPR_FECHAINICIO', 'DPR_FECHAFIN'], 'safe'],
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
        $query = LstDeporte::find();

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
            'DPR_ID' => $this->DPR_ID,
            'DPR_DIASxSEM' => $this->DPR_DIASxSEM,
            'DPR_HORASxDIA' => $this->DPR_HORASxDIA,
            'DPR_FECHAINICIO' => $this->DPR_FECHAINICIO,
            'DPR_FECHAFIN' => $this->DPR_FECHAFIN,
        ]);

        $query->andFilterWhere(['like', 'DPR_TITULO', $this->DPR_TITULO])
            ->andFilterWhere(['like', 'DPR_DEPORTE', $this->DPR_DEPORTE]);

        return $dataProvider;
    }
}
