<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_transaksi".
 *
 * @property int $id_detail
 * @property int|null $id_transaksi
 * @property int|null $id_barang
 * @property int|null $jumlah
 * @property int|null $total
 *
 * @property Transaksi $transaksi
 * @property Barang $barang
 */
class DetailTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail'], 'required'],
            [['id_detail', 'id_transaksi', 'id_barang', 'jumlah', 'total'], 'integer'],
            [['id_detail'], 'unique'],
            [['id_transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['id_transaksi' => 'id_transaksi']],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_transaksi' => 'Id Transaksi',
            'id_barang' => 'Id Barang',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[Transaksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_transaksi' => 'id_transaksi']);
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
