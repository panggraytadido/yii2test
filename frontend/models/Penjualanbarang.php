<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualanbarang".
 *
 * @property string $id
 * @property int $barangid
 * @property int $divisiid
 * @property int $pelangganid
 * @property string $tanggal
 * @property double $jumlah
 * @property double $hargatotal
 * @property int $kategori
 * @property string $createddate
 * @property int $userid
 * @property int $box
 * @property double $labarugi
 * @property int $hargasatuan
 * @property string $updateddate
 * @property int $lokasipenyimpananbarangid
 * @property bool $statuspenjualan
 * @property int $netto
 * @property int $diskon
 * @property string $jenispembayaran
 * @property int $supplierid
 * @property bool $isdeleted
 * @property bool $issendtokasir
 * @property int $pembelianke
 * @property string $tanggalcetak
 */
class Penjualanbarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjualanbarang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barangid', 'divisiid', 'pelangganid', 'tanggal', 'createddate', 'userid'], 'required'],
            [['barangid', 'divisiid', 'pelangganid', 'kategori', 'userid', 'box', 'hargasatuan', 'lokasipenyimpananbarangid', 'netto', 'diskon', 'supplierid', 'pembelianke'], 'default', 'value' => null],
            [['barangid', 'divisiid', 'pelangganid', 'kategori', 'userid', 'box', 'hargasatuan', 'lokasipenyimpananbarangid', 'netto', 'diskon', 'supplierid', 'pembelianke'], 'integer'],
            [['tanggal', 'createddate', 'updateddate', 'tanggalcetak'], 'safe'],
            [['jumlah', 'hargatotal', 'labarugi'], 'number'],
            [['statuspenjualan', 'isdeleted', 'issendtokasir'], 'boolean'],
            [['jenispembayaran'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'barangid' => 'Barangid',
            'divisiid' => 'Divisiid',
            'pelangganid' => 'Pelangganid',
            'tanggal' => 'Tanggal',
            'jumlah' => 'Jumlah',
            'hargatotal' => 'Hargatotal',
            'kategori' => 'Kategori',
            'createddate' => 'Createddate',
            'userid' => 'Userid',
            'box' => 'Box',
            'labarugi' => 'Labarugi',
            'hargasatuan' => 'Hargasatuan',
            'updateddate' => 'Updateddate',
            'lokasipenyimpananbarangid' => 'Lokasipenyimpananbarangid',
            'statuspenjualan' => 'Statuspenjualan',
            'netto' => 'Netto',
            'diskon' => 'Diskon',
            'jenispembayaran' => 'Jenispembayaran',
            'supplierid' => 'Supplierid',
            'isdeleted' => 'Isdeleted',
            'issendtokasir' => 'Issendtokasir',
            'pembelianke' => 'Pembelianke',
            'tanggalcetak' => 'Tanggalcetak',
        ];
    }

    /**
     * @inheritdoc
     * @return PenjualanbarangQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PenjualanbarangQuery(get_called_class());
    }
}
