<?php
namespace App\Controllers;

use App\Models\User;

class UserController 
{
    private $user;
    
    public function __construct()
    {
        $this->user = new User;
    }
    
    public function index()
    {
        $users = $this->user->getAllUsers();

        return view('users', ['users'=>$users]);
    }
    
    public function store() 
    {
        if (!empty($_POST['username'])) {
            $user = $this->user->storeUser([
                'username' => $_POST['username']
            ]);
        }
        
        return redirect('users');

    }
}