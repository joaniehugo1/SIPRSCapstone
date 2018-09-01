<?php

use yii\db\Migration;

/**
 * Handles the creation of table `confirmation`.
 */
class m180813_015206_create_confirmation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('confirmation', [
            'id' => $this->primaryKey(),
            'persons_id' => $this->integer(10),
            'confirmation_date' => $this->date(),
            'rev_monsignor' => $this->string(255),
            'sponsors' => $this->string(255),
            'confirmation_no' => $this->integer(10),
            'serial_no' => $this->integer(10),
            'page_no' => $this->integer(10),
            'given_date' => $this->date(),
            'parish_priest' => $this->string(255),
            'solemnize_by' => $this->string(255)
        ]);
        $this->createIndex('idx-confirmation-persons_id','confirmation','persons_id');
        $this->addForeignKey(
            'fk-confirmation-persons',
            'confirmation','persons_id',
            'persons','id'
    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-confirmation-persons','confirmation');
        $this->dropIndex('idx-confirmation-persons_id', 'confirmation');
        $this->dropTable('confirmation');
    }
}
