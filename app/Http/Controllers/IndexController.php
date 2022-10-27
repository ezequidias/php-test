<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helpers\Message;
use App\Helpers\MessageDayOfWeekStrategy;
use App\Helpers\MessageDateSpecialStrategy;

class IndexController extends Controller
{
    private $days_specials = [
        '01/01' => 'Mensagem de Ano novo',
        '25/12' => 'Mensagem de Natal',
        '01/03' => 'Mensagem de Carnaval',
    ];

    public function index(Request $request)
    {
        if(in_array(date('d/m'), array_keys($this->days_specials))){
            $message = new Message(new MessageDateSpecialStrategy);
            $message->setMessage($this->days_specials[date('d/m')]);
        }else{
            $message = new Message(new MessageDayOfWeekStrategy);
        }

        return $message->getMessage();
    }

}
