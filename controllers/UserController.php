<?php

class UserController 
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', ['users'=>$users]);
    }
    
    public function store() 
    {
        if (!empty($_POST['username'])) {
            App::get('database')->insert('users',[
                'username' => $_POST['username']
            ]);    
        }
        
        return redirect('users');

    }
}