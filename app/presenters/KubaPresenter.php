<?php

namespace App\Presenters;


class JendaPresenter extends BasePresenter {

    public function renderDefault() {
        
    }

    public function renderSuccess() {
        $params = $this->getRequest()->getParameters();
        $this->template->params =$params;
       
    }
    
    
    public function createComponentRegister($name) {
        return new \Register($this, $name);
    }
}
