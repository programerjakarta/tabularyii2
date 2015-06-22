<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idbarang') ?>

    <?= $form->field($model, 'idkategori') ?>

    <?= $form->field($model, 'nmbarang') ?>

    <?= $form->field($model, 'hrgbarang') ?>

    <?= $form->field($model, 'ketbarang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
