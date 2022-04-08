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

    'accepted'             => ':attribute nincs elfogadva.',
    'active_url'           => ':attribute nem egy helyes URL.',
    'after'                => ':attribute :date utáni dátum kell legyen.',
    'after_or_equal'       => ':attribute :date utáni vagy azzal megegyező dátum kell legyen.',
    'alpha'                => ':attribute csak betűket tartalmazhat.',
    'alpha_dash'           => ':attribute csak betűket, számokat, kötőjelet és alulvonást tartalmazhat.',
    'alpha_num'            => ':attribute csak betűket és számokat tartalmazhat.',
    'array'                => ':attribute tömb kell legyen.',
    'before'               => ':attribute :date előtti dátum kell legyen.',
    'before_or_equal'      => ':attribute :date előtti vagy azzal megegyező dátum kell legyen.',
    'between'              => [
        'numeric' => ':attribute :min és :max között kell legyen.',
        'file'    => ':attribute :min és :max kilobájt méretű kell legyen.',
        'string'  => ':attribute :min és :max hosszúságú lehet.',
        'array'   => ':attribute :min és :max hosszuságú lehet.',
    ],
    'boolean'              => ':attribute csak logikai értékű lehet.',
    'confirmed'            => ':attribute megerősítése nem egyezik.',
    'date'                 => ':attribute nem egy helyes dátum.',
    'date_equals'          => ':attribute meg kell egyezzen :date.',
    'date_format'          => ':attribute nem a várt formátumú :format.',
    'different'            => ':attribute és :other más kell, hogy legyen.',
    'digits'               => ':attribute tartalmazhat :digits digits.',
    'digits_between'       => ':attribute :min és :max számok közötti kell legyen.',
    'dimensions'           => ':attribute nem megfelelő dimenziójú.',
    'distinct'             => ':attribute nem tartalmazhat duplikált értékeket.',
    'email'                => ':attribute email kell, hogy legyen.',
    'ends_with'            => ':attribute a következő értékekkel kell végződjön: :values.',
    'exists'               => 'kiválasztott :attribute helytelen.',
    'file'                 => ':attribute fájl kell, hogy legyen.',
    'filled'               => ':attribute nem lehet üres.',
    'gt'                   => [
        'numeric' => ':attribute nagyobb kell legyen, mint :value.',
        'file'    => ':attribute mérete több kell legyen, mint :value kilobájt.',
        'string'  => ':attribute hosszabb kell legyen, mint :value.',
        'array'   => ':attribute nagyobb kell legyen, mint :value.',
    ],
    'gte'                  => [
        'numeric' => ':attribute nagyobb, vagy :value kell, hogy legyen.',
        'file'    => ':attribute mérete több, vagy :value kilobájt kell, hogy legyen.',
        'string'  => ':attribute hosszabb, vagy :value hosszúságú kell, hogy legyen.',
        'array'   => ':attribute legalább :value elemet kell tartalmazzon.',
    ],
    'image'                => ':attribute kép kell, hogy legyen.',
    'in'                   => 'kiválasztott :attribute nem megfelelő.',
    'in_array'             => ':attribute értéke nem megengedett :other.',
    'integer'              => ':attribute egy szám kell, hogy legyen.',
    'ip'                   => ':attribute szabványos IP cím kell, hogy legyen.',
    'ipv4'                 => ':attribute szabbányos IPv4 cím kell, hogy legyen.',
    'ipv6'                 => ':attribute szabványos IPv6 cím kell, hogy legyen.',
    'json'                 => ':attribute szabványos JSON szöveg kell, hogy legyen.',
    'lt'                   => [
        'numeric' => ':attribute kisebb kell legyen, mint :value.',
        'file'    => ':attribute mérete kisebb kell legyen, mint :value kilobájt.',
        'string'  => ':attribute rövidebb kell legyen, mint :value.',
        'array'   => ':attribute kisebb kell legyen, mint :value.',
    ],
    'lte'                  => [
        'numeric' => ':attribute kisebb, vagy :value kell, hogy legyen.',
        'file'    => ':attribute mérete kevesebb, vagy :value kilobájt kell, hogy legyen.',
        'string'  => ':attribute rövidebb, vagy :value hosszúságú kell, hogy legyen',
        'array'   => ':attribute legfeljebb :value elemet tartalmazhat.',
    ],
    'max'                  => [
        'numeric' => ':attribute nem lehet több, mint :max.',
        'file'    => ':attribute nem lehet nagyobb, mint :max kilobájt.',
        'string'  => ':attribute nem lehet hosszabb, mint :max.',
        'array'   => ':attribute nem lehet több eleme, mint :max.',
    ],
    'mimes'                => ':attribute nem megfelelő kiterjesztésű: :values.',
    'mimetypes'            => ':attribute nem megfelelő típusú: :values.',
    'min'                  => [
        'numeric' => ':attribute legalább :min kell, hogy legyen.',
        'file'    => ':attribute legalább :min kilobájt méretű kell, hogy legyen.',
        'string'  => ':attribute legalább :min hosszúságú kell, hogy legyen.',
        'array'   => ':attribute legalább :min elemet kell tartalmaznia.',
    ],
    'not_in'               => 'kiválasztott :attribute nem megfelelő.',
    'not_regex'            => ':attribute formátuma helytelen.',
    'numeric'              => ':attribute szám kell, hogy legyen.',
    'password'             => 'A jelszó helytelen.',
    'present'              => ':attribute kötelező.',
    'regex'                => ':attribute formátuma helytelen.',
    'required'             => ':attribute mező nem lehet üres.',
    'required_if'          => ':attribute mező nem lehet üres, ha :other értéke :value.',
    'required_unless'      => ':attribute mező nem lehet üres, hacsak :other értéke :values.',
    'required_with'        => ':attribute mező nem lehet üres, ha :values meg van adva.',
    'required_with_all'    => ':attribute mező nem lehet üres, ha :values meg lettek adva.',
    'required_without'     => ':attribute mező nem lehet üres, ha :values nem lett megadva.',
    'required_without_all' => ':attribute nező nem lehet üres, ha :values nem lettek megadva.',
    'same'                 => ':attribute és :other meg kell egyezzen.',
    'size'                 => [
        'numeric' => ':attribute :size méretű kell, hogy legyen.',
        'file'    => ':attribute :size kilobájt méretű kell, hogy legyen.',
        'string'  => ':attribute :size hosszú kell, hogy legyen.',
        'array'   => ':attribute :size elemű kell, hogy legyen.',
    ],
    'starts_with'          => ':attribute a következő értékekkel kezdődhet: :values.',
    'string'               => ':attribute szöveg kell, hogy legyen.',
    'timezone'             => ':attribute helyes időzóna kell, hogy legyen.',
    'unique'               => ':attribute már foglalt.',
    'uploaded'             => ':attribute sikertelen feltöltés.',
    'url'                  => ':attribute formátuma helytelen.',
    'uuid'                 => ':attribute szabványos UUID kell, hogy legyen.',

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

    'attributes' => [
        'name' => 'Név',
        'email' => 'Email cím',
        'location' => 'Lakhely',
        'text' => 'Szöveg',
        'file' => 'Kép név',
        'password' => 'Jelszó',
    ],

];
