<?php
namespace App\Controllers;

use kernel\Controller;
use App\Models\indexModel;

class IndexController extends Controller {
   
    protected $paras;

    public function __construct($parameter){
       parent::__construct($parameter);
    }

    public function getUri(){
        $this->paras = parent::getUri();
        return $this->paras;
    }
    
    public function run(){
        $view = new indexView("/");
        $view->show($result);
    }
    }
