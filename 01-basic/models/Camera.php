<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camera_v2".
 *
 * @property integer $id
 * @property string $mac
 * @property string $name
 * @property integer $user_id
 * @property integer $online
 * @property string $ftp
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class Camera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'camera_v2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'online', 'created_at', 'updated_at'], 'integer'],
            [['mac', 'name', 'ftp'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mac' => 'Mac',
            'name' => 'Name',
            'user_id' => 'User ID',
            'online' => 'Online',
            'ftp' => 'Ftp',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
