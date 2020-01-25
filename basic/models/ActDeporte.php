<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "act_deporte".
 *
 * @property int $ACT_DPR_ID Id
 * @property int|null $USR_ID Usuario
 * @property int|null $DPR_ID Deportes
 * @property string $ACT_DPR_NOMBRE Nombre
 * @property string $ACT_DPR_FECHAINICIO Fecha Inicio
 *
 * @property LstDeporte $dPR
 * @property Usuario $uSR
 */
class ActDeporte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'act_deporte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_ID', 'DPR_ID'], 'integer'],
            [['ACT_DPR_NOMBRE', 'ACT_DPR_FECHAINICIO'], 'required'],
            [['ACT_DPR_FECHAINICIO'], 'safe'],
            [['ACT_DPR_NOMBRE'], 'string', 'max' => 60],
            [['DPR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => LstDeporte::className(), 'targetAttribute' => ['DPR_ID' => 'DPR_ID']],
            [['USR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USR_ID' => 'USR_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACT_DPR_ID' => 'Id',
            'USR_ID' => 'Usuario',
            'DPR_ID' => 'Deportes',
            'ACT_DPR_NOMBRE' => 'Nombre',
            'ACT_DPR_FECHAINICIO' => 'Fecha Inicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDPR()
    {
        return $this->hasOne(LstDeporte::className(), ['DPR_ID' => 'DPR_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSR()
    {
        return $this->hasOne(Usuario::className(), ['USR_ID' => 'USR_ID']);
    }
}
