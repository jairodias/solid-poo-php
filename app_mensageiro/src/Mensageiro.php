<?php

namespace src;

use src\interfaces\IMensagemToken;

class Mensageiro
{
    private $canal;

    /**
     * @param IMensagemToken
     */
    public function __construct(IMensagemToken $mensagem)
    {
        $this->setCanal($mensagem);
    }

    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        $this->getCanal()->enviar();
    }
}
