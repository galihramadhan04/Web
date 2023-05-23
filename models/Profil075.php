<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_075".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profil
 *
 * @property Mahasiswa075 $mahasiswa
 */
class Profil075 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_075';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string', 'max' => 25],
            [['id_mahasiswa'], 'unique'],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa075::class, 'targetAttribute' => ['id_mahasiswa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Mahasiswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa075::class, ['id' => 'id_mahasiswa']);
    }
}
