<?php

namespace App\Helpers;

interface MessageInterface
{
    // ...
    public function getMessage() : string;
    public function setMessage(string $message) : string;
}
