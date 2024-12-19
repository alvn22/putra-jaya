<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int|null $id_owner
 * @property int|null $total_bayar
 * @property string|null $tanggal
 *
 * @property DetailTransaksi[] $detailTransaksis
 * @property Owner $owner
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi'], 'required'],
            [['id_transaksi', 'id_owner', 'total_bayar'], 'integer'],
            [['tanggal'], 'safe'],
            [['id_transaksi'], 'unique'],
            [['id_owner'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['id_owner' => 'id_owner']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_owner' => 'Id Owner',
            'total_bayar' => 'Total Bayar',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * Gets query for [[DetailTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::className(), ['id_transaksi' => 'id_transaksi']);
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Owner::className(), ['id_owner' => 'id_owner']);
    }
}
