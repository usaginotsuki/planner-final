<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LstAcademica;

/**
 * LstAcademicaSearch represents the model behind the search form of `app\models\LstAcademica`.
 */
class LstAcademicaSearch extends LstAcademica
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACD_ID'], 'integer'],
            [['ACD_TITULO', 'ACD_MATERIA', 'ACD_FECHAINICIO', 'ACD_FECHAFIN', 'ACD_MATERIALES'], 'safe'],
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
        $query = LstAcademica::find();

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
            'ACD_ID' => $this->ACD_ID,
            'ACD_FECHAINICIO' => $this->ACD_FECHAINICIO,
            'ACD_FECHAFIN' => $this->ACD_FECHAFIN,
        ]);

        $query->andFilterWhere(['like', 'ACD_TITULO', $this->ACD_TITULO])
            ->andFilterWhere(['like', 'ACD_MATERIA', $this->ACD_MATERIA])
            ->andFilterWhere(['like', 'ACD_MATERIALES', $this->ACD_MATERIALES]);

        return $dataProvider;
    }
}
