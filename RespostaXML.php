<?php


class RespostaXML implements Resposta
{
    private $outraResposta;


    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() == Formato::$XML) {
            echo "<conta><titular>" . $conta->getTitular() . "</titular>";
        } else {
            $outraResposta->responde($req, $conta);
        }
    }

    public function setProxima(Resposta $resposta)
    {
        $this->outraResposta = $resposta;
    }
}
