<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $id_owner
 * @property string|null $nama
 * @property string|null $alamat
 * @property int|null $telepon
 *
 * @property Pembelian[] $pembelians
 * @property Transaksi[] $transaksis
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_owner'], 'required'],
            [['id_owner', 'telepon'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['id_owner'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_owner' => 'Id Owner',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['id_owner' => 'id_owner']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_owner' => 'id_owner']);
    }
}
