<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'id_transaksi')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'id_owner')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'total_bayar')->textInput() ?>
        </div>
    </div>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
