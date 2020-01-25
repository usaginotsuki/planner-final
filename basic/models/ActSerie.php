<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "act_serie".
 *
 * @property int $ACT_SER_ID Id
 * @property int|null $USR_ID Usuario
 * @property int|null $SRS_ID Series
 * @property string $ACT_SER_NOMBRE Nombre
 * @property string $ACT_SER_FECHAINICIO Fecha Inicio
 *
 * @property LstSerie $sRS
 * @property Usuario $uSR
 */
class ActSerie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'act_serie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_ID', 'SRS_ID'], 'integer'],
            [['ACT_SER_NOMBRE', 'ACT_SER_FECHAINICIO'], 'required'],
            [['ACT_SER_FECHAINICIO'], 'safe'],
            [['ACT_SER_NOMBRE'], 'string', 'max' => 60],
            [['SRS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => LstSerie::className(), 'targetAttribute' => ['SRS_ID' => 'SRS_ID']],
            [['USR_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USR_ID' => 'USR_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ACT_SER_ID' => 'Id',
            'USR_ID' => 'Usuario',
            'SRS_ID' => 'Series',
            'ACT_SER_NOMBRE' => 'Nombre',
            'ACT_SER_FECHAINICIO' => 'Fecha Inicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSRS()
    {
        return $this->hasOne(LstSerie::className(), ['SRS_ID' => 'SRS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSR()
    {
        return $this->hasOne(Usuario::className(), ['USR_ID' => 'USR_ID']);
    }
}
