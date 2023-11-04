<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Docteur;


class NewAppointmentNotification extends Notification
{
    use Queueable;

    protected $rdv;

    public function __construct($rdv)
    {
        $this->rdv = $rdv;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouveau rendez-vous médical')
            ->greeting('Cher Docteur,')
            ->line('Vous avez un nouveau rendez-vous médical à confirmer.')
            ->line('Détails du rendez-vous :')
            ->line('Nom du patient: ' . $this->rdv->name)
            ->line('Email du patient: ' . $this->rdv->email)
            ->line('Téléphone du patient: ' . $this->rdv->telephone)
            ->line('Date du rendez-vous: ' . $this->rdv->date)
            ->line('Service demandé: ' . $this->rdv->service)
            ->action('Valider le rendez-vous', url('/rendezvousvalider/' . $this->rdv->id . '/validated'));
    }

    // Ajoutez d'autres méthodes de notification si nécessaire
}




///////////////

