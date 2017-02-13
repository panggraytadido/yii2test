<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Authmenu]].
 *
 * @see Authmenu
 */
class AuthmenuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Authmenu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Authmenu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
