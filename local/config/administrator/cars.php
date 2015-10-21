<?php
return array(
    'title' => 'Cars',
    'single' => 'Car',
    'model' => 'App\Car',
    'columns' => array('picture'=> array(
        'title'=>'picture',
        'type'=>'image',
        'output' =>'<img width="200px" src="/media/img/(:value)" />'),
        'marke',
        'model',
        'price',
        'description'
    ),
    'filters' => array("marke","model","price","picture"),
    'edit_fields' => array(
        'marke' => array('title' => 'marke' , 'type' => 'text'),
        'description' => array('title' => 'desc' , 'type' => 'text'),
        'price' => array('title' => 'price' , 'type' => 'text')
    )
);



