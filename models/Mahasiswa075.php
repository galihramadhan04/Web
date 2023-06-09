<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_075".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 *
 * @property Profil075 $profil075
 */
class Mahasiswa075 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_075';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim', 'nama', 'kelas', 'jurusan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil075]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil075()
    {
        return $this->hasOne(Profil075::class, ['id_mahasiswa' => 'id']);
    }
}
