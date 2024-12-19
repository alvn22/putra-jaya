<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Owner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="owner-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-2">
            <?= $form->field($model, 'id_owner')->textInput() ?>
        </div>
        <div class="col-7">
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'telepon')->textInput() ?>
        </div>
    </div>


    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
