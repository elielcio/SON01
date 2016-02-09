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
            $cliente[$i] = new Cliente();
            $cliente[$i]->setPNome('Cliente - ' . $i);
            $cliente[$i]->setSNome('SobreNome - ' . $i);
            $cliente[$i]->setEnd('Endereco - ' . $i);
            $cliente[$i]->setTel('Telefone - ' . $i);
            $cliente[$i]->setCpf('CPF - ' . $i);
            $cliente[$i]->setEmail('Email - ' . $i);
            $cliente[$i]->setProfissao('Profissao - ' . $i);
        }
        return $cliente;
    }

    function listaClientes($n, $order)
    {
        $html = '';
        if (count($n) > 0) {
            foreach ($n as $ch => $vl) {
                $html .= '<tr>';
                $html .= '<td><a href="?list='.$order.'&p=1&c=' . $ch . '">' . $ch . '</a></td>';
                $html .= '<td>' . $vl->getPNome() . '</td>';
                $html .= '</tr>';
            }
        }
        return $html;
    }

    function mostraCliente($cliente)
    {
        $html='';
        $html .='<div class="col-lg-12 table-bordered">
            <table class="table table-s triped">
                <thead>

                         <th>Detalhes do Cliente </th>

                </thead>

                </tr>
                <tr>
                    <td>NOME:</td>
                    <td>'.$cliente->pNome.' '. $cliente->sNome.'</td>
                </tr>

                <tr>
                    <td>Telefone:</td>
                    <td>'.$cliente->tel.'</td>
                </tr>

                <tr>
                    <td>Endereço:</td>
                    <td>'.$cliente->end.'</td>
                </tr>

                <tr>
                    <td>CPF:</td>
                    <td>'.$cliente->cpf.'</td>
                </tr>

                <tr>
                    <td>E-mail:</td>
                    <td>'.$cliente->email.'</td>
                </tr>


            </table>
        </div>';
        return $html;

    }
}
