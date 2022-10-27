<?php

namespace App\Helpers;

use App\Helpers\MessageInterface;

class Message implements MessageInterface{

    public function __construct(MessageInterface $sender)
    {
        // Guardamos o objeto Message com suas regras e implementações
        $this->sender = $sender;
    }

    public function getMessage() : string
    {
        // Retorna a mensagem
        return $this->sender->getMessage();
    }

    public function setMessage($message) : string {
        //alteração na mensagem
        return $this->sender->setMessage($message);
    }

}
