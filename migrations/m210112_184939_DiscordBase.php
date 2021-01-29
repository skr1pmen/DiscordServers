<?php

use yii\db\Migration;

/**
 * Class m210112_184939_DiscordBase
 */
class m210112_184939_DiscordBase extends Migration
{
    /**
     * @return bool|void
     * @author Vladimir Krupkin
     */
    public function safeUp()
    {
        $this->createTable('guilds', [
            'id' => 'pk',
            'discord_id' => 'varchar(128)',
            'name' => 'varchar(128) NOT NULL',
            'user_id' => 'int(11) NOT NULL',
        ]);
        $this->createTable('users', [
            'id' => 'pk',
            'discord_id' => 'varchar(128)',
            'email' => 'varchar(128)',
            'name' => 'varchar(64) NOT NULL',
            'access_key' => 'varchar(255)',
            'avatar_url' => 'varchar(255)',
        ]);
    }

    /**
     * @return bool|void
     */
    public function safeDown()
    {
        $this->dropTable('guilds');
        $this->dropTable('users');
    }
}