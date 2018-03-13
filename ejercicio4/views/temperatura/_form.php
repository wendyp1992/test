<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Fecha;
use yii\helpers\ArrayHelper;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Temperatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temperatura-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'fecha_actual_registro')->textInput(['readonly' => true, 'value' => date('Y-m-d H:i:s')]) ?>

    <?=
    $form->field($model, 'idFecha')->dropDownList(
            ArrayHelper::map(Fecha::find()->asArray()->all(), 'id', 'fecha_pronostico')
    )
    ?>

    <?= $form->field($model, 'temperatura')->textInput() ?>

    <?=
    $form->field($model, 'hora')->widget(
            TimePicker::className(), [
        'name' => 'hora',
        'value' => '',
        'pluginOptions' => [
            'showSeconds' => false
        ]
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
