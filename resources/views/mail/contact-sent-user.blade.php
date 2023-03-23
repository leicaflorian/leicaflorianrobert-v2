<x-mail::message>
  # Ciao {{ $contact->name }},

  ti ringrazio per avermi contattato. <br>
  Come promesso, cercherò di risponderti il prima possibile.

  Nel frattempo, se vuoi, puoi controllare i dati che ho ricevuto:

  ---

  - Nome: {{ $contact->name }}
  - Email: {{ $contact->email }}
  - Messaggio: {{ $contact->message }}

  ---

  Buona giornata,<br>
  {{ config('app.name') }}
</x-mail::message>
