<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $USR_ID Id
 * @property string $USR_NOMBRE Nombre
 * @property string $USR_TELEFONO Tel�fono
 * @property string $USR_CORREO Correo
 * @property string $USR_NACIMIENTO Fecha Nacimiento
 * @property string $username Nombre de usuario
 * @property string $password Nombre de usuario
 * @property string $authKey clave autenticacion
 * @property int $role
 *
 * @property ActAcademica[] $actAcademicas
 * @property ActDeporte[] $actDeportes
 * @property ActLectura[] $actLecturas
 * @property ActSerie[] $actSeries
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USR_NOMBRE', 'USR_TELEFONO', 'USR_CORREO', 'USR_NACIMIENTO', 'username', 'password', 'authKey'], 'required'],
            [['USR_NACIMIENTO'], 'safe'],
            [['role'], 'integer'],
            [['USR_NOMBRE', 'password', 'authKey'], 'string', 'max' => 30],
            [['USR_TELEFONO'], 'string', 'max' => 10],
            [['USR_CORREO'], 'string', 'max' => 60],
            [['username'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USR_ID' => 'Id',
            'USR_NOMBRE' => 'Nombre',
            'USR_TELEFONO' => 'Tel�fono',
            'USR_CORREO' => 'Correo',
            'USR_NACIMIENTO' => 'Fecha Nacimiento',
            'username' => 'Nombre de usuario',
            'password' => 'Nombre de usuario',
            'authKey' => 'clave autenticacion',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActAcademicas()
    {
        return $this->hasMany(ActAcademica::className(), ['USR_ID' => 'USR_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActDeportes()
    {
        return $this->hasMany(ActDeporte::className(), ['USR_ID' => 'USR_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActLecturas()
    {
        return $this->hasMany(ActLectura::className(), ['USR_ID' => 'USR_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActSeries()
    {
        return $this->hasMany(ActSerie::className(), ['USR_ID' => 'USR_ID']);
    }
}
