<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camera".
 *
 * @property integer $id
 * @property string $mac
 * @property string $name
 * @property integer $user_id
 * @property integer $is_local
 */
class Camera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'camera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mac', 'name', 'user_id'], 'required'],
            [['mac', 'name'], 'string'],
            [['user_id', 'is_local'], 'integer'],
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
            'is_local' => 'Is Local',
        ];
    }
}
