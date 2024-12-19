<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int $id_pembelian
 * @property int|null $id_owner
 * @property int|null $id_supp
 * @property string|null $tanggal
 *
 * @property DetailPembelian[] $detailPembelians
 * @property Owner $owner
 * @property Supplier $supp
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembelian'], 'required'],
            [['id_pembelian', 'id_owner', 'id_supp'], 'integer'],
            [['tanggal'], 'safe'],
            [['id_pembelian'], 'unique'],
            [['id_owner'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['id_owner' => 'id_owner']],
            [['id_supp'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['id_supp' => 'id_supp']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembelian' => 'Id Pembelian',
            'id_owner' => 'Id Owner',
            'id_supp' => 'Id Supp',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * Gets query for [[DetailPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPembelians()
    {
        return $this->hasMany(DetailPembelian::className(), ['id_pembelian' => 'id_pembelian']);
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

    /**
     * Gets query for [[Supp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupp()
    {
        return $this->hasOne(Supplier::className(), ['id_supp' => 'id_supp']);
    }
}
