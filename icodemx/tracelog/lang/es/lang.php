<?php

return [
    'plugin' => [
        'name' => 'Tracelog',
        'description' => 'Un buen trait para administrar el log de eventos en eloquent.',
        'label' => 'Trace Log'
    ],
    'show' => [
        'userfallback' => 'Editado por',
        'traceable_type' => 'Modelo',
        'traceable_id' => 'ID de instancia',
        'msg' => 'Acción',
        'reference' => 'Referencia'
    ]
];