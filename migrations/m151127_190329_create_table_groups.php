<?php

use yii\db\Schema;
use yii\db\Migration;

class m151127_190329_create_table_groups extends Migration
{
    public $table_name = '{{%groups}}';


    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable($this->table_name, [
            'id'         => Schema::TYPE_INTEGER . '(11) NOT NULL AUTO_INCREMENT',
            'name'       => Schema::TYPE_STRING . '(50) NOT NULL',
            'status'     => Schema::TYPE_INTEGER . '(11) NULL',
            'created_at' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'deleted_at' => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'PRIMARY KEY (`id`)' // указываем базе по какому ключу ей стоит проводить индексирование таблички
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->table_name);
    }

}
