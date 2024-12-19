<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_supp
 * @property string|null $nama
 * @property string|null $alamat
 * @property int|null $telepon
 *
 * @property Pembelian[] $pembelians
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supp'], 'required'],
            [['id_supp', 'telepon'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['id_supp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supp' => 'Id Supp',
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
        return $this->hasMany(Pembelian::className(), ['id_supp' => 'id_supp']);
    }
}
