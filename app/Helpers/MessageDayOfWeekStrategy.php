<?php

namespace App\Helpers;

use App\Helpers\MessageInterface;
use Illuminate\Foundation\Inspiring;

class MessageDayOfWeekStrategy implements MessageInterface
{
    private $message = '';
    // ...
    public function getMessage() : string
    {
        $day_week = date('w');
        if($day_week == 1){
            $this->message = 'Happiness is not something readymade. It comes from your own actions. - Dalai Lama';
        }elseif($day_week == 2){
            $this->message = 'He who is contented is rich. - Laozi';
        }elseif($day_week == 3){
            $this->message = 'Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci';
        }elseif($day_week == 4){
            $this->message = 'Order your soul. Reduce your wants. - Augustine';
        }elseif($day_week == 5){
            $this->message = 'If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius';
        }elseif($day_week == 6){
            $this->message = 'Simplicity is the ultimate sophistication. - Leonardo da Vinci';
        }elseif($day_week == 7){
            $this->message = 'Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh';
        }
        return $this->message;
    }

    public function setMessage($message) : string {
        $this->message = $message;
        return $this->message;
    }

}
