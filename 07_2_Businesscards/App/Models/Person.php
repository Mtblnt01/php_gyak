<?php
namespace App\Models;

class Person{
    protected ?int $id;
    public string $name;
    protected string $email;
    private string $phone;

    public function __construct(?int $id, string $name, string $name, string $phone){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    // accessor - hozzáférést szabályozza
    public function getEmail(): string{
        return $this->email;
    }

    //getter
    public function getPhone(): string{
        return $this->phone;
    }

    //setter
    public function setPhone($phone): void{
        $this->phone = $phone;
    }


}


?>