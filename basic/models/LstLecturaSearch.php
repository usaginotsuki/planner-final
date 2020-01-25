<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LstLectura;

/**
 * LstLecturaSearch represents the model behind the search form of `app\models\LstLectura`.
 */
class LstLecturaSearch extends LstLectura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LCT_ID', 'LCT_PAGINAxDIA'], 'integer'],
            [['LCT_TITULO', 'LCT_NOMBRE_LIBRO', 'LCT_AUTOR', 'LCT_ENLACE', 'LCT_ESTADO', 'LCT_FECHAINICIO'], 'safe'],
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
        $query = LstLectura::find();

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
            'LCT_ID' => $this->LCT_ID,
            'LCT_FECHAINICIO' => $this->LCT_FECHAINICIO,
            'LCT_PAGINAxDIA' => $this->LCT_PAGINAxDIA,
        ]);

        $query->andFilterWhere(['like', 'LCT_TITULO', $this->LCT_TITULO])
            ->andFilterWhere(['like', 'LCT_NOMBRE_LIBRO', $this->LCT_NOMBRE_LIBRO])
            ->andFilterWhere(['like', 'LCT_AUTOR', $this->LCT_AUTOR])
            ->andFilterWhere(['like', 'LCT_ENLACE', $this->LCT_ENLACE])
            ->andFilterWhere(['like', 'LCT_ESTADO', $this->LCT_ESTADO]);

        return $dataProvider;
    }
}
