<?php

namespace App\Mail;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactReceivedAdmin extends Mailable {
  use Queueable, SerializesModels;
  
  public Contact $contact;
  public User $adminUser;
  
  /**
   * Create a new message instance.
   */
  public function __construct(Contact $contact, User $adminUser) {
    $this->contact   = $contact;
    $this->adminUser = $adminUser;
  }
  
  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope {
    return new Envelope(
      subject: 'Contatto da ' . $this->contact->name,
    );
  }
  
  /**
   * Get the message content definition.
   */
  public function content(): Content {
    return new Content(
      markdown: 'mail.contact-received-admin',
    );
  }
  
  /**
   * Get the attachments for the message.
   *
   * @return array<int, \Illuminate\Mail\Mailables\Attachment>
   */
  public function attachments(): array {
    return [];
  }
}
