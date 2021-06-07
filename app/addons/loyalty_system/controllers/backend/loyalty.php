<?php
    use tygh\Registry;

if(!defined('BOOTSTRAP')) { die('Access denied'); }

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($mode == 'manage') {

        // ir a BD buscar os dados de utilizador
        $user_info = "Select * from cscart_loyalty_system as P Inner join cscart_users AS U on P.id_loyalty_system = U.user_id group by user_id";

        $loyalty_system = db_get_array($user_info);

        //mostrar no template
        Tygh::$app['view']->assign('item', $loyalty_system);

    } 
    if ($mode == 'update'){
            $id_anterior = $_GET['user_id'];
            $chain = "select * from cscart_loyalty_system as P Inner Join cscart_users as U on P.id_loyalty_system = U.user_id where user_id".$id_anterior;
        }
}




