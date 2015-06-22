<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property integer $idbarang
 * @property integer $idkategori
 * @property string $nmbarang
 * @property integer $hrgbarang
 * @property string $ketbarang
 *
 * @property Kategoribarang $idbarang0
 * @property Detilpenjualan[] $detilpenjualans
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idkategori', 'nmbarang', 'hrgbarang'], 'required'],
            [['idkategori', 'hrgbarang'], 'integer'],
            [['ketbarang'], 'string'],
            [['nmbarang'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbarang' => 'Idbarang',
            'idkategori' => 'Idkategori',
            'nmbarang' => 'Nmbarang',
            'hrgbarang' => 'Hrgbarang',
            'ketbarang' => 'Ketbarang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdbarang0()
    {
        return $this->hasOne(Kategoribarang::className(), ['idkategoribarang' => 'idbarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetilpenjualans()
    {
        return $this->hasMany(Detilpenjualan::className(), ['idbarang' => 'idbarang']);
    }
}
