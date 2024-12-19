<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string|null $nama
 * @property int|null $harga_jual
 * @property int|null $stok
 *
 * @property DetailPembelian[] $detailPembelians
 * @property DetailTransaksi[] $detailTransaksis
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang'], 'required'],
            [['id_barang', 'harga_jual', 'stok'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama' => 'Nama',
            'harga_jual' => 'Harga Jual',
            'stok' => 'Stok',
        ];
    }

    /**
     * Gets query for [[DetailPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPembelians()
    {
        return $this->hasMany(DetailPembelian::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * Gets query for [[DetailTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::className(), ['id_barang' => 'id_barang']);
    }
}
