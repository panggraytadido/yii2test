<?php

namespace common\components;

use Yii;
use yii\base\Component;
use yii\web\Session;
use app\models\AuthAssignment;

class Menu extends Component {

    public function createMenu() {
        $session = Yii::$app->session;
        $session->get('userid');

        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        foreach ($roles as $role) {
            $arrRoles[] = "'" . $role->name . "'";
        }
        
        //print("<pre>".print_r($arrRoles,true)."</pre>");	
        $role = $arrRoles[0];

        $connection = Yii::$app->getDb();
        $sql = "SELECT * FROM menu m INNER JOIN authmenu a on a.menuid=m.id "
                . "WHERE a.role=$role and parent is null";
        //$command = $connection->createCommand("SELECT * FROM menu m INNER JOIN authmenu a on a.menuid=m.id WHERE a.role=:role and parent is null", [':role' => $role]);		
        $command = $connection->createCommand($sql);
        $rootMenu = $command->queryAll();

        foreach ($rootMenu as $k => $v) {
            echo "<li>";
            echo $v['name'];
            $sql = "SELECT * FROM menu m INNER JOIN authmenu a on a.menuid=m.id "
                    . "WHERE a.role=$role and parent is not null and parent=" . $v['id'];
            $command = $connection->createCommand($sql);
            $childMenu = $command->queryAll();
            foreach ($childMenu as $k1 => $v1) {
                echo "<ul class='nav nav-second-level'>";
                echo "<li><a href='" . Yii::$app->request->baseUrl . "/" . $v1['route'] . "'>" . $v1['name'] . "</a></li>";
                echo "</ul>";
            }
            
        }
        echo "</li>";    
    }
    
}    

?>