<?php

return [
    'typeOfComponents' => [
        'processors'           => 'Процессоры',
        'motherboards'         => 'Материнские платы',
        'coolers'              => 'Кулеры',
        'storages'             => 'Накопители',
        'random_access_memory' => 'Оперативная память',
        'videocards'           => 'Видеокарты',
        'psu'                  => 'Блоки питания',
        'cases'                => 'Корпусы',
    ],
    'dataOfComponents' => [
        'processors'           => [
            'title'                   => 'Название',
            'description'             => 'Описание',
            'base_frequency'          => 'Базовая частота',
            'max_frequency'           => 'Максимальная частота',
            'count_of_cores'          => 'Количество ядер',
            'count_of_streams'        => 'Количество потоков',
            'tdp'                     => 'Тепловыделение',
        ],
        'motherboards'         => [
            'title'              => 'Название',
            'subtitle'           => 'Доп. название',
            'description'        => 'Описание',
        ],
        'coolers'              => [
            'title'       => 'Название',
            'description' => 'Описание',
            'power'       => 'Рассеиваемая мощность',
            'chipset'     => 'Минимальные обороты',
            'form'        => 'Максимальные обороты',
        ],
        'storages'             => [
            'title'              => 'Название',
            'description'        => 'Описание',
            'reading_rate'       => 'Скорость чтения',
            'recording_rate'     => 'Скорость записи',
            'max_resource'       => 'Ресурс записи',
        ],
        'random_access_memory' => [
            'title'                               => 'Название',
            'description'                         => 'Описание',
            'count_of_modules'                    => 'Количество модулей',
            'frequency_of_random_access_memories' => 'Частота',
        ],
        'videocards'           => [
            'title'                => 'Название',
            'description'          => 'Описание',
            'max_frequency'        => 'Максимальная частота',
        ],
        'psu'                  => [
            'title'       => 'Название',
            'description' => 'Описание',
            'power'       => 'Мощность',
        ],
        'cases' => [
            'title'       => 'Название',
            'description' => 'Описание',
        ],
    ],
];
