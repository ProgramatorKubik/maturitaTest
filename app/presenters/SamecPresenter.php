<?php


namespace App\Presenters;

class SuchanekPresenter extends BasePresenter {
    
    
    public function renderDefault (){
    $this->template->radek = 20;
    $this->template->predek = 1;
    $users = new \Models\Users ();
    $this->template->users = $users->getAllUsers();
    }
}
