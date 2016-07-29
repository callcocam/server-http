<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 26/07/2016
 * Time: 22:21
 */

namespace Boleto\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use OpenBoleto\Agente;
use OpenBoleto\Banco\BancoDoBrasil;
use Zend\View\Model\JsonModel;

class BbController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;

    }

    public function bbAction()
    {

        $sacado = new Agente('Fernando Maia', '023.434.234-34', 'ABC 302 Bloco N', '72000-000', 'Brasília', 'DF');
        $cedente = new Agente('Empresa de cosméticos LTDA', '02.123.123/0001-11', 'CLS 403 Lj 23', '71000-000', 'Brasília', 'DF');

        $boleto = new BancoDoBrasil(array(
            // Parâmetros obrigatórios
            'dataVencimento' => new \DateTime('2013-01-24'),
            'valor' => 23.00,
            'sequencial' => 1234567, // Para gerar o nosso número
            'sacado' => $sacado,
            'cedente' => $cedente,
            'agencia' => 1724, // Até 4 dígitos
            'carteira' => 18,
            'conta' => 10403005, // Até 8 dígitos
            'convenio' => 1234, // 4, 6 ou 7 dígitos
        ));

        echo $boleto->getOutput();


        return new JsonModel(['result'=>false,'messages'=>'Nenhuma Operação Foi Realizada']);
    }
}