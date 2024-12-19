<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTransaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'id_detail')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'id_transaksi')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'id_barang')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'jumlah')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'total')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
