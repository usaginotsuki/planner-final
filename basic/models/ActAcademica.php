<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "act_academica".
 *
 * @property int $ACT_ACD_ID Id
 * @property int|null $USR_ID Usuario
 * @property int|null $ACD_ID Academica
 * @property string $ACT_ACD_NOMBRE Nombre
 * @property string $ACT_ACD_FECHAINICIO Fecha Inicio
 *
 * @property LstAcademica $aCD
 * @property Usuario $uSR
 */
class ActAcademica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'act_academica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_ID', 'ACD_ID'], 'integer'],
            [['ACT_ACD_NOMBRE', 'ACT_ACD_FECHAINICIO'], 'required'],
            [['ACT_ACD_FECHAINICIO'], 'safe'],
            [['ACT_ACD_NOMBRE'], 'string', 'max' => 60],
            [['ACD_ID'], 'exist', 'skipOnError' => true, 'targetClass' => LstAcademica::className(), 'targetAttribute' => ['ACD_ID' => 'ACD_ID']],
            [['USR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USR_ID' => 'USR_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACT_ACD_ID' => 'Id',
            'USR_ID' => 'Usuario',
            'ACD_ID' => 'Academica',
            'ACT_ACD_NOMBRE' => 'Nombre',
            'ACT_ACD_FECHAINICIO' => 'Fecha Inicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getACD()
    {
        return $this->hasOne(LstAcademica::className(), ['ACD_ID' => 'ACD_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSR()
    {
        return $this->hasOne(Usuario::className(), ['USR_ID' => 'USR_ID']);
    }
}
