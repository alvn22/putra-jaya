<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailPembelian;

/**
 * DetailPembelianSearch represents the model behind the search form of `app\models\DetailPembelian`.
 */
class DetailPembelianSearch extends DetailPembelian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pembelian', 'id_barang', 'jumlah', 'harga_beli'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DetailPembelian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_pembelian' => $this->id_pembelian,
            'id_barang' => $this->id_barang,
            'jumlah' => $this->jumlah,
            'harga_beli' => $this->harga_beli,
        ]);

        return $dataProvider;
    }
}
