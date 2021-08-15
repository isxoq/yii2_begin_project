<?php

use yii\db\Migration;

class m120524_201444_eskiz_sms extends Migration
{
    public function safeUp()
    {
        $this->createTable('sms_settings', [
            'id' => $this->primaryKey(),
            'idn' => $this->string(100),
            'value' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'name' => $this->string()
        ]);

        $this->insert('sms_settings', [
            'idn' => "email",
            'value' => "admin@mail.ru",
            'created_at' => time(),
            'updated_at' => time(),
            'name' => "Email"
        ]);

        $this->insert('sms_settings', [
            'idn' => "password",
            'value' => "password",
            'created_at' => time(),
            'updated_at' => time(),
            'name' => "Email"
        ]);

        $this->insert('sms_settings', [
            'idn' => "token",
            'value' => "token",
            'created_at' => time(),
            'updated_at' => time(),
            'name' => "Email"
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
