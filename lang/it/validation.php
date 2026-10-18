<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Italian version of the framework's default validation messages. The site
    | is in Italian, so these are the messages shown by the contact form
    | (POST /api/contacts) and by the admin forms.
    |
    */

    'accepted' => 'Il campo :attribute deve essere accettato.',
    'accepted_if' => 'Il campo :attribute deve essere accettato quando :other è :value.',
    'active_url' => 'Il campo :attribute deve essere un URL valido.',
    'after' => 'Il campo :attribute deve essere una data successiva al :date.',
    'after_or_equal' => 'Il campo :attribute deve essere una data uguale o successiva al :date.',
    'alpha' => 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => 'Il campo :attribute può contenere solo lettere e numeri.',
    'array' => 'Il campo :attribute deve essere un elenco.',
    'ascii' => 'Il campo :attribute può contenere solo caratteri alfanumerici e simboli a un byte.',
    'before' => 'Il campo :attribute deve essere una data precedente al :date.',
    'before_or_equal' => 'Il campo :attribute deve essere una data uguale o precedente al :date.',
    'between' => [
        'array' => 'Il campo :attribute deve avere tra :min e :max elementi.',
        'file' => 'Il campo :attribute deve essere tra :min e :max kilobyte.',
        'numeric' => 'Il campo :attribute deve essere tra :min e :max.',
        'string' => 'Il campo :attribute deve essere tra :min e :max caratteri.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma del campo :attribute non corrisponde.',
    'current_password' => 'La password non è corretta.',
    'date' => 'Il campo :attribute deve essere una data valida.',
    'date_equals' => 'Il campo :attribute deve essere una data uguale al :date.',
    'date_format' => 'Il campo :attribute deve avere il formato :format.',
    'decimal' => 'Il campo :attribute deve avere :decimal cifre decimali.',
    'declined' => 'Il campo :attribute deve essere rifiutato.',
    'declined_if' => 'Il campo :attribute deve essere rifiutato quando :other è :value.',
    'different' => 'I campi :attribute e :other devono essere diversi.',
    'digits' => 'Il campo :attribute deve essere di :digits cifre.',
    'digits_between' => 'Il campo :attribute deve essere tra :min e :max cifre.',
    'dimensions' => 'Il campo :attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'doesnt_end_with' => 'Il campo :attribute non deve finire con uno dei seguenti valori: :values.',
    'doesnt_start_with' => 'Il campo :attribute non deve iniziare con uno dei seguenti valori: :values.',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'Il campo :attribute deve finire con uno dei seguenti valori: :values.',
    'enum' => 'Il valore selezionato per :attribute non è valido.',
    'exists' => 'Il valore selezionato per :attribute non è valido.',
    'file' => 'Il campo :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'array' => 'Il campo :attribute deve avere più di :value elementi.',
        'file' => 'Il campo :attribute deve essere più grande di :value kilobyte.',
        'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
        'string' => 'Il campo :attribute deve avere più di :value caratteri.',
    ],
    'gte' => [
        'array' => 'Il campo :attribute deve avere almeno :value elementi.',
        'file' => 'Il campo :attribute deve essere di almeno :value kilobyte.',
        'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'string' => 'Il campo :attribute deve avere almeno :value caratteri.',
    ],
    'image' => 'Il campo :attribute deve essere un\'immagine.',
    'in' => 'Il valore selezionato per :attribute non è valido.',
    'in_array' => 'Il campo :attribute deve esistere in :other.',
    'integer' => 'Il campo :attribute deve essere un numero intero.',
    'ip' => 'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
    'lowercase' => 'Il campo :attribute deve essere in minuscolo.',
    'lt' => [
        'array' => 'Il campo :attribute deve avere meno di :value elementi.',
        'file' => 'Il campo :attribute deve essere più piccolo di :value kilobyte.',
        'numeric' => 'Il campo :attribute deve essere minore di :value.',
        'string' => 'Il campo :attribute deve avere meno di :value caratteri.',
    ],
    'lte' => [
        'array' => 'Il campo :attribute non deve avere più di :value elementi.',
        'file' => 'Il campo :attribute non deve superare :value kilobyte.',
        'numeric' => 'Il campo :attribute deve essere minore o uguale a :value.',
        'string' => 'Il campo :attribute non deve superare :value caratteri.',
    ],
    'mac_address' => 'Il campo :attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => 'Il campo :attribute non deve avere più di :max elementi.',
        'file' => 'Il campo :attribute non deve superare :max kilobyte.',
        'numeric' => 'Il campo :attribute non deve essere maggiore di :max.',
        'string' => 'Il campo :attribute non deve superare :max caratteri.',
    ],
    'max_digits' => 'Il campo :attribute non deve avere più di :max cifre.',
    'mimes' => 'Il campo :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'Il campo :attribute deve essere un file di tipo: :values.',
    'min' => [
        'array' => 'Il campo :attribute deve avere almeno :min elementi.',
        'file' => 'Il campo :attribute deve essere di almeno :min kilobyte.',
        'numeric' => 'Il campo :attribute deve essere almeno :min.',
        'string' => 'Il campo :attribute deve avere almeno :min caratteri.',
    ],
    'min_digits' => 'Il campo :attribute deve avere almeno :min cifre.',
    'missing' => 'Il campo :attribute non deve essere presente.',
    'missing_if' => 'Il campo :attribute non deve essere presente quando :other è :value.',
    'missing_unless' => 'Il campo :attribute non deve essere presente a meno che :other sia :value.',
    'missing_with' => 'Il campo :attribute non deve essere presente quando è presente :values.',
    'missing_with_all' => 'Il campo :attribute non deve essere presente quando sono presenti :values.',
    'multiple_of' => 'Il campo :attribute deve essere un multiplo di :value.',
    'not_in' => 'Il valore selezionato per :attribute non è valido.',
    'not_regex' => 'Il formato del campo :attribute non è valido.',
    'numeric' => 'Il campo :attribute deve essere un numero.',
    'password' => [
        'letters' => 'Il campo :attribute deve contenere almeno una lettera.',
        'mixed' => 'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'Il valore di :attribute è comparso in una fuga di dati. Scegline uno diverso.',
    ],
    'present' => 'Il campo :attribute deve essere presente.',
    'prohibited' => 'Il campo :attribute non è ammesso.',
    'prohibited_if' => 'Il campo :attribute non è ammesso quando :other è :value.',
    'prohibited_unless' => 'Il campo :attribute non è ammesso a meno che :other sia tra :values.',
    'prohibits' => 'Il campo :attribute impedisce la presenza di :other.',
    'regex' => 'Il formato del campo :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_array_keys' => 'Il campo :attribute deve contenere voci per: :values.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_if_accepted' => 'Il campo :attribute è obbligatorio quando :other è accettato.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other sia tra :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando è presente :values.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando sono presenti :values.',
    'required_without' => 'Il campo :attribute è obbligatorio quando non è presente :values.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno tra :values è presente.',
    'same' => 'Il campo :attribute deve corrispondere a :other.',
    'size' => [
        'array' => 'Il campo :attribute deve contenere :size elementi.',
        'file' => 'Il campo :attribute deve essere di :size kilobyte.',
        'numeric' => 'Il campo :attribute deve essere :size.',
        'string' => 'Il campo :attribute deve essere di :size caratteri.',
    ],
    'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti valori: :values.',
    'string' => 'Il campo :attribute deve essere un testo.',
    'timezone' => 'Il campo :attribute deve essere un fuso orario valido.',
    'unique' => 'Il valore di :attribute è già in uso.',
    'uploaded' => 'Il caricamento di :attribute non è riuscito.',
    'uppercase' => 'Il campo :attribute deve essere in maiuscolo.',
    'url' => 'Il campo :attribute deve essere un URL valido.',
    'ulid' => 'Il campo :attribute deve essere un ULID valido.',
    'uuid' => 'Il campo :attribute deve essere un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'g-recaptcha-response' => [
            'required' => 'Verifica recaptcha fallita. Ti invitiamo a riprovare.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Readable names for the form fields: the contact form (name, email,
    | message), the login form and the admin forms for projects and
    | experiences.
    |
    */

    'attributes' => [
        // contact form
        'name' => 'nome e cognome',
        'email' => 'email',
        'message' => 'messaggio',
        'g-recaptcha-response' => 'reCAPTCHA',

        // login
        'password' => 'password',

        // admin: projects and experiences
        'title' => 'titolo',
        'description' => 'descrizione',
        'image' => 'immagine',
        'link' => 'link',
        'github' => 'GitHub',
        'date' => 'data',
        'year' => 'anno',
        'period' => 'periodo',
        'company' => 'azienda',
        'companyLink' => 'link dell\'azienda',
        'companyLogo' => 'logo dell\'azienda',
        'content' => 'contenuto',
    ],

];
