<?php
return array(
    'title' => 'Users',
    'single' => 'User',
    'model' => 'App\User',
    'columns' => array("id","name","email"),
    'filters' => array("id","name","email"),
    'edit_fields' => array(
        'email'=>array('title'=>'E-mail','type'=>'text'),
        'name'=>array('title'=>'Name','type'=>'text')
        )
);



