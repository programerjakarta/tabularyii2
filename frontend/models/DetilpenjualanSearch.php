<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Detilpenjualan;

/**
 * DetilpenjualanSearch represents the model behind the search form about `frontend\models\Detilpenjualan`.
 */
class DetilpenjualanSearch extends Detilpenjualan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddetilpenjualan', 'idpenjualan', 'idbarang', 'jmlbarang', 'hrgsatuan'], 'integer'],
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
        $query = Detilpenjualan::find();

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
            'iddetilpenjualan' => $this->iddetilpenjualan,
            'idpenjualan' => $this->idpenjualan,
            'idbarang' => $this->idbarang,
            'jmlbarang' => $this->jmlbarang,
            'hrgsatuan' => $this->hrgsatuan,
        ]);

        return $dataProvider;
    }
}
