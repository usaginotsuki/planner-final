<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lst_serie".
 *
 * @property int $SRS_ID Id
 * @property string $SRS_TITULO Titulo
 * @property string $SRS_ESTADO Estado
 * @property int|null $SRS_DURACIONxCAP Duracion de capitulo
 * @property string $SRS_ENLACE Enlace
 * @property string $SRS_FECHAINICIO Fecha Inicio
 * @property string $SRS_FECHAFIN Fecha Fin
 *
 * @property ActSerie[] $actSeries
 */
class LstSerie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lst_serie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SRS_TITULO', 'SRS_ESTADO', 'SRS_ENLACE', 'SRS_FECHAINICIO', 'SRS_FECHAFIN'], 'required'],
            [['SRS_DURACIONxCAP'], 'integer'],
            [['SRS_FECHAINICIO', 'SRS_FECHAFIN'], 'safe'],
            [['SRS_TITULO'], 'string', 'max' => 30],
            [['SRS_ESTADO'], 'string', 'max' => 11],
            [['SRS_ENLACE'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SRS_ID' => 'Id',
            'SRS_TITULO' => 'Titulo',
            'SRS_ESTADO' => 'Estado',
            'SRS_DURACIONxCAP' => 'Duracion de capitulo',
            'SRS_ENLACE' => 'Enlace',
            'SRS_FECHAINICIO' => 'Fecha Inicio',
            'SRS_FECHAFIN' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActSeries()
    {
        return $this->hasMany(ActSerie::className(), ['SRS_ID' => 'SRS_ID']);
    }
}
