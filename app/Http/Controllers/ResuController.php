<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use App\Models\Edukasi;
use App\Models\Pengalaman;
use App\Models\Skill;
class ResuController extends Controller
{
    public function index() {
        $edukasi = Edukasi::latest()->get();
        $pengalaman = Pengalaman::latest()->get();
        $skill = Skill::latest()->get();
        $sertifikat = Sertifikat::latest()->get();

        return view('welcome', compact('edukasi','pengalaman','skill','sertifikat'));
    }
}
