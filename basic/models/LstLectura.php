<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lst_lectura".
 *
 * @property int $LCT_ID Id
 * @property string $LCT_TITULO Titulo
 * @property string $LCT_NOMBRE_LIBRO Nombre libro
 * @property string $LCT_AUTOR Autor
 * @property string $LCT_ENLACE Enlace
 * @property string $LCT_ESTADO Estado
 * @property string $LCT_FECHAINICIO Fecha Inicio
 * @property int|null $LCT_PAGINAxDIA PaginaXdia
 *
 * @property ActLectura[] $actLecturas
 */
class LstLectura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lst_lectura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LCT_TITULO', 'LCT_NOMBRE_LIBRO', 'LCT_AUTOR', 'LCT_ENLACE', 'LCT_ESTADO', 'LCT_FECHAINICIO'], 'required'],
            [['LCT_FECHAINICIO'], 'safe'],
            [['LCT_PAGINAxDIA'], 'integer'],
            [['LCT_TITULO', 'LCT_NOMBRE_LIBRO', 'LCT_AUTOR'], 'string', 'max' => 30],
            [['LCT_ENLACE'], 'string', 'max' => 60],
            [['LCT_ESTADO'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LCT_ID' => 'Id',
            'LCT_TITULO' => 'Titulo',
            'LCT_NOMBRE_LIBRO' => 'Nombre libro',
            'LCT_AUTOR' => 'Autor',
            'LCT_ENLACE' => 'Enlace',
            'LCT_ESTADO' => 'Estado',
            'LCT_FECHAINICIO' => 'Fecha Inicio',
            'LCT_PAGINAxDIA' => 'PaginaXdia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActLecturas()
    {
        return $this->hasMany(ActLectura::className(), ['LCT_ID' => 'LCT_ID']);
    }
}
