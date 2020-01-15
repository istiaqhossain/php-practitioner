<?php
namespace App\Models;

use App\Core\App;

class User 
{
    public function getAllUsers() 
    {
        $users = App::get('database')->selectAll('users');

        return $users;
    }

    public function storeUser(array $data)
    {
        App::get('database')->insert('users',$data);    
    }
}