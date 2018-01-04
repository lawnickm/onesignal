<?php

namespace NotificationChannels\OneSignal\Test;

class NotifiableEMail
{

    use \Illuminate\Notifications\Notifiable;

    /**
     * @return array
     */
    public function routeNotificationForOneSignal()
    {
        return ['email' => 'test@example.com'];
    }
}
