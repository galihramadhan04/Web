<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat075}}`.
 */
class m230523_101042_create_obat075_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat075}}', [
            'id' => $this->primaryKey(),
            'kode_obat' =>$this->string()->notNull(),
            'harga' =>$this->decimal(10,2)->notNull(),
            'stok_obat' =>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat075}}');
    }
}
