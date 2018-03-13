<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FechaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fechas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fecha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
            <?= Html::a('Registrar Temperatura <i class="glyphicon glyphicon-arrow-right"></i>', ['/temperatura'], ['class' => 'btn btn-danger pull-right']) ?></div>
       
    </p>
    <p>
        <?= Html::a('Registrar Fechas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <b><p> Dar clic en Ver, para obtener el gráfico  por día</p></b>
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_pronostico',
            'fecha_actual_registro',
            'ciudad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
