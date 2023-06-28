<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Laukam :attribute jābūt akceptētam.',
    'accepted_if' => 'Laukam :attribute jābūt akceptētam, ja :other ir :value.',
    'active_url' => 'Atribūta laukam jābūt derīgam URL.',
    'after' => 'Atribūta laukam jābūt datumam pēc :date.',
    'after_or_equal' => 'Atribūta laukam jābūt datumam, kas seko vai ir vienāds ar :date.',
    'alpha' => 'Laukā :atribūts drīkst būt tikai burti.',
    'alpha_dash' => 'Laukā :atribūts drīkst būt tikai burti, cipari, domuzīmes un pasvītrojumi.',
    'alpha_num' => 'Laukā :atribūts drīkst būt tikai burti un cipari.',
    'array' => 'Laukam :atribūts jābūt masīvam.',
    'ascii' => 'Laukā :atribūts drīkst būt tikai burtciparu rakstzīmes un simboli.',
    'before' => 'Laukā :atribūts jābūt datumam pirms :date.',
    'before_or_equal' => 'Atribūta laukam jābūt datumam pirms :date vai jābūt vienādam ar :date.',
    'between' => [
        'array' => 'Laukā :atribūts ir jābūt starp :min un :max elementiem.',
        'file' => 'Atribūtu laukam jābūt starp :min un :max kilobaitiem.',
        'numeric' => 'Atribūtu laukam jābūt starp :min un :max.',
        'string' => 'Atribūta laukam jābūt no :min līdz :max rakstzīmēm.',
    ],
    'boolean' => 'Atribūta laukam jābūt true vai false.',
    'confirmed' => 'Atribūtu lauka apstiprinājums neatbilst.',
    'current_password' => 'Parole ir nepareiza.',
    'date' => 'Atribūta laukā jābūt derīgam datumam.',
    'date_equals' => 'Laukā :atribūts jābūt datumam, kas vienāds ar :date.',
    'date_format' => 'Atribūta laukam jāatbilst formātam :format.',
    'decimal' => 'Atribūta laukam jābūt ar :decimal decimāldaļu.',
    'declined' => 'Atribūta laukam jābūt noraidītam.',
    'declined_if' => 'Atribūta laukam jābūt noraidītam, ja :other ir :value.',
    'different' => 'Laukiem :atribūtu lauks un :other jābūt atšķirīgiem.',
    'digits' => 'Atribūta laukam jābūt :digits cipariem.',
    'digits_between' => 'Atribūta laukam jābūt starp :min un :max cipariem.',
    'dimensions' => 'Atribūta laukam ir nederīgi attēla izmēri.',
    'distinct' => 'Atribūta laukā ir dublēta vērtība.',
    'doesnt_end_with' => 'Laukā :atribūts nedrīkst būt neviena no šādām beigām: :values.',
    'doesnt_start_with' => 'Laukā :attribute nedrīkst būt neviena no šīm rakstzīmēm: :values.',
    'email' => 'Laukā :attribute jābūt derīgai e-pasta adresei.',
    'ends_with' => 'Laukam :atribūts jābeidzas ar vienu no šiem vārdiem: :values.',
    'enum' => 'Izvēlētais :atribūts ir nederīgs.',
    'exists' => 'Izvēlētais :atribūts ir nederīgs.',
    'file' => 'Laukam :atribūts jābūt datnei.',
    'filled' => 'Atribūta laukam jābūt ar vērtību.',
    'gt' => [
        'array' => 'Laukā :atribūts jābūt vairāk nekā :value elementiem.',
        'file' => 'Atribūta laukam jābūt lielākam par :value kilobaitiem.',
        'numeric' => 'Laukam :atribūts jābūt lielākam par :value.',
        'string' => 'Atribūta laukam jābūt lielākam par :value rakstzīmēm.',
    ],
    'gte' => [
        'array' => 'Laukā :atribūts jābūt :value elementiem vai vairāk.',
        'file' => 'Atribūtu laukam jābūt lielākam vai vienādam ar :value kilobaiti.',
        'numeric' => 'Atribūta laukam jābūt lielākam vai vienādam ar :value.',
        'string' => 'Atribūta laukam jābūt lielākam vai vienādam ar :value zīmes.',
    ],
    'image' => 'Atribūta laukam jābūt attēlam.',
    'in' => 'Izvēlētais :atribūts ir nederīgs.',
    'in_array' => 'Atribūta laukam ir jāeksistē :other.',
    'integer' => 'Atribūta laukam jābūt veselskaitlim.',
    'ip' => 'Atribūta laukam jābūt derīgai IP adresei.',
    'ipv4' => 'Atribūta laukam jābūt derīgai IPv4 adresei.',
    'ipv6' => 'Atribūta laukam jābūt derīgai IPv6 adresei.',
    'json' => 'Laukam :atribūts jābūt derīgai JSON virknei.',
    'lowercase' => 'Laukā :atribūta laukam jābūt rakstītam ar mazajiem burtiem.',
    'lt' => [
        'array' => 'Laukā :attribute jābūt mazāk nekā :value elementiem.',
        'file' => 'Laukam :atribūts jābūt mazākam par :value kilobaitiem.',
        'numeric' => 'Laukam :atribūts jābūt mazākam par :value.',
        'string' => 'Atribūta laukam jābūt mazākam par :value rakstzīmēm.',
    ],
    'lte' => [
        'array' => 'Laukā :atribūts nedrīkst būt vairāk par :value elementiem.',
        'file' => 'Laukam :atribūts jābūt mazākam vai vienādam ar :value kilobaiti.',
        'numeric' => 'Laukam :atribūts jābūt mazākam vai vienādam ar :value.',
        'string' => 'Atribūta laukam jābūt mazākam vai vienādam ar :value rakstzīmēm.',
    ],
    'mac_address' => 'Laukā :atribūts jābūt derīgai MAC adresei.',
    'max' => [
        'array' => 'Laukā :atribūts nedrīkst būt vairāk par :max elementiem.',
        'file' => 'Laukā :atribūts nedrīkst būt vairāk par :max kilobaitiem.',
        'numeric' => 'Atribūtu lauks nedrīkst būt lielāks par :max.',
        "string" => "Atribūtu lauks nedrīkst būt lielāks par :max rakstzīmju.",
    ],
    'max_digits' => 'Atribūta laukā nedrīkst būt vairāk par :max ciparu.',
    'mimes' => 'Atribūtu laukam jābūt failam ar tipu: :values.',
    'mimetypes' => 'Atribūtu laukam jābūt datnei ar tipu: :values.',
    'min' => [
        'array' => 'Laukā :atribūts jābūt vismaz :min elementiem.',
        'file' => 'Atribūtu laukam jābūt vismaz :min kilobaitiem.',
        'numeric' => 'Atribūtu laukam jābūt vismaz :min.',
        'string' => 'Atribūtu laukam jābūt vismaz :min rakstzīmju.',
    ],
    'min_digits' => 'Atribūta laukā jābūt vismaz :min cipariem.',
    'missing' => 'Laukā :atribūta laukā nedrīkst būt.',
    'missing_if' => 'Ja :other ir :value, tad :atribūta laukam jābūt trūkstošam.',
    'missing_unless' => 'Atribūta laukam jābūt trūkstošam, ja vien :other nav :value.',
    'missing_with' => 'Atribūta laukam jābūt trūkstošam, ja ir :values.',
    'missing_with_all' => 'Atribūta laukam jābūt trūkstošam, ja ir :values.',
    'multiple_of' => 'Laukam :atribūta laukam jābūt :vērtības reizinātājam.',
    'not_in' => 'Izvēlētais :atribūts ir nederīgs.',
    'not_regex' => 'Atribūta lauka formāts ir nederīgs.',
    'numeric' => 'Atribūta laukam jābūt skaitlim.',
    'password' => [
        'letters' => 'Atribūta laukā jābūt vismaz vienam burtam.',
        'mixed' => 'Atribūta laukā jābūt vismaz vienam lielajam un vienam mazajam burtam.',
        'numbers' => 'Laukā :atribūts jāietver vismaz viens skaitlis.',
        'symbols' => 'Laukā :atribūts jāietver vismaz viens simbols.',
        'uncompromised' => 'Dotais :atribūts ir parādījies datu noplūdē. Lūdzu, izvēlieties citu :atribūtu.',
    ],
    'present' => 'Atribūta laukam jābūt klāt.',
    'aizliegts' => 'Atribūta lauks ir aizliegts.',
    'prohibited_if' => 'Atribūta lauks ir aizliegts, ja :other ir :value.',
    'prohibited_unless' => 'Atribūtu lauks ir aizliegts, ja vien :other nav pozīcijā :values.',
    'prohibits' => 'Atribūtu lauks aizliedz :other klātbūtni.',
    'regex' => 'Atribūtu lauka formāts ir nederīgs.',
    'required' => 'Atribūta lauks ir obligāts.',
    'required_array_keys' => 'Laukā :atribūts jāietver ieraksti par: vērtības.',
    'required_if' => 'Atribūtu lauks ir obligāts, ja :other ir :value.',
    'required_if_accepted' => 'Atribūtu lauks ir obligāts, ja :other ir pieņemts.',
    'required_unless' => 'Atribūta lauks ir obligāts, ja vien :other nav iekļauts :values.',
    'required_with' => 'Atribūta lauks ir obligāts, ja ir :values.',
    'required_with_all' => 'Atribūtu lauks ir obligāts, ja ir :values.',
    'required_without' => 'Atribūtu lauks ir obligāts, ja nav :values.',
    'required_without_all' => 'Atribūtu lauks ir obligāts, ja nav nevienas no :values.',
    'same' => 'Laukam :atribūta laukam jāsakrīt ar :other.',
    'size' => [
        'array' => 'Laukā :atribūts jāietver :size elementi.',
        'file' => 'Atribūta laukam jābūt :size kilobaiti.',
        'numeric' => 'Atribūta laukam jābūt :size.',
        'string' => 'Atribūtu laukam jābūt :size zīmes.',
    ],
    'starts_with' => 'Atribūtu laukam jāsākas ar vienu no šiem simboliem: :values.',
    'string' => 'Laukam :atribūts jābūt virknei.',
    'timezone' => 'Laukā :atribūta laukam jābūt derīgai laika joslai.',
    'unique' => 'Atribūts :atribūts jau ir aizņemts.',
    'augšupielādēts' => 'Atribūtu neizdevās augšupielādēt.',
    'uppercase' => 'Laukā :attribute jābūt lielajiem burtiem.',
    'url' => 'Laukam :atribūts jābūt derīgam URL.',
    'ulid' => 'Laukam :atribūts jābūt derīgam ULID.',
    'uuid' => 'Atribūta laukam jābūt derīgam UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
