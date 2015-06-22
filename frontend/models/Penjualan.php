<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property integer $idpenjualan
 * @property string $tglpenjualan
 * @property integer $jmlbarang
 * @property integer $ttlbayar
 * @property integer $idpelanggan
 *
 * @property Detilpenjualan[] $detilpenjualans
 * @property Pelanggan $idpelanggan0
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tglpenjualan'], 'safe'],
            [['jmlbarang', 'ttlbayar', 'idpelanggan'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpenjualan' => 'Idpenjualan',
            'tglpenjualan' => 'Tglpenjualan',
            'jmlbarang' => 'Jmlbarang',
            'ttlbayar' => 'Ttlbayar',
            'idpelanggan' => 'Idpelanggan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetilpenjualans()
    {
        return $this->hasMany(Detilpenjualan::className(), ['idpenjualan' => 'idpenjualan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpelanggan0()
    {
        return $this->hasOne(Pelanggan::className(), ['idpelanggan' => 'idpelanggan']);
    }
}
