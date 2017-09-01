<?php

use yii\db\Migration;

class m170831_201615_create_post extends Migration
{
  /*  public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170831_201615_create_post cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer()
        ]);
    }

    public function down()
    {
        echo "m170831_201615_create_post cannot be reverted.\n";

        return false;
    }

}
