<?php

namespace App\Notifications;

use App\UserProfile;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProfileUpdated extends Notification
{
    use Queueable;
    /**
     * @var UserProfile
     */
//    public $profile;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(UserProfile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];  //nexmo, mail
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->success()
            ->subject('Su perfil se modifico!')
            ->line('Su perfil fue modificado.')
            ->action('Ver su  Perfil', url('profile'))
            ->line('Este es un mensaje generado automaticamnte para   ')
            ->line('confirmacion de esta accion para evitar modificaciones  ')
            ->line('no efectuadas por Ud.  ');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
