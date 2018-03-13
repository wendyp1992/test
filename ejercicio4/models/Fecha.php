<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fecha".
 *
 * @property int $id
 * @property string $fecha_pronostico
 * @property string $fecha_actual_registro
 * @property string $ciudad
 *
 * @property Temperatura[] $temperaturas
 */
class Fecha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fecha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_pronostico', 'fecha_actual_registro', 'ciudad'], 'required'],
            [['fecha_pronostico', 'fecha_actual_registro'], 'safe'],
            [['ciudad'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'fecha_pronostico' => 'Fecha del Indicador',
            'fecha_actual_registro' => 'Fecha de Registro',
            'ciudad' => 'Ciudad (Provincia)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemperaturas()
    {
        return $this->hasMany(Temperatura::className(), ['idFecha' => 'id']);
    }
}
