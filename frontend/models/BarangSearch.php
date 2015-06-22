<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `frontend\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbarang', 'idkategori', 'hrgbarang'], 'integer'],
            [['nmbarang', 'ketbarang'], 'safe'],
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
        $query = Barang::find();

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
            'idbarang' => $this->idbarang,
            'idkategori' => $this->idkategori,
            'hrgbarang' => $this->hrgbarang,
        ]);

        $query->andFilterWhere(['like', 'nmbarang', $this->nmbarang])
            ->andFilterWhere(['like', 'ketbarang', $this->ketbarang]);

        return $dataProvider;
    }
}
