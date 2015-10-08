<?php
namespace Pesho\Controllers;

use Pesho\Models\User;
use Pesho\View;

class UsersController extends BaseController
{
    protected function onInit(){
        View::$viewBag['pass'] = '12345';
    }

    public function edit($id, $name){
        $user = new User();
        $model = $user->getByName($name);
        $this->escapeAll($model);
        //var_dump($m);

        return new View($model);
    }

    public function profile(){
        return new View();
    }

    public function all(){
        $user = new User();
        $models = $user->getAll();
        $this->escapeAll($models);

        return new View($models);
    }

}