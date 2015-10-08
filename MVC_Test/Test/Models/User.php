<?php
namespace Pesho\Models;

use Pesho\ViewModels\UserEditViewModel;

class User
{
    private $users = [
        1 => [
            "name"=>"Ivan",
            "email"=>"<u>ivan@mail.bg</u>"
        ],
        2 => [
            "name"=>"Maria",
            "email"=>"mara@mail.bg"
        ],
        3 => [
            "name"=>"Boris",
            "email"=>"boris@mail.bg"
        ]
    ];

    /**
     * @return UserEditViewModel[]
     */
    public function getAll(){
        $users = [];
        foreach($this->users as $id=>$userInfo){
            $users[] = new UserEditViewModel($id, $userInfo['name'], $userInfo['email']);
        }

        return $users;
    }

    public function getOne($id){
        $userInfo = $this->users[$id];

        return new UserEditViewModel($id, $userInfo['name'], $userInfo['email']);
    }

    public function getByName($name){
        $userInfo = array_filter($this->users, function($user)use ($name){
            return $user['name'] == $name;
        });

        $id = key($userInfo);
        $userInfo = array_shift(array_values($userInfo));

        return new UserEditViewModel($id, $userInfo['name'], $userInfo['email']);
    }
}