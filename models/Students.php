<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property integer $group_id
 * @property string $full_name
 * @property integer $birth_at
 * @property string $phone
 * @property string $e_mail
 * @property string $avatar
 * @property double $avg
 * @property double $count_balance
 * @property integer $count_like
 * @property integer $count_coments
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Groups $group
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'created_at', 'updated_at'], 'required'],
            [['group_id', 'birth_at', 'count_like', 'count_coments', 'status', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['avg', 'count_balance'], 'number'],
            [['full_name', 'e_mail', 'avatar'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'group_id' => Yii::t('app', 'Group ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'birth_at' => Yii::t('app', 'Birth At'),
            'phone' => Yii::t('app', 'Phone'),
            'e_mail' => Yii::t('app', 'E Mail'),
            'avatar' => Yii::t('app', 'Avatar'),
            'avg' => Yii::t('app', 'Avg'),
            'count_balance' => Yii::t('app', 'Count Balance'),
            'count_like' => Yii::t('app', 'Count Like'),
            'count_coments' => Yii::t('app', 'Count Coments'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }

    /**
     * @inheritdoc
     * @return StudentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentsQuery(get_called_class());
    }
}
