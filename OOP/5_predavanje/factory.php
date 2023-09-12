<?php

class UserFactory
{
    public function createUser($userTypte)
    {
        switch ($userTypte) {
            case "admin": return new AdminUser();
            break;
            case "korisnik": return new RegularUser();
            break;
            default: throw new InvalidArgumentException("Nepoznati tip korisnika");
        }
    }
}

class AdminUser
{
    
}

class RegularUser
{

}

$userFactory = new UserFactory();
$user = $userFactory->createUser("sdfasfe");
