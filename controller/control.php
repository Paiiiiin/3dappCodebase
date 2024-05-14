<?php
 
require 'model/model.php';
require 'libs/Smarty.class.php';
class Control
{
    function showcontrol($action='index')
    {
        $this->$action();
    }


    function index(){

        $smarty = new Smarty;
 
        $smarty->display('index.tpl');

    }

    function models(){
        $smarty = new Smarty;
        $db  = new SQLite3('./assets/sqlite.db');
        $sql ="SELECT * from models";
        $arr =  Array();     
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $arr[] = $row;
            
         }
         $smarty->assign( "models", $arr );
         $smarty->assign( "js_models", json_encode($arr) );
        $smarty->display('models.tpl');
    }
}
