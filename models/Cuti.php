<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuti".
 *
 * @property int $id
 * @property int $pegawai_id
 * @property string $tanggal_cuti
 * @property int $Jumlah
 */
class Cuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pegawai_id', 'tanggal_cuti', 'Jumlah'], 'required'],
            [['id', 'pegawai_id', 'Jumlah'], 'integer'],
            [['tanggal_cuti'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_cuti' => 'Tanggal Cuti',
            'Jumlah' => 'Jumlah',
        ];
    }
}
