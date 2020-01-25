<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lst_deporte".
 *
 * @property int $DPR_ID Id
 * @property string $DPR_TITULO Titulo
 * @property string $DPR_DEPORTE Deporte
 * @property int|null $DPR_DIASxSEM DiasXsemana
 * @property int|null $DPR_HORASxDIA HorasXdia
 * @property string $DPR_FECHAINICIO Fecha Inicio
 * @property string $DPR_FECHAFIN Fecha Fin
 *
 * @property ActDeporte[] $actDeportes
 */
class LstDeporte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lst_deporte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DPR_TITULO', 'DPR_DEPORTE', 'DPR_FECHAINICIO', 'DPR_FECHAFIN'], 'required'],
            [['DPR_DIASxSEM', 'DPR_HORASxDIA'], 'integer'],
            [['DPR_FECHAINICIO', 'DPR_FECHAFIN'], 'safe'],
            [['DPR_TITULO', 'DPR_DEPORTE'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DPR_ID' => 'Id',
            'DPR_TITULO' => 'Titulo',
            'DPR_DEPORTE' => 'Deporte',
            'DPR_DIASxSEM' => 'DiasXsemana',
            'DPR_HORASxDIA' => 'HorasXdia',
            'DPR_FECHAINICIO' => 'Fecha Inicio',
            'DPR_FECHAFIN' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActDeportes()
    {
        return $this->hasMany(ActDeporte::className(), ['DPR_ID' => 'DPR_ID']);
    }
}
