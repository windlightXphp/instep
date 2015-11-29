<?php

use yii\db\Schema;
use yii\db\Migration;

class m151127_194258_create_table_students extends Migration
{
    public $table_name = '{{%students}}';


    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable($this->table_name, [
            'id'            => Schema::TYPE_INTEGER . '(11) NOT NULL AUTO_INCREMENT',
            'group_id'      => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'full_name'     => Schema::TYPE_STRING . '(50) NULL',
            'birth_at'      => Schema::TYPE_INTEGER . '(11) NULL',
            'phone'         => Schema::TYPE_STRING . '(15) NULL',
            'e_mail'        => Schema::TYPE_STRING . '(50) NULL',
            'avatar'        => Schema::TYPE_STRING . '(50) NULL',
            'avg'           => Schema::TYPE_FLOAT . ' NULL', //перед NULL лучше сделать "пробел"
            'count_balance' => Schema::TYPE_FLOAT . ' NULL',
            'count_like'    => Schema::TYPE_INTEGER . '(11) NULL',
            'count_coments' => Schema::TYPE_INTEGER . '(11) NULL',
            'status'        => Schema::TYPE_INTEGER . '(11) NULL',
            'created_at'    => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'updated_at'    => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'deleted_at'    => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'PRIMARY KEY (`id`)'// указываем базе по какому ключу ей стоит проводить индексирование таблички
        ], $tableOptions);


        $this->createIndex('group_id', $this->table_name, 'group_id', false);//СОЗДАЕМ ИНДЕКС: первый параметр - внешний ключ, второй - название табицы, третий - название ключа, четвертый - будит ли он уникальным

        $this->addForeignKey('fk_tbl_student_group_id', $this->table_name, 'group_id', 'groups', 'id', 'CASCADE', 'CASCADE');//создаем внешний ключ
    }

    public function down()
    {

        $this->dropForeignKey('fk_tbl_student_group_id', $this->table_name);

        $this->dropIndex('group_id', $this->table_name);

        $this->dropTable($this->table_name);
    }

}
