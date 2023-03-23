<x-mail::message>
  # Ciao {{ config('app.name') }},

  l'utente {{ $contact->name }} ti ha contattato dal form contatti del sito.<br>

  Ecco i dati ricevuto:

  ---

  - Nome: {{ $contact->name }}
  - Email: {{ $contact->email }}
  - Messaggio: {{ $contact->message }}

  ---

  Buona giornata,<br>
  {{ config('app.name') }}
</x-mail::message>
