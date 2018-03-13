<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TemperaturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Temperatura';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temperatura-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('<i class="glyphicon glyphicon-arrow-left" >Volver</i>', ['/fecha'], ['class' => 'btn btn-danger pull-right']) ?></div>
       
    </p>
    <p>
        <?= Html::a('Registrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
          //  'id',
            //'idFecha',
            [
                'attribute' => 'idFecha',
                'value' => function($data) {
                    $fecha = \app\models\Fecha::findOne($data->idFecha);
                    $nombre = $fecha->fecha_pronostico;
                    return $nombre;
                }],
            'hora',
            'temperatura',
            'fecha_actual_registro',
                ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
