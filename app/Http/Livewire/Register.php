<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class Register extends Component
{
    public $user_fname;
    public $user_email;
    public $user_password;
    public $alertData = [];

    public function createNewUser()
    {
        $this->validate([
            'user_fname' => 'required|string',
            'user_email' => 'required|email',
            'user_password' => 'required|string',
        ]);

        DB::table('users')->insert([
            'user_fname' => $this->user_fname,
            'user_email' => $this->user_email,
            'user_password' => bcrypt($this->user_password),
            'user_status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->user_email = "";
        $this->user_fname = "";
        $this->user_password = "";

        $this->alertData = [
            'type' => 'success',
            'message' => 'New user has been saved.',
        ];
    }

    public function render()
    {
        $users = DB::table('users')->get();
        return view('livewire.register',[
            'users' => $users
        ]);
    }
}
