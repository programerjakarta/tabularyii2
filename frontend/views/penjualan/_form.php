<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tglpenjualan')->textInput() ?>

    <?= $form->field($model, 'jmlbarang')->textInput() ?>

    <?= $form->field($model, 'ttlbayar')->textInput() ?>

    <?= $form->field($model, 'idpelanggan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
