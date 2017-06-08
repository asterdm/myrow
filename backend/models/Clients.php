<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ochered".
 *
 * @property integer $id
 * @property integer $user_cod
 * @property integer $get_time
 * @property string $status
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_cod', 'get_time', 'status'], 'required'],
            [['user_cod', 'get_time'], 'integer'],
            [['status'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_cod' => 'User Cod',
            'get_time' => 'Get Time',
            'status' => 'Status',
        ];
    }
}
