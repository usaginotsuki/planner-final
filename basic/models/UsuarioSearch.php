<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form of `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_ID', 'role'], 'integer'],
            [['USR_NOMBRE', 'USR_TELEFONO', 'USR_CORREO', 'USR_NACIMIENTO', 'username', 'password', 'authKey'], 'safe'],
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
        $query = Usuario::find();

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
            'USR_ID' => $this->USR_ID,
            'USR_NACIMIENTO' => $this->USR_NACIMIENTO,
            'role' => $this->role,
        ]);

        $query->andFilterWhere(['like', 'USR_NOMBRE', $this->USR_NOMBRE])
            ->andFilterWhere(['like', 'USR_TELEFONO', $this->USR_TELEFONO])
            ->andFilterWhere(['like', 'USR_CORREO', $this->USR_CORREO])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'authKey', $this->authKey]);

        return $dataProvider;
    }
}
