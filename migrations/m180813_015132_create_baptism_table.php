<?php

use yii\db\Migration;

/**
 * Handles the creation of table `baptism`.
 */
class m180813_015132_create_baptism_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('baptism', [
            'id' => $this->primaryKey(),
            'persons_id' => $this->integer(10),
            'god_parents' => $this->string(255),
            'officiating_priest' => $this->string(255),
            'parish_priest' => $this->string(255),
            'book_no' => $this->integer(10),
            'page_no' => $this->integer(10),
            'serial_no' => $this->integer(10),
            'baptism_date' => $this->date(),
            'baptism_place' => $this->string(255)
        ]);
        $this->createIndex('idx-baptism-persons_id','baptism','persons_id');
        $this->addForeignKey(
            'fk-baptism-persons',
            'baptism','persons_id',
            'persons','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-baptism-persons','baptism');
        $this->dropIndex('idx-baptism-persons_id', 'baptism');
        $this->dropTable('baptism');
    }
}
