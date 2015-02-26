<?php

App::uses('Model', 'Model');


class Usuario extends Model {
    
    public $belongsTo = 'Rol';
    
}
