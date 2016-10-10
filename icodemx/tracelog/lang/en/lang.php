<?php

return [
    'plugin' => [
        'name' => 'Tracelog',
        'description' => 'A cool trait to trace eloquent model events into OctoberCMS Plugins.',
        'label' => 'Trace Log'
    ],
    'show' => [
        'userfallback' => 'Edited by',
        'traceable_type' => 'Eloquent model',
        'traceable_id' => 'ID eloquent instance',
        'msg' => 'Action',
        'reference' => 'Reference column'
    ]
];