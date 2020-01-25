<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lst_academica".
 *
 * @property int $ACD_ID Id
 * @property string $ACD_TITULO Titulo
 * @property string $ACD_MATERIA Materia
 * @property string $ACD_FECHAINICIO Fecha Inicio
 * @property string $ACD_FECHAFIN Fecha Fin
 * @property string $ACD_MATERIALES Materiales
 *
 * @property ActAcademica[] $actAcademicas
 */
class LstAcademica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lst_academica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACD_TITULO', 'ACD_MATERIA', 'ACD_FECHAINICIO', 'ACD_FECHAFIN', 'ACD_MATERIALES'], 'required'],
            [['ACD_FECHAINICIO', 'ACD_FECHAFIN'], 'safe'],
            [['ACD_TITULO', 'ACD_MATERIA'], 'string', 'max' => 30],
            [['ACD_MATERIALES'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACD_ID' => 'Id',
            'ACD_TITULO' => 'Titulo',
            'ACD_MATERIA' => 'Materia',
            'ACD_FECHAINICIO' => 'Fecha Inicio',
            'ACD_FECHAFIN' => 'Fecha Fin',
            'ACD_MATERIALES' => 'Materiales',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActAcademicas()
    {
        return $this->hasMany(ActAcademica::className(), ['ACD_ID' => 'ACD_ID']);
    }
}
