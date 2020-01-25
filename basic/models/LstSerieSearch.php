<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LstSerie;

/**
 * LstSerieSearch represents the model behind the search form of `app\models\LstSerie`.
 */
class LstSerieSearch extends LstSerie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SRS_ID', 'SRS_DURACIONxCAP'], 'integer'],
            [['SRS_TITULO', 'SRS_ESTADO', 'SRS_ENLACE', 'SRS_FECHAINICIO', 'SRS_FECHAFIN'], 'safe'],
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
        $query = LstSerie::find();

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
            'SRS_ID' => $this->SRS_ID,
            'SRS_DURACIONxCAP' => $this->SRS_DURACIONxCAP,
            'SRS_FECHAINICIO' => $this->SRS_FECHAINICIO,
            'SRS_FECHAFIN' => $this->SRS_FECHAFIN,
        ]);

        $query->andFilterWhere(['like', 'SRS_TITULO', $this->SRS_TITULO])
            ->andFilterWhere(['like', 'SRS_ESTADO', $this->SRS_ESTADO])
            ->andFilterWhere(['like', 'SRS_ENLACE', $this->SRS_ENLACE]);

        return $dataProvider;
    }
}
