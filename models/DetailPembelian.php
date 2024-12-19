<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_pembelian".
 *
 * @property int $id
 * @property int|null $id_pembelian
 * @property int|null $id_barang
 * @property int|null $jumlah
 * @property int|null $harga_beli
 *
 * @property Pembelian $pembelian
 * @property Barang $barang
 */
class DetailPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'id_pembelian', 'id_barang', 'jumlah', 'harga_beli'], 'integer'],
            [['id'], 'unique'],
            [['id_pembelian'], 'exist', 'skipOnError' => true, 'targetClass' => Pembelian::className(), 'targetAttribute' => ['id_pembelian' => 'id_pembelian']],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pembelian' => 'Id Pembelian',
            'id_barang' => 'Id Barang',
            'jumlah' => 'Jumlah',
            'harga_beli' => 'Harga Beli',
        ];
    }

    /**
     * Gets query for [[Pembelian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelian()
    {
        return $this->hasOne(Pembelian::className(), ['id_pembelian' => 'id_pembelian']);
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }
}
