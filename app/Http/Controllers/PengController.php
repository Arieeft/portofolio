<?php

namespace App\Http\Controllers;
use App\Models\Pengalaman;
use Illuminate\http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengController extends Controller
{
    public function showPengalaman()
    {
        return view('pengalamans.index');
    }

    public function index()
    { 

        if (Auth::check()) {
        $pengalamans = Pengalaman::all(); 
        return view('pengalamans.index', ['pengalamans' => $pengalamans ]);
        }

        return redirect()->route('login');  
     }
    
    public function create(): View
    {
        return view('pengalamans.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'comp' => 'required',
            'job' => 'required',
            'year' => 'required',            
            'desc' => 'required',
            ]);

    $data=Pengalaman::create([
        'perusahaan' => $request->comp,
        'pekerjaan' => $request->job,
        'tahun' => $request->year,
        'deskripsi' => $request->desc,
        ]);

    return redirect()->route('pengindex')
    ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $pengalaman = Pengalaman::findOrFail($id);
        //render view with post
        return view('pengalamans.show', compact('pengalaman'));
    }

    public function edit(string $id): View
    {
        $pengalaman = Pengalaman::findOrFail($id);
        return view('pengalamans.edit', compact('pengalaman'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'comp' => 'required',
            'job' => 'required',
            'year' => 'required',            
            'desc' => 'required',
        ]);

        $pengalaman = Pengalaman::findOrFail($id);

            $pengalaman->update([
                'perusahaan' => $request->comp,
                'pekerjaan' => $request->job,
                'tahun' => $request->year,
                'deskripsi' => $request->desc,
            ]);
        
        return redirect()->route('pengindex')
        ->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $pengalaman = pengalaman::findOrFail($id);
        Storage::delete('public/posts/'. $pengalaman->image);
        $pengalaman->delete();
        
        return redirect()->route('pengindex')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
