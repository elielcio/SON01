<?php



if(isset($order)) {
      /** Ordenação porID */
    if($coluna=='id' and $order == 0) {
        usort($clientes, function($a,$b){
                    if( $a->id == $b->id ) return 0;
                    return ( ( $a->id < $b->id ) ? -1 : 1 );
          });
    }
    if($coluna=='id' and $order == 1) {
        usort($clientes, function($a,$b){
                    if( $a->id == $b->id ) return 0;
                    return ( ( $b->id < $a->id ) ? -1 : 1 );
        });
    }
    /** Fim da Ordenação*/

     /** Ordenação por pName */
    if($coluna=='nome' and $order == 0) {
        usort($clientes, function($a,$b){
                    if( $a->pNome == $b->pNome ) return 0;
                    return ( ( $a->pNome < $b->pNome ) ? -1 : 1 );
          });
    }
    if($coluna=='nome' and $order == 1) {
        usort($clientes, function($a,$b){
                    if( $a->pNome == $b->pNome ) return 0;
                    return ( ( $b->pNome < $a->pNome ) ? -1 : 1 );
        });
    }
    /** Fim da Ordenação*/

     /** Ordenação por pName */
    if($coluna=='stars' and $order == 0) {
        usort($clientes, function($a,$b){
                    if( $a->stars == $b->stars ) return 0;
                    return ( ( $a->stars < $b->stars ) ? -1 : 1 );
          });
    }
    if($coluna=='stars' and $order == 1) {
        usort($clientes, function($a,$b){
                    if( $a->stars == $b->stars ) return 0;
                    return ( ( $b->stars < $a->stars ) ? -1 : 1 );
        });
    }
    /** Fim da Ordenação*/
$order == 1? $list=0:$list=1;
}



if(!isset($order)) {
    $order = 0;

}
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
                    <td><a href="?order=<?php echo $list;?>&coluna=id">ID</a></td>
                    <td><a href="?order=<?php echo $list;?>&coluna=nome">CLIENTE</a></td>
                    <td>TIPO</td>
                    <td><a href="?order=<?php echo $list;?>&coluna=stars">SCORE</a></td>
                </tr>

                    <?php


                    $html = "NÃO HÁ DADOS PARA SEREM MOSTRADOS!";
                    if (count($clientes) > 0) {
                        $html='';
                        foreach ($clientes as $ch => $vl) {
                            $html .= '<tr>';
                            $html .= '<td>' . $vl->getId() .'</td>';
                            $html .= '<td><a href="?order='.$order.'&p=1&c=' . $ch . '&coluna='.$coluna.'">' . $vl->getPNome() . '</a></td>';
                            $html .= '<td>' . $vl->getTipoDoc() . '</td>';
                            $html .= '<td>' . $vl->getStars() . '</td>';
                            $html .= '</tr>';
                        }
                    }
                        echo $html;
                    ?>
            </table>
        </div>
    </div>
<?php
if(!isset($p)){
    $p=0;
    $c=null;
}
if($p == 1 ){
?>  <div class="row">
        <div class="col-lg-12">
            <table class="table text-center table-striped">
                <tr>
                    <th>Clientes</th>
                </tr>

                <tr>
                    <td>ID:</td>
                    <td><?php echo $clientes[$c]->getId(); ?></td>
                </tr>

                <tr>
                    <td>Nome:</td>
                    <td><?php echo $clientes[$c]->getPNome() . ' ' . $clientes[$c]->getSNome(); ?></td>
                </tr>

                <tr>
                    <td>Endereço:</td>
                    <td><?php echo $clientes[$c]->getEnd(); ?></td>
                </tr>

                <tr>
                    <td>Telefone:</td>
                    <td><?php echo $clientes[$c]->getTel(); ?></td>
                </tr>

                <tr>
                    <td> E-mail:</td>
                    <td><?php echo $clientes[$c]->getEmail(); ?></td>
                </tr>

                <tr>
                    <td>CPF/CNPJ:</td>
                    <td><?php echo $clientes[$c]->getDoc(); ?></td>
                </tr>

                <tr>
                    <td>Tipo:</td>
                    <td><?php echo $clientes[$c]->getTipoDoc(); ?></td>
                </tr>

                <tr>
                    <td>Endereço de Entrega:</td>
                    <td><?php echo $clientes[$c]->getEndEntrega(); ?></td>
                </tr>

                <tr>
                    <td>SCORE:</td>
                    <td><?php echo $clientes[$c]->getStars(); ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
<?php
}
