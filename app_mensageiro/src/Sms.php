<?php

namespace src;

use src\interfaces\IMensagemToken;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo "Enviou sms";
    }
}
