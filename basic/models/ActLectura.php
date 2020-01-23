<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "act_lectura".
 *
 * @property int $ACT_LECT_ID Id
 * @property int|null $USR_ID Usuario
 * @property int|null $LCT_ID Lecturas
 * @property string $ACT_LECT_NOMBRE Nombre
 * @property string $ACT_LECT_FECHAINICIO Fecha Inicio
 *
 * @property LstLectura $lCT
 * @property Usuario $uSR
 */
class ActLectura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'act_lectura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_ID', 'LCT_ID'], 'integer'],
            [['ACT_LECT_NOMBRE', 'ACT_LECT_FECHAINICIO'], 'required'],
            [['ACT_LECT_FECHAINICIO'], 'safe'],
            [['ACT_LECT_NOMBRE'], 'string', 'max' => 60],
            [['LCT_ID'], 'exist', 'skipOnError' => true, 'targetClass' => LstLectura::className(), 'targetAttribute' => ['LCT_ID' => 'LCT_ID']],
            [['USR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USR_ID' => 'USR_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACT_LECT_ID' => 'Id',
            'USR_ID' => 'Usuario',
            'LCT_ID' => 'Lecturas',
            'ACT_LECT_NOMBRE' => 'Nombre',
            'ACT_LECT_FECHAINICIO' => 'Fecha Inicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLCT()
    {
        return $this->hasOne(LstLectura::className(), ['LCT_ID' => 'LCT_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSR()
    {
        return $this->hasOne(Usuario::className(), ['USR_ID' => 'USR_ID']);
    }
}
