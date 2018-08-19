<?php

namespace App\Http\Controllers;
use App\Message;
use Carbon\Carbon;
use App\Captain;
use App\UnitScout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Scout;

use DB;
use Illuminate\Support\Facades\Auth;
use Sentry;
use App\Foo;
use Illuminate\Console\Scheduling\Event;
use File;
class AccountsController extends Controller
{
    //

    public function  getUsersAccounts(){
        $accounts =   User::with('profile')->get();



        return response()->json(["users"=>$accounts]);
    }
    public function  AddNewAccount(Request $request){
        $email = $request->input('email');
        $scout_id=   DB::table('scouts')->where('email',$email)->value('scout_id');

        if($scout_id){
            $password = $request->input('password');
            $password_encrypted = password_hash($password, PASSWORD_BCRYPT);
            $created_at = Carbon::now();



            DB::insert('insert into users(scout_id,email,password,created_at) values(?,?,?,?)',[$scout_id,$email,$password_encrypted,$created_at]);
            return response()->json(["msg"=>"added Successfully"]);
        }




        return response()->json(["users"=>"scout not found"]);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUser(){


        $scoutinfo = Auth::user()->profile;
        $fullname = Auth::user()->profile->getFullname();
        $scout_code = Auth::user()->profile->getRegistrationNumber();
        $scout_id = $scoutinfo->scout_id;

       $unit = UnitScout::where('scout_id','=',$scout_id)->value('unit_id');

        $role =Captain::find($scoutinfo->scout_id);






        return response()->json(["users"=>   [ $scoutinfo,$fullname,$scout_code,$unit,$role]]) ;
    }
    public function UpdateMyInfo(Request $request){

        $scout_id = $request->input('scout_id');

        $newemail  = $request->input('email');
        $newphone  = $request->input('phone');
        $user = User::find($scout_id);
        $scout = Scout::find($scout_id);
        $updated_at = Carbon::now();
        $user->email = $newemail;
        $user->updated_at = $updated_at;

        $scout->email = $newemail;
        $scout->phone = $newphone;


        $user->save();
        $scout->save();
        return  response()->json(["newdara"=>  "Change it Successfully"]);

    }
    public function  ChangePassword(Request $request){
        $oldpassword =  DB::table('users')->where('scout_id', Auth::user()->scout_id)->value('password');
        $currentpassword = $request->input('currentpassword');
        $newpassword = $request->input('newpassword');
        $newpassword_encrypted = password_hash($newpassword, PASSWORD_BCRYPT);
        $hasher = app('hash');

        if ($hasher->check($currentpassword, $oldpassword)) {
            $user = User::find(Auth::user()->scout_id);
            $user->password = $newpassword_encrypted;
            $updated_at = Carbon::now();
            $user->updated_at = $updated_at;
            $user->save();

            return  response()->json(["password"=>true]);
        }

        return  response()->json(["password"=>false]);

    }
    public function  DeleteAccount( $scout_id){
        $user = DB::delete('delete from users where scout_id = ?',[$scout_id]);
        if($user){

            return response()->json(["account"=>"delete it Successfully"]);
        }else{
            return response()->json(["account"=>"this user doesn't existe"]);
        }



    }
    public function getuseremail($scout_id){
        $user = User::find($scout_id);
        $email = $user->email;
        return response()->json(["email"=>$email]);

    }
    public function ChangeUserEmail(Request $request,$scout_id){

        $user = User::find($scout_id);
        if($user){
            $user->email = $request->input('email');
            $updated_at = Carbon::now();
            $user->updated_at = $updated_at;
            $user->save();
            return response()->json(["emailchanged"=> true]);
        }
        return response()->json(["emailchanged"=> false]);

    }
    public function ChangeUserPassword(Request $request,$scout_id){
        $newpassword = $request->input('newpassword');
        $newpassword_encrypted = password_hash($newpassword, PASSWORD_BCRYPT);



            $user = User::find($scout_id);
            $user->password = $newpassword_encrypted;
            $updated_at = Carbon::now();
            $user->updated_at = $updated_at;
            $user->save();



            return  response()->json(["password"=>true]);



    }
    public function getMyImage(){
        $myimage = Auth::user()->profile->image;
        return response()->json(["image"=>$myimage]);
    }
    public function ChangMyImage(Request $request){
        $user = Auth::user();
        $scout_id = $user->scout_id;
        $scout = Scout::find($scout_id);
        $oldimage = $scout->image;
        $newimage = $request->input('image');
        if($oldimage==""){
            $filename =   $this->InsertNewImage($newimage);
        }else{
            // first we need to delete the old image where it  was stored

            $this->deleteImageFromDirectory($oldimage);
            // then store the new one
            $filename= $this->InsertNewImage($newimage);


        }
        // finally save it into the data base
        $scout->image =$filename;
        $scout->save();


       return response()->json(["image"=>$scout->image]);
    }
    public function deleteImageFromDirectory($image){
        $imagePath = public_path().'/images/Captain/'.$image;
         File::delete($imagePath);
    }
    public function InsertNewImage($image){
        $expl = explode(',',$image);
        $decode = base64_decode($expl[1]);
        if(str_contains($expl[0],'png')){
            $exte= 'png';

        }else{
            $exte= 'jpeg';
        }
        $currenttime = Carbon::now()->timestamp;
        $filename = $currenttime.'.'.$exte;
        $filepath = public_path().'/images/Captain/'.$filename;
        file_put_contents($filepath,$decode);
        return $filename;
    }
public function getMembershipdate($scout_id){
        $scout = Scout::find($scout_id);
        $membership_date = $scout->membership_date;
        return response()->json(["membership_date"=>$membership_date]);

}

public function getSomeInfo(){
        $user = Auth::user()->profile->scout_id;
        $scout = Scout::find($user);
        $fullname = $scout->last_name.' '. $scout->first_name;
        $image = $scout->image;
        return response()->json(["fullname"=>$fullname,"image"=>$image]);

}
public function getAllCaptains(){
        $captain = Captain::with('isScout')->get();
        return response()->json(["captain"=>$captain]);
}

}