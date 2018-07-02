<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ConfigController extends Controller
{
    public function refreshCaptcha()
    {

       return response()->json(['captcha'=> captcha_img()]);
    }

    public function send(Request $request)
    {
        $this->validate($request,[
           'email' => 'required|email|max:255|',
           'name' => 'required','min:3','max:50',
           'Message' => 'required','min:10','max:750',
        ]);
        //       sin no valida que vuelva a /#contact

        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();
        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
        \Mail::send('email.message', $data, function($message) use ($request)
        {
            //remitente
            $message->from($request->email, $request->name);
            //asunto
            $message->subject($request->subject);
            //receptor

            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
        });
        return \View::make('email.aviso');
    }

    public function tareas(){
        return view('varias.task');
    }
}
