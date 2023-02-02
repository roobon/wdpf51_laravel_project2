<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(1);
        echo $users->name;
        echo "<br>";
        echo $users->phoneTable[0]->phone;
        echo "<br>";
        echo $users->phoneTable[1]->phone;
        //$users->phone;
    }

    public function phoneData()
    {
        $phone = Phone::find(1);
        echo "Phone ID: " . $phone->id;
        echo "<br>" . $phone->user->name;
    }

    public function roleAssign()
    {
        $user = User::find(1);
        $roleIds = [1, 2];
        $user->roles()->detach($roleIds);
    }
}
