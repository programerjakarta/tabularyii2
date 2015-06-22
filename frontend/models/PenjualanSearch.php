<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Penjualan;

/**
 * PenjualanSearch represents the model behind the search form about `frontend\models\Penjualan`.
 */
class PenjualanSearch extends Penjualan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpenjualan', 'jmlbarang', 'ttlbayar', 'idpelanggan'], 'integer'],
            [['tglpenjualan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Penjualan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idpenjualan' => $this->idpenjualan,
            'tglpenjualan' => $this->tglpenjualan,
            'jmlbarang' => $this->jmlbarang,
            'ttlbayar' => $this->ttlbayar,
            'idpelanggan' => $this->idpelanggan,
        ]);

        return $dataProvider;
    }
}
