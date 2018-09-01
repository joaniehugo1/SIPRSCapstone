<?php

use yii\db\Migration;

/**
 * Handles the creation of table `persons`.
 */
class m180813_015104_create_persons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('persons', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'fathers_name' => $this->string(255),
            'mothers_name' => $this->string(255),
            'nationality' => $this->string(255),
            'gender' => $this->string(255),
            'birth_date' => $this->date(),
            'birth_place' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('persons');
    }
}
