<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

    public $uses = array();

    public function index() {
        $this->loadModel('Usuario');     
        $this->set('usuarios', $this->Usuario->find('all'));
        
        
    }

}
