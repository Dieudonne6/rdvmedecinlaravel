<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\EssaiController; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Docteur;


class DocteurController extends Controller
{


    function accueil(){
        return view('index');
    }

    // function bonjour(){
    //     $user = \App\Models\User::all();
    //     return view('Essai.bonjour');
    // }





    function inscription (Request $request){
        $doc = $request->file('document');
        $docPath = $doc->store('docteur', 'public');
        $docName = explode("/", $docPath);
        $document = end($docName);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
            'age' => 'required',
            'service' => 'required',
            'password' => 'required|min:4',
        ]);
        $docteur = new \App\Models\Docteur();
        $docteur->name = $request->name;
        $docteur->email = $request->email;
        $docteur->telephone = $request->telephone;
        $docteur->age = $request->age;
        $docteur->service = $request->service;
        $docteur->password =Hash::make($request->password);
        $docteur->document = $document;
        // dd(end($imageName));
        $docteur->save();
        if($docteur){

            return redirect()->route('connexdocteur');
        }
    }

    public function getDoctors(Request $request)
    {
        // Votre logique de récupération des médecins ici
        $service = $request->input('service');
        $doctors = Docteur::where('service', $service)->get();

        // Renvoyer la liste des médecins au format JSON
        return response()->json($doctors);
    }
        


    function inscrip(){
        return view('doctors.inscription');
    }


    // public function connexiond(Request $request){
       
    //     $docteur = $request->only('name','email', 'password');
    //     // Auth::guard('docteur')->attempt
    //    if(Auth::guard('docteur')->attempt){
    //     $request->session()->regenerate();
    //         //  return redirect()->intended('/bienvenu');
    //         return redirect()->route('docteurconnect');

    //    }
      

    // }

    public function connexion(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('docteur')->attempt($credentials)) {
            $docteur = Docteur::where('email', $credentials['email'])->first();
            $request->session()->regenerate();
            $request->session()->put('docteur_id', $docteur->id);
            return redirect()->route('docteurconnect');
        } else {
            // Gérer les cas d'échec d'authentification ici
        }
    }

    function connex(){
                $docteur = \App\Models\Docteur::all();
        return view('doctors.connexion');
    }

  

    function docteurconnect(){
        return view('doctors.docteurconnect');
    }

    // function modifie(){
    //     return view('Essai.modifie');
    // }

    function logout(){
        Auth::logout();
        return redirect('/connexion');

        }


        // function modif (string $email, Request $request){
        //     $docteur = \App\Models\User::findOrfail($email);
        //     $user->email = $request-> input('email');
        //     $user->password = $request-> input('password');
        //     $user->save();
        //     if($user){
    
        //         return redirect()->route('connex');
        //     }
        // }
        
}
