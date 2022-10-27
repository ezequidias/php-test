<?php

namespace App\Helpers;

use App\Helpers\MessageInterface;

class MessageDateSpecialStrategy implements MessageInterface
{
    private $message = '';
    // ...
    public function getMessage() : string
    {
        return $this->message;
    }

    public function setMessage($message) : string {
        $this->message = $message;
        return $this->message;
    }

}
