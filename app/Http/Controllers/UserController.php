<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\EssaiController; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    function accueil(){
        return view('index');
    }

    // function bonjour(){
    //     $user = \App\Models\User::all();
    //     return view('Essai.bonjour');
    // }





    function inscription (Request $request){
        $img = $request->file('img');
        $imagePath = $img->store('patients', 'public');
        $imageName = explode("/", $imagePath);
        $image = end($imageName);
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
            'password' => 'required|min:4',
        ]);
        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password =Hash::make($request->password);
        $user->img = $image;
        // dd(end($imageName));
        $user->save();
        if($user){

            return redirect()->route('connexpatient');
        }
    }


        


    function inscrip(){
        return view('patients.inscription');
    }


    public function connexion(Request $request){
       
        $user = $request->only('name','email', 'password');
       if( Auth::attempt($user) ){
        $request->session()->regenerate();
            //  return redirect()->intended('/bienvenu');
            return redirect()->route('patientconnect');

       }
      

    }

    function connex(){
                $user = \App\Models\User::all();
        return view('patients.connexion');
    }


    function patientconnect(){
        return view('patients.patientconnect');
    }

    function listedocteur(){
        $docteur = \App\Models\Docteur::all();
        // dd($docteur);
        return view('patients.listedocteur', [
                'docteur' => $docteur
        ]);
    }
    function troisdocteur(){
        $docteur = \App\Models\Docteur::take(3)->get();
        dd($docteur);
        return view('patients.listedoc', [
                'docteur' => $docteur
        ]);
    }




    function apropos(){
        return view('patients.apropos');
    }

    function services(){
        return view('patients.service');
    }


    
    // function modifie(){
    //     return view('Essai.modifie');
    // }

    function logout(){
        Auth::logout();
        return redirect('/connexion');

        }


        // function modif (string $email, Request $request){
        //     $user = \App\Models\User::findOrfail($email);
        //     $user->email = $request-> input('email');
        //     $user->password = $request-> input('password');
        //     $user->save();
        //     if($user){
    
        //         return redirect()->route('connex');
        //     }
        // }
        
}
