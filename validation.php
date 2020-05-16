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

    'accepted' => 'O :attribute deve ser aceite.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data depois de :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode conter letras, números, hífens e sublinhados.',
    'alpha_num' => 'O :attribute só pode conter letras e números.',
    'array' => 'O :attribute deve ser uma matriz.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve ter entre :min e :max.',
        'file' => 'O :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O :attribute deve ter entre :min e :max caracteres.',
        'array' => '_O :attribute deve ter entre :min e :max caracteres.',
    ],
    'boolean' => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do :attribute não corresponde.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute tem um valor em duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com os seguintes valores: :values.',
    'exists' => 'O :attribute seleccionado é inválido.',
    'file' => 'O :attribute deve ser um ficheiro.',
    'filled' => 'O :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser superior a :value.',
        'file' => 'O :attribute deve ser superior a :value kilobytes.',
        'string' => 'O :attribute deve ser superior a :value caracteres.',
        'array' => 'O :attribute deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser igual ou superior a :value.',
        'file' => 'O :attribute deve ser igual ou superior a :value kilobytes.',
        'string' => 'O :attribute deve ser igual ou superior a :value caracteres.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute seleccionado é inválido.',
    'in_array' => 'O :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser um JSON válido.',
    'lt' => [
        'numeric' => 'O :attribute deve ser inferior a :value.',
        'file' => 'O :attribute deve ser inferior a :value kilobytes.',
        'string' => 'O :attribute deve ser inferior a :value caracteres.',
        'array' => 'O :attribute deve ter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser igual ou inferior a :value.',
        'file' => 'O :attribute deve ser igual ou inferior a :value kilobytes.',
        'string' => 'O :attribute deve ser igual ou inferior a :value caracteres.',
        'array' => 'O :attribute deve ter :value itens ou menos.',
    ],
    'max' => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O :attribute não pode ser maior que :max caracteres.',
        'array' => 'O :attribute não pode ter mais que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',

    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ser pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ser pelo menos :min caracteres.',
        'array' => 'O :attribute deve ser pelo menos :min itens.',
    ],
    'not_in' => 'O :attribute seleccionado é inválido.',
    'not_regex' => 'O formato do :attribute é inválido.',
    'numeric' => 'O :attribute deve ser númerico.',
    'password' => 'A palavra-passe está incorrecta.',
    'present' => 'O :attribute deve estar presente.',
    'regex' => 'O formato do :attribute é inválido.',
    'required' => 'O :attribute é obrigatório.',
    'required_if' => 'O :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with' => 'O :attribute é obrigatório quando :values estão presentes.',
    'required_with_all' => 'O :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O :attribute é obrigatório quando :values não estão presentes.',
    'required_without_all' => 'O :attribute é obrigatório quando não existe nenhum dos :values presentes.',
    'same' => 'O :attribute e :other não são iguais.',
    'size' => [
        'numeric' => 'O :attribute deve ter :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve ter :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O :attribute deve ser um string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique' => 'O :attribute já existe.',
    'uploaded' => 'O :attribute não foi carregado.',
    'url' => 'O :attribute tem um formato inválido.',
    'uuid' => 'O :attribute não é um UUID válido.',

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

    'attributes' => [
        'name'                  => 'nome',
        'username'              => 'username',
        'email'                 => 'e-mail',
        'first_name'            => 'nome',
        'last_name'             => 'apelido',
        'password'              => 'password',
        'password_confirmation' => 'confirmação de password',
        'city'                  => 'cidade',
        'company'               => 'empresa',
        'country'               => 'pais',
        'address'               => 'morada',
        'phone'                 => 'telefone',
        'mobile'                => 'telemóvel',
        'age'                   => 'idade',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'ano',
        'month'                 => 'mês',
        'day'                   => 'dia',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'conteúdo',
        'body'                  => 'corpo',
        'description'           => 'descrição',
        'excerpt'               => 'excerto',
        'date'                  => 'data',
        'time'                  => 'hora',
        'subject'               => 'assunto',
        'message'               => 'mensagem',
    ],

];
