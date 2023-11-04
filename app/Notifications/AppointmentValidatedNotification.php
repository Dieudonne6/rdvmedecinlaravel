<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Rdv;
use App\Models\Docteur;

class AppointmentValidatedNotification extends Notification
{
    use Queueable;

    protected $rdv;
    protected $docteur;


    public function __construct(Rdv $rdv, Docteur $docteur)
    {
        $this->rdv = $rdv;
        $this->docteur = $docteur;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Votre rendez-vous médical a été validé')
            ->greeting('Cher patient,')
            ->line('Votre rendez-vous médical a été validé par le médecin.')
            ->line('Détails du rendez-vous :')
            ->line('Nom du médecin: ' . $this->docteur->name)
            ->line('Email du médecin: ' . $this->docteur->email)
            ->line('Date du rendez-vous: ' . $this->rdv->date)
            ->line('Service demandé: ' . $this->rdv->service)
            ->line('Veuillez vous assurer d\'être présent à l\'heure convenue.')
            ->salutation('Merci pour votre confiance.');
    }
}