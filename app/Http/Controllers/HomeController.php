<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Registration;
use App\Http\Controllers\MailerController;

class HomeController extends Controller
{

    public function __construct(){
        $this->mail = new MailerController;
    }

    public function Home(){
        $url = URL::current();
        
        if (strpos($url,'/') !== false)
            $pos = 'Home';

        return view("home")->with([
            'pos' => $pos
        ]);
    }

    public function Register(){
        $url = URL::current();
        if (strpos($url,'register') !== false)
            $pos = 'Register';

        $Registered = Registration::all();    
        $CountRegistered = $Registered->count();
        $codeAuto = $this->codeAutoRegis($CountRegistered);

        return view("register/register")->with([
            'pos' => $pos,
            'code_reg' => $codeAuto
        ]);
    }

    public function SubmitRegister(Request $request){
        $url = URL::current();
        if (strpos($url,'register') !== false)
            $pos = 'Register/Submit';
        
        $checkEmail = Registration::where('email', $request->email)->get();

        if ($checkEmail->count() < 1) {
            $datas = [];
            $datas = new Registration();
                $datas->id_reg = $request->code_reg;
                $datas->name = $request->fullname;
                $datas->email = $request->email;
                $datas->phone = $request->phone;
                $datas->type_ta = $request->type_ops;
                $datas->desc_ta = $request->desc_ta;
                $datas->desc_method = $request->desc_method;
            $datas = $datas->save();
            $this->mail->sentMail($request->fullname,$request->code_reg,$request->email,$request->phone,$request->type_ops,$request->desc_ta,$request->desc_method);

            return redirect()->route('RegisterSuccess',[
                'code_reg' => $request->code_reg
            ]);
        } else {
            return view("register/register")->with([
                'pos'      => $pos,
                'status'   => 'error',
                'code_reg' => $request->code_reg
            ]);
        }
    }

    public function RegisterSuccess(Request $request){
        $url = URL::current();
        if (strpos($url,'register') !== false)
            $pos = 'Register/Success';

        $code_reg = $request->code_reg;
        $successReg = Registration::where('id_reg',$code_reg)->get();

        return view("register/registersuccess")->with([
            'pos' => $pos,
            'successReg' => $successReg
        ]);
    }

    public function ListRegister(){
        $all = Registration::all();
        return response()->json($all);
    }

    public function codeAutoRegis($a){
        if ($a > 0) {
            $nilCode = substr($a[0],1);
            $code = (int) $nilCode;
            $code = $a + 1;
            $codeAuto = "CODEREG".str_pad($code, 4, "0", STR_PAD_LEFT);
        } else {
            $codeAuto = "CODEREG00001";
        }
        return $codeAuto;
    }

}
