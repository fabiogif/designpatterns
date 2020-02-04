<?php

class RespostaPorcento implements Resposta
{
    private $outraResposta;

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() == Formato::$PORCENTO) {
            echo $conta->getTitular() . " %" . $conta->getSaldo();
        } else {
            $this->outraResposta->responde($req, $conta);
        }
    }

    public function setProxima(Resposta $resposta)
    {
        $this->outraResposta = $resposta;
    }
}
