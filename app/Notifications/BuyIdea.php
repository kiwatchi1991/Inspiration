<?php

namespace inspiration\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use inspiration\Order;
use Illuminate\Support\Facades\Log;

class BuyIdea extends Notification
{
    use Queueable;

    protected $title = 'Inspiration:アイデアを購入しました。';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $order = Order::with('ideas', 'users')->latest()->first();

        return (new MailMessage)
            ->subject($this->title)
            ->action('Notification Action', url('/'))
            ->view(
                'emails.buyEmail',
                [
                    'order' => $order
                ]
            );
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
