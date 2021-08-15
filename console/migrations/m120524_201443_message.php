<?php

use yii\db\Migration;

class m120524_201443_message extends Migration
{
    public function safeUp()
    {
        $this->execute(file_get_contents(__DIR__ . '/source_message_dump.sql'));
        $this->execute(file_get_contents(__DIR__ . '/message_dump.sql'));

    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
