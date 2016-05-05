<?php

use yii\db\Migration;

/**
 * Handles the creation for table `camera`.
 */
class m160505_070628_create_camera extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('camera', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'mac' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
        ]);

        $this->createIndex(
            'idx-camera-user_id',
            'camera',
            'user_id'
        );

        $this->addForeignKey(
            'fk-camera-user_id',
            'camera',
            'user_id',
            'user',
            'id'
        );

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-camera-user_id',
            'camera'
        );

        $this->dropIndex(
            'idx-camera-user_id',
            'camera'
        );

        $this->dropTable('camera');
    }
}
