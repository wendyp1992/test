<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Fecha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecha-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_actual_registro')->textInput(['readonly' => true, 'value' => date('Y-m-d H:i:s')]) ?>

    <?=
    $form->field($model, 'fecha_pronostico')->widget(
            DatePicker::className(), [
        'name' => 'fecha_pronostico',
        'value' => date('yyyy/mm/dd'),
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'Seleccione la fecha ...'],
        'pluginOptions' => [
            'format' => 'yyyy/mm/dd',
            'todayHighlight' => true,
            'autoclose' => true,
        ]
    ]);
    ?>

    <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Registrar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

