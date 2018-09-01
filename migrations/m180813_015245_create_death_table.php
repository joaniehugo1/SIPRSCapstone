<?php

use yii\db\Migration;

/**
 * Handles the creation of table `death`.
 */
class m180813_015245_create_death_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('death', [
            'id' => $this->primaryKey(),
            'persons_id' => $this->integer(10),
            'death_date' => $this->date(),
            'buried' => $this->string(255),
            'municipal_cemetery' => $this->string(255),
            'cause_of_death' => $this->string(255),
            'receive_the_last_sacrament_of' => $this->string(255),
            'confession_extreme' => $this->string(255),
            'unction_and_holy_vaticum' => $this->string(255),
            'receive_any_sacrament' => $this->string(255),
            'folio_no' => $this->integer(10),
            'book_no' => $this->integer(10),
            'page_name' => $this->string(255),
            'parish_name' => $this->string(255),
            'certificate_date' => $this->date()
        ]);
        $this->createIndex('idx-death-persons_id','death','persons_id');
        $this->addForeignKey(
            'fk-death-persons',
            'death','persons_id',
            'persons','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-death-persons','death');
        $this->dropIndex('idx-death-persons_id', 'death');
        $this->dropTable('death');
    }
}
