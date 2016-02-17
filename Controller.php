<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/02/2016
 * Time: 17:23
 */
class Controller
{
    /**
     * @param $n
     */
    function criaClientes($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            ($i % 2 == 1) ? $r = 'Fisica' : $r = 'Juridica';


            $cliente[$i] = new Cliente();
            $cliente[$i]->setId($i);
            $cliente[$i]->setPNome( (round(($i/2)*3*round($i/2^2)/4)));
            $cliente[$i]->setSNome('SobreNome - ' . $i);
            $cliente[$i]->setEnd('Endereco - ' . $i);
            $cliente[$i]->setTel('Telefone - ' . $i);
            $cliente[$i]->setEmail('Email - ' . $i);
            $cliente[$i]->setDoc('Documento - ' . $i);
            $cliente[$i]->setTipoDoc($r);
            $cliente[$i]->setStars($i>5?round($i/2):$i);
            $cliente[$i]->setEndEntrega('Endereco de entrega - ' . $i . ' ' . $r);
        }
        return $cliente;
        }




    function reordernaClientes($clientes, $order, $coluna)
    {

        return null;
    }

}
