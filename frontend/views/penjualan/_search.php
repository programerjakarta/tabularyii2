<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpenjualan') ?>

    <?= $form->field($model, 'tglpenjualan') ?>

    <?= $form->field($model, 'jmlbarang') ?>

    <?= $form->field($model, 'ttlbayar') ?>

    <?= $form->field($model, 'idpelanggan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
