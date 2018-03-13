<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Temperatura;

/**
 * TemperaturaSearch represents the model behind the search form of `app\models\Temperatura`.
 */
class TemperaturaSearch extends Temperatura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idFecha', 'temperatura'], 'integer'],
            [['hora', 'fecha_actual_registro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Temperatura::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idFecha' => $this->idFecha,
            'temperatura' => $this->temperatura,
            'fecha_actual_registro' => $this->fecha_actual_registro,
        ]);

        $query->andFilterWhere(['like', 'hora', $this->hora]);

        return $dataProvider;
    }
}
