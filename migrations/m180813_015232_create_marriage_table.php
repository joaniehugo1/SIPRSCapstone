<?php

use yii\db\Migration;

/**
 * Handles the creation of table `marriage`.
 */
class m180813_015232_create_marriage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('marriage', [
            'id' => $this->primaryKey(),
            'groom_persons_id' => $this->integer(10),
            'bride_persons_id' => $this->integer(10),
            'married_date' => $this->date(),
            'solemnize_by' => $this->string(255),
            'sponsors' => $this->string(225),
            'residence' => $this->string(255),
            'book_no' => $this->integer(10),
            'page_no' => $this->integer(10),
            'line_no' => $this->integer(10),
            'marriage_license_no' => $this->string(100),
            'issued_place' => $this->string(500),
            'issued_date' => $this->date(),
            'exhibited_date' => $this->date(),
            'parish_priest' => $this->string(255)

        ]);
        $this->createIndex('idx-marriage-groom_persons_id','marriage','groom_persons_id');
        $this->createIndex('idx-marriage-bride_persons_id','marriage','bride_persons_id');
        $this->addForeignKey(
            'fk-marriage-persons',
            'marriage','groom_persons_id',
            'persons','id'
        );
        // $this->addForeignKey(
        //     'fk-marriage-persons',
        //     'marriage','bride_persons_id',
        //     'persons','id'
        // );
    } 

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-marriage-persons','marriage');
        $this->dropIndex('idx-marriage-groom_persons_id', 'marriage');
        $this->dropTable('marriage');
    }
}
