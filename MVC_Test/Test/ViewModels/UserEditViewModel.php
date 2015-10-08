<?php
namespace Pesho\ViewModels;

class UserEditViewModel
{
    private  $id;
    private  $name;
    private  $email;

    private  $someInfoInArray = [
        "<u>arrayValue1</u>",
        "<em>arrayValue2</em>",
        [
            "<b>arrayValue3 - nested array</b>"
        ]
    ];

    /**
     * UsersViewModel constructor.
     * @param $id
     * @param $name
     * @param $email
     */
    public function __construct($id, $name, $email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @return array
     */
    public function getArrayInfo(){
        return $this->someInfoInArray;
    }
}