<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contactUs() {
        return view('contattaci');
    }

    public function thankYou() {
        return view('thankYou');
    }

    public function submit(Request $request) {
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));

        //dd('controlla la tua email, ti abbiamo inviato un messaggio di conferma!');
        // reindirizzamento alla homepage con un messaggio di conferma
        // return redirect()->route('home')->with('status', 'Controlla la tua email, ti abbiamo inviato un messaggio di conferma!');

        //reindirizzamento ad una pagina custom , thank you page con un messaggio di conferma
        return redirect()->route('thankYou.page')->with('status', 'Controlla la tua email, ti abbiamo inviato un messaggio di conferma!');

    }

}
