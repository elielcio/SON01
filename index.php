<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2016
 * Time: 18:08
 */
include_once ('ClienteInterface.php');
include_once ('Controller.php');
include_once ("Cliente.php");


if(isset($_REQUEST)!=0){
    foreach($_REQUEST as $var => $vl){
        $$var = $vl;
    }
}


$control = new Controller();
$clientes = $control->criaClientes(10);


/*
usort($clientes, function($a,$b){
                    if( $a->pNome == $b->pNome ) return 0;
                    return ( ( $b->pNome < $a->pNome ) ? -1 : 1 );
});
*/


include_once ("View.php");
?>
