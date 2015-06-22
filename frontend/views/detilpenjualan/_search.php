<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DetilpenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detilpenjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddetilpenjualan') ?>

    <?= $form->field($model, 'idpenjualan') ?>

    <?= $form->field($model, 'idbarang') ?>

    <?= $form->field($model, 'jmlbarang') ?>

    <?= $form->field($model, 'hrgsatuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
