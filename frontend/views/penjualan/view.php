<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penjualan */

$this->title = $model->idpenjualan;
$this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idpenjualan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idpenjualan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idpenjualan',
            'tglpenjualan',
            'jmlbarang',
            'ttlbayar',
            'idpelanggan',
        ],
    ]) ?>

</div>
