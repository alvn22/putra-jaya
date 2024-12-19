<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPembelian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'id')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'id_pembelian')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'id_barang')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'jumlah')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'harga_beli')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
