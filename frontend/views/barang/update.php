<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barang */

$this->title = 'Update Barang: ' . ' ' . $model->idbarang;
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbarang, 'url' => ['view', 'id' => $model->idbarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
