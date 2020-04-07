<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\UserAccessUrl;
use App\User;

class RegistrationOrder extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $userAccessUrl;

    const FROM    = 'terry.lloyd.music@gmail.com';
    const TO      = 'artem.tyutnev.developer@gmail.com';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, UserAccessUrl $userAccessUrl)
    {
        $this->user          = $user;
        $this->userAccessUrl = $userAccessUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(self::FROM)->
                      view('emails/registrationOrder', [
                              'user'            => $this->user,
                              'userAccessUrl'   => $this->userAccessUrl
                            ]);
    }
}
