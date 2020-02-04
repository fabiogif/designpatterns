<?php

class RespotaCSV implements Resposta
{
    private $outraResposta;

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() == Formato::$CSV) {
            echo $conta->getTitular() . ";" . $conta->getSaldo();
        } else {
            $outraResposta->responde($req, $conta);
        }
    }


    public function setProxima(Resposta $resposta)
    {
        $this->outraResposta = $resposta;
    }
}
