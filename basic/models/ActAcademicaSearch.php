<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActAcademica;

/**
 * ActAcademicaSearch represents the model behind the search form of `app\models\ActAcademica`.
 */
class ActAcademicaSearch extends ActAcademica
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACT_ACD_ID', 'USR_ID', 'ACD_ID'], 'integer'],
            [['ACT_ACD_NOMBRE', 'ACT_ACD_FECHAINICIO'], 'safe'],
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
        $query = ActAcademica::find();

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
            'ACT_ACD_ID' => $this->ACT_ACD_ID,
            'USR_ID' => $this->USR_ID,
            'ACD_ID' => $this->ACD_ID,
            'ACT_ACD_FECHAINICIO' => $this->ACT_ACD_FECHAINICIO,
        ]);

        $query->andFilterWhere(['like', 'ACT_ACD_NOMBRE', $this->ACT_ACD_NOMBRE]);

        return $dataProvider;
    }
}
