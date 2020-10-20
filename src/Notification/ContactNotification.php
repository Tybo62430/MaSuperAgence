<?php

namespace App\Notification;

use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class ContactNotification
{
    private $mailer;
    private $rendered;

    public function __construct(MailerInterface $mailer, Environment $rendered)
    {
        $this->mailer = $mailer;
        $this->rendered = $mailer;
    }
    public function notify(Contact $contact)
    {
        $email = (new Email())
            ->from('noreply@agence.fr')
            ->to('agence@agence.fr')
            ->replyTo($contact->getMail())
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $this->mailer->send($email);
    }
}
