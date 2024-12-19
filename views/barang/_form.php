<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'id_barang')->textInput() ?>
        </div>
        <div class="col-8">
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'harga_jual')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'stok')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
