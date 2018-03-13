<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temperatura".
 *
 * @property int $id
 * @property int $idFecha
 * @property int $temperatura
 * @property string $hora
 * @property string $fecha_actual_registro
 *
 * @property Fecha $fecha
 */
class Temperatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temperatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFecha', 'temperatura', 'hora', 'fecha_actual_registro'], 'required'],
            [['idFecha', 'temperatura'], 'integer'],
            [['fecha_actual_registro'], 'safe'],
            [['hora'], 'string', 'max' => 30],
            [['idFecha'], 'exist', 'skipOnError' => true, 'targetClass' => Fecha::className(), 'targetAttribute' => ['idFecha' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'idFecha' => 'Fecha del Indicador',
            'temperatura' => 'Temperatura ºC',
            'hora' => 'Hora',
            'fecha_actual_registro' => 'Fecha de Registro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFecha()
    {
        return $this->hasOne(Fecha::className(), ['id' => 'idFecha']);
    }
}
