<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2016
 * Time: 18:08
 */
include_once ('Controller.php');
include_once ("Cliente.php");
if(isset($_REQUEST)!=0){
    foreach($_REQUEST as $var => $vl){
        $$var = $vl;
    }
}

#echo "decrescente";
$control = new Controller();
$clientes = $control->criaClientes(10);

if(!isset($order)) {
    $order=0;
}

if($order==1){
    $list = 0;
}else{
    $list = 1;
}

#print_r($clientes);
?>
<!DOCTYPE html>
<html>
<head>
    <link href='bootstrap/css/bootstrap.css' rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script rel="script" type="application/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script rel="script" type="application/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row ta">
        <div class="col-lg-12 text-center">
            <table class="table text-center table-striped">
                <tr>
                    <th>Clientes</th>
                </tr>
                <tr>
                    <td><a href="?order=<?php echo $list;?>">ID</a></td>
                    <td>CLIENTE</td>
                </tr>

                    <?php
                    if($order==1){
                        $clientes = array_reverse($clientes);
                        echo $control->listaClientes($clientes, $order);
                    }else{
                        echo $control->listaClientes($clientes, $order);
                    }

                    ?>
            </table>
        </div>

        <?php
        if(!isset($p)){
            $p=0;
            $c=null;
        }
        if($p == 1 ){
            echo $control->mostraCliente($clientes[$c]);
        }

        ?>
    </div>
</div>
</body>
</html>