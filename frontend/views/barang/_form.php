<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idkategori')->textInput() ?>

    <?= $form->field($model, 'nmbarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrgbarang')->textInput() ?>

    <?= $form->field($model, 'ketbarang')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
