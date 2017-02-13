<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestBussiness
 *
 * @author DIDSI-IPB
 */
namespace frontend\bussinessmodels;


class TestBussiness extends \app\models\Test{
    //put your code here
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'id'),           
        ];
    }
}
