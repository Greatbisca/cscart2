<?php
    use tygh\Registry;

if(!defined('BOOTSTRAP')) { die('Access denied'); }

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($mode == 'manage') {

        // ir a BD buscar os dados de utilizador
        $user_info="Select * from cscart_loyalty_system as P Inner join cscart_users AS U on P.id_loyalty_system = U.user_id;";



        //mostrar no template
        Tygh::$app['view']->assign('item', $$user_info);

        $loyalty_list = db_get_array($user_info);
        foreach($loyalty_list as $t){
            echo $t['loyalty'];
        }
    }
}



