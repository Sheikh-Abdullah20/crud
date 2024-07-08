<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
   public function addUsers(Request $req){
    $users = DB::table('users')->insert([
        'user_name' => $req->username,
        'user_email' => $req->useremail,
        'user_city' => $req->usercity,
        'user_age' => $req->userage
    ]);
    if($users){
        return redirect()->route('home');
    }
    else{
        echo "Error in inserting User";
    }
   }

   public function updatePage($id){
    $users = DB::table('users')->where('user_id',$id)->first();
    // return $users;
    return view('updateUser',['data' => $users]);
   }

   public function updateUser(Request $req, string $id){
    $user = DB::table('users')->where('user_id',$id)->update([

        'user_name' => $req->username,
        'user_email' => $req->useremail,
        'user_city' => $req->usercity,
        'user_age' => $req->userage
    ]);

    if($user){
        return redirect()->route('home');
    }
   }

public function getUsers(){
   $users = DB::table('users')->orderBy('user_id')->cursorPaginate(5,['*'],'pa');
   return view('home', ['users' => $users]);
}

public function userDetails(string $id){
    $user = DB::table('users')->where('user_id',$id)->first();

    return view('user_details',['user'=> $user]);
}

public function deleteUser( string $id){
    $user = DB::table('users')
    ->where('user_id',$id)
    ->delete();

    if($user){
        return redirect()->route('home');
    }
    else{
        echo "Error In Deleting User";
    }
}

public function truncateUsers(){
    $users = DB::table('users')
    ->truncate();
    return redirect()->route('home');

}


}