<?php

namespace frontend\models;

use Yii;
use kartik\builder\TabularForm;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "detilpenjualan".
 *
 * @property integer $iddetilpenjualan
 * @property integer $idpenjualan
 * @property integer $idbarang
 * @property integer $jmlbarang
 * @property integer $hrgsatuan
 *
 * @property Barang $idbarang0
 * @property Penjualan $idpenjualan0
 */
class Detilpenjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detilpenjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpenjualan', 'idbarang', 'jmlbarang', 'hrgsatuan'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddetilpenjualan' => 'Iddetilpenjualan',
            'idpenjualan' => 'Idpenjualan',
            'idbarang' => 'Idbarang',
            'jmlbarang' => 'Jmlbarang',
            'hrgsatuan' => 'Hrgsatuan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdbarang0()
    {
        return $this->hasOne(Barang::className(), ['idbarang' => 'idbarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpenjualan0()
    {
        return $this->hasOne(Penjualan::className(), ['idpenjualan' => 'idpenjualan']);
    }

    public function getFormAttribs() {
        return [
            // primary key column
            'iddetilpenjualan'=>[ // primary key attribute
                // 'type'=>TabularForm::INPUT_HIDDEN, 
                'columnOptions'=>['hidden'=>true]
            ], 
            'idpenjualan'=>['type'=>TabularForm::INPUT_TEXT],
            'idbarang'=>[
                'type' => function($model, $key, $index, $widget) {
                    return ($key % 2 === 0) ? TabularForm::INPUT_HIDDEN : TabularForm::INPUT_WIDGET;
                },
                'widgetClass'=>\kartik\widgets\DatePicker::classname(), 
                'options'=> function($model, $key, $index, $widget) {
                    return ($key % 2 === 0) ? [] :
                    [ 
                        'pluginOptions'=>[
                            'format'=>'yyyy-mm-dd',
                            'todayHighlight'=>true, 
                            'autoclose'=>true
                        ]
                    ];
                },
                'columnOptions'=>['width'=>'170px']
            ],
            'jmlbarang'=>[
                'type'=>TabularForm::INPUT_WIDGET, 
                'widgetClass'=>\kartik\widgets\ColorInput::classname(), 
                'options'=>[ 
                    'showDefaultPalette'=>false,
                    'pluginOptions'=>[
                        'preferredFormat'=>'name',
                        'palette'=>[
                            [
                                "white", "black", "grey", "silver", "gold", "brown", 
                            ],
                            [
                                "red", "orange", "yellow", "indigo", "maroon", "pink"
                            ],
                            [
                                "blue", "green", "violet", "cyan", "magenta", "purple", 
                            ],
                        ]
                    ]
                ],
                'columnOptions'=>['width'=>'150px'],
            ],
            
            // 'author_id'=>[
            //     'type'=>TabularForm::INPUT_DROPDOWN_LIST, 
            //     'items'=>ArrayHelper::map(Author::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            //     'columnOptions'=>['width'=>'185px']
            // ],
            /*
            'buy_amount'=>[
                'type'=>TabularForm::INPUT_TEXT, 
                'label'=>'Buy',
                'options'=>['class'=>'form-control text-right'], 
                'columnOptions'=>['hAlign'=>GridView::ALIGN_RIGHT, 'width'=>'90px']
            ],
            */
            'hrgsatuan'=>[
                'type'=>TabularForm::INPUT_STATIC, 
                'label'=>'Sell',
                'columnOptions'=>['hAlign'=>GridView::ALIGN_RIGHT, 'width'=>'90px']
            ],
        ];
    }
}
