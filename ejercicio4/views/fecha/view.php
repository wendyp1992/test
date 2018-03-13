<?php

/* @var $this yii\web\View */
/* @var $model app\models\Fecha */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fechas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

    body{
        margin-right: 1000px;
    }
    barras{
        padding: 5px;
        float: left; 
        width:1%; 

    }
    .table{
        width: 50%;
        position:relative;
        margin: 0 auto;
        text-align: center;
    }
    barras:nth-child(n+0){background: blue; margin-left: 5px;
    }

</style>

<div class="fecha-view">

    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-3" style="top: 30px;left: 100px;">
            <h2><b> Esmeraldas</b></h2> 
            <p><?php echo $model->fecha_pronostico ?></p>
        </div>
        <div class="col-md-6" >
            <div style="transform: rotate(180deg);margin-right:  300px;margin-top: 100px;">
                <?php
                for ($i = 0; $i < count($consulta); $i++) {
                    $fila = $consulta[$i];
                    ?>
                    <barras style="height:<?php echo $fila['temperatura'] * 3 ?>px; "></barras>
                <?php } ?>    
            </div>
        </div>     

    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Fecha</td>
                <th>Hora</th>
                <th>Temperatura ºC</th>
            </tr>
        </thead>
        <?php
        for ($i = 0; $i < count($consulta); $i++) {
            $fila = $consulta[$i];
            ?>
            <tr>
                <td><?php echo $model->fecha_pronostico ?></td>
                <td><?php echo $fila['hora'] ?></td>
                <td><?php echo $fila['temperatura'] ?></td>
            </tr>

        <?php } ?>   
    </table>


</div>
