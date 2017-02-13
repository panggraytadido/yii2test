<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authmenu".
 *
 * @property int $id
 * @property string $role
 * @property int $menuid
 *
 * @property Menu $menu
 */
class Authmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authmenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menuid'], 'default', 'value' => null],
            [['menuid'], 'integer'],
            [['role'], 'string', 'max' => 50],
            [['menuid'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menuid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'Role',
            'menuid' => 'Menuid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menuid']);
    }

    /**
     * @inheritdoc
     * @return AuthmenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AuthmenuQuery(get_called_class());
    }
}
