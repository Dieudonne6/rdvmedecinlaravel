<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Docteur;
use App\Models\User;
use App\Models\Rdv;
use App\Notifications\NewAppointmentNotification;
use App\Notifications\AppointmentValidatedNotification;

class RdvController extends Controller
{
    function prendrerendezvous(){
        $user = \App\Models\User::all();
        return view('patients.prendrerdv');
    }

    function prendrerdv(Request $request) {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email',
            'date' => 'required',
            'service' => 'required',
            'docteur_id' => 'required',
        ]);


      
        // $docteurId = $request->user()->id;
        $user = $request->user(); // Récupérer l'utilisateur authentifié




        $rdv = new \App\Models\Rdv();
        $rdv->user_id = $user->id; // Associer l'ID de l'utilisateur
        $rdv->name = $request->name;
        $rdv->age = $request->age;
        $rdv->email = $request->email;
        $rdv->date = $request->date;
        $rdv->service = $request->service;
        $rdv->docteur_id = $request->docteur_id;
        // dd($rdv);
        $rdv->save();
    
        if ($rdv) {


            // Récupérer les docteurs ayant la spécialité spécifiée
           $doctors = Docteur::where('service', $request->service)->get();
        //    $docteurId = $request->session()->get('docteur_id');
        //    $docteurId = $request->auth()->guard('docteur')->user()->id;
        //    {{ auth()->guard('docteur')->user()->name }}

       
            // Envoyer une notification à chaque docteur
           foreach ($doctors as $doctor) {
               $doctor->notify(new NewAppointmentNotification($rdv));
               if ($doctor->id == $rdv->docteur_id) {
                // \Mail::to($doctor->email)->send(new NewAppointmentNotification($rdv)); // Assurez-vous que NewAppointmentMail est correctement défini
                $doctor->notify(new NewAppointmentNotification($rdv));
            }
           }
       
            return redirect()->route('rdvsoumis');
        }
    }

    // $doctors = Docteur::where('service', $request->service)->get();

    // // ... (autre code)

    // // Envoyer une notification à chaque docteur
    // foreach ($doctors as $doctor) {
    //     $doctor->notify(new NewAppointmentNotification($rdv));
    //     // Envoyer un e-mail au médecin sélectionné
    //     if ($doctor->id == $rdv->docteur_id) {
    //         \Mail::to($doctor->email)->send(new NewAppointmentMail($rdv)); // Assurez-vous que NewAppointmentMail est correctement défini
    //     }
    // }

    function rdvsoumis(){
        // $user = \App\Models\User::all();
        return view('patients.rdvsoumis');
    }

//     public function validateRdv($id, Request $request)
//     {
//         // Trouver le rendez-vous correspondant à l'ID fourni
//         $rdv = Rdv::findOrFail($id);
//         $docteurId = $request->session()->get('docteur_id');

//         // Ajouter ici le code pour valider le rendez-vous, par exemple, changer un champ "validated" à true
//         $rdv->validated = true;
//         $rdv->docteur_id = $docteurId;
//         $rdv->save();
//             // Récupérer l'utilisateur associé au rendez-vous (le patient)
//         $patient = User::find($rdv->user_id);
//         $docteur = $rdv->docteur;

//     // Envoyer la notification au patient
//         // $patient->notify(new AppointmentValidatedNotification($rdv, $docteur));
//         return view('doctors.rendezvousvalider', ['patientName' => $rdv->name]);
//         // Rediriger ou retourner une réponse appropriée
//     }
// }


public function validateRdv($id, Request $request)
{
    // Trouver le rendez-vous correspondant à l'ID fourni
    $rdv = Rdv::findOrFail($id);
    // $rdv = Rdv::findOrFail($docteur);
    $docteurId = $request->session()->get('docteur_id');
    // dd($docteurId);

    // Récupérer le docteur associé au rendez-vous
    $docteur = Docteur::findOrFail($docteurId);

    // Ajouter ici le code pour valider le rendez-vous, par exemple, changer un champ "validated" à true
    $rdv->validated = true;
    $rdv->docteur_id = $docteurId;
    $rdv->save();

    // Récupérer l'utilisateur associé au rendez-vous (le patient)
    $patient = User::find($rdv->user_id);

    // Envoyer la notification au patient
    $patient->notify(new AppointmentValidatedNotification($rdv, $docteur));
    return view('doctors.rendezvousvalider', ['patientName' => $rdv->name]);
    // Rediriger ou retourner une réponse appropriée
}
}
