<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\MedicalController;
use Illuminate\Http\Request;
use App\Models\Student_medical_profile;
class MedicalController extends Controller
{
    public function mProfile()
    {
    	return view('admin.medical.mProfile',[
    		'pagetitle' => 'mProfile',
    		'title' => 'mProfile | Admin'
    	]);
    }
    public function mHistory()
    {
    	return view('admin.medical.mHistory',[
    		'pagetitle' => 'mHistory',
    		'title' => 'mHistory | Admin'
    	]);
    }
     public function mProfile_store()
    {
        return view('admin.medical.mProfile',[
            'pagetitle' => 'mProfile',
            'title' => 'mProfile | Admin'
        ]);
    }
}
