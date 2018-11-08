<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Registration;
use App\Http\Controllers\MailerController;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->mail = new MailerController;
    }

    public function Home()
    {
        $url = URL::current();
        
        if (strpos($url,'/') !== false)
            $pos = 'Home';

        return view("home")->with([
            'pos' => $pos
        ]);
    }

    public function Register()
    {
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

    public function SubmitRegister(Request $request)
    {
        $url = URL::current();
        if (strpos($url,'register') !== false)
            $pos = 'Register/Submit';
        
        // $checkEmail = Registration::where('email', $request->email)->get();
        // if($checkEmail->count() < 1){
            $datas = [];
            $datas = new Registration();
            $datas->id_reg = $request->code_reg;
            $datas->name = $request->fullname;
            $datas->email = $request->email;
            $datas->phone = $request->phone;

            if ($request->radio_ops == 'umum') {    
                $datas->type_ta = $request->type_ops;
                $datas->organization = $request->umum;
                $datas->desc_apps = $request->desc_apps;
                $datas = $datas->save();
                $this->mail->sentMail($request->fullname,$request->code_reg,$request->email,$request->phone,$request->type_ops,null,null,$request->umum,$request->desc_apps,null,null,null);
            } else if ($request->radio_ops == 'sma/smk') {
                $datas->type_ta = $request->type_ops;
                $datas->school = $request->sekolah;
                $datas->desc_apps = $request->desc_apps;
                $datas = $datas->save();
                $this->mail->sentMail($request->fullname,$request->code_reg,$request->email,$request->phone,$request->type_ops,null,null,null,$request->desc_apps,$request->sekolah,null,null);                
            } else if ($request->radio_ops == 'kuliah') {
                $datas->type_ta = $request->type_ops;
                $campus = ($request->universitas != 'other') ? $request->universitas : $request->universitasother;
                $datas->campus = $campus;
                $datas->nim = $request->nim;
                $datas->desc_ta = $request->desc_ta;
                $datas->desc_method = $request->desc_method;
                $datas = $datas->save();
                $this->mail->sentMail($request->fullname,$request->code_reg,$request->email,$request->phone,$request->type_ops,$request->desc_ta,$request->desc_method,null,null,null,$campus,$request->nim);                
            }

            return redirect()->route('RegisterSuccess',[
                'code_reg' => $request->code_reg
            ]);
            
        // } else {
        //     return view("register/register")->with([
        //         'pos'      => 'Register',
        //         'status'   => 'error',
        //         'code_reg' => $request->code_reg
        //     ]);
        // }
    }

    public function RegisterSuccess(Request $request)
    {
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

    public function ListRegister()
    {
        $url = URL::current();
        if (strpos($url,'register') !== false)
            $pos = 'Register/All';

        $all = Registration::all();

        return view("register/registerall")->with([
            'pos' => $pos,
            'data' => $all
        ]);
    }

    public function codeAutoRegis($a)
    {
        if ($a > 0) {
            $nilCode = substr($a[0],1);
            $code = (int) $nilCode;
            $code = $a + 1;
            $codeAuto = "CODEREG".str_pad($code, 3, "0", STR_PAD_LEFT);
        } else {
            $codeAuto = "CODEREG001";
        }
        return $codeAuto;
    }
    
    public function checkStatus()
    {
        $url = URL::current();
        if (strpos($url,'checkstatus') !== false)
            $pos = 'CheckStatus';
        
        return view('checkstatus')->with([
            'pos' => $pos,
        ]);
    }
    
    public function check(Request $request)
    {
        if ($request->ajax()){
            $output = "";

            $dataCheck = Registration::where('id_reg',$request->checkid)->get();
            if ($dataCheck){
                foreach ($dataCheck as $row){
                    $output .= "<table class='table table-hover'>";
                    $output .= "<thead><tr>";
                    $output .= "<th>Status</th><th>#ID Registrasi</th><th>Nama</th><th>Email</th><th>Phone</th><th>Tipe</th>";
                    if (!empty($row->organization)) $output .= "<th>Organisasi/Kantor</th>";
                    if (!empty($row->campus)) $output .= "<th>Kampus</th>";
                    if (!empty($row->nim)) $output .= "<th>Nim</th>";
                    if (!empty($row->desc_ta)) $output .= "<th>Deskripsi TA</th>";
                    if (!empty($row->desc_method)) $output .= "<th>Deskripsi Method</th>";
                    if (!empty($row->desc_apps)) $output .= "<th>Deskripsi Aplikasi</th>";
                    $output .= "</tr></thead>";
                    $output .= "<tbody><tr>";
                    $output .= "<td><a class='btn btn-info'><i class='fa fa-check'></i> terdaftar</a></td><td>$row->id_reg</td><td>$row->name</td><td>$row->email</td><td>$row->phone</td><td>$row->type_ta</td>";
                    if (!empty($row->organization)) $output .= "<td>$row->organization</td>";
                    if (!empty($row->campus)) $output .= "<td>$row->campus</td>";
                    if (!empty($row->nim)) $output .= "<td>$row->nim</td>";
                    if (!empty($row->desc_ta)) $output .= "<td>$row->desc_ta</td>";
                    if (!empty($row->desc_method)) $output .= "<td>$row->desc_method</td>";
                    if (!empty($row->desc_apps)) $output .= "<td>$row->desc_apps</td>";
                    $output .= "</tr></tbody>";
                    $output .= "</table>";
                }
                return Response($output);
            }
        }
    }

    public function faq()
    {
        $url = URL::current();
        if (strpos($url,'faq') !== false)
            $pos = 'Faq';
        
        return view("faq")->with([
            'pos' => $pos
        ]);
    }

}
