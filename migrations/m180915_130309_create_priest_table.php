<?php

use yii\db\Migration;

/**
 * Handles the creation of table `priest`.
 */
class m180915_130309_create_priest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('priest', [
            'id' => $this->primaryKey(),
            'parish priest' => $this->string(255),
            'officiating priest' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('priest');
    }
}
