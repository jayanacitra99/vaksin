<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\PfizerImport;
use App\Imports\AstraImport;
use App\Imports\ModernaImport;
use App\Imports\SinovacImport;
use App\Models\SinovacModel;
use App\Models\AstraModel;
use App\Models\PfizerModel;
use App\Models\ModernaModel;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->SinovacModel = new SinovacModel();
        $this->AstraModel = new AstraModel();
        $this->PfizerModel = new PfizerModel();
        $this->ModernaModel = new ModernaModel();
    }
    //
    public function index(){
        $data = [
            'sinovac'   => $this->SinovacModel->getSinovac(),
            'astra'     => $this->AstraModel->getAstra(),
            'moderna'   => $this->ModernaModel->getModerna(),
            'pfizer'    => $this->PfizerModel->getPfizer(),
        ];
        return view('home', $data);
    }

    public function importSinovac(){
        if (!$this->SinovacModel->checkSinovac()) {
            Excel::import(new SinovacImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        } else {
            $this->SinovacModel->delSinovac();
            Excel::import(new SinovacImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        }
    }

    public function importAstra(){
        if (!$this->AstraModel->checkAstra()) {
            Excel::import(new AstraImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        } else {
            $this->AstraModel->delAstra();
            Excel::import(new AstraImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        }
    }
    
    public function importModerna(){
        if (!$this->ModernaModel->checkModerna()) {
            Excel::import(new ModernaImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        } else {
            $this->ModernaModel->delModerna();
            Excel::import(new ModernaImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        }
    }

    public function importPfizer(){
        if (!$this->PfizerModel->checkPfizer()) {
            Excel::import(new PfizerImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        } else {
            $this->PfizerModel->delPfizer();
            Excel::import(new PfizerImport,Request()->file);
            $toastr = array(
                'message' => 'Upload Success!',
                'alert' => 'success'
            );
            return redirect()->route('home')->with($toastr);
        }
    }
}
