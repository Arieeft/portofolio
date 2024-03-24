<?php

namespace App\Http\Controllers;
use App\Models\Pengalaman;
use Illuminate\http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class PengController extends Controller
{
    public function showPengalaman()
    {
        return view('pengalamans.index');
    }

    public function index(): View
    {
        //get posts
        $pengalamans = Pengalaman::all(); 
        //dd($pengalamans);

        //render view with posts
        return view('pengalamans.index', ['pengalamans' => $pengalamans ]);   
     }
    
    public function create(): View
    {
        return view('pengalamans.create');
    }

    public function store (Request $request): RedirectResponse
    {
        $this->validate($request, [
            'perusahaan' => 'required',
            'pekerjaan' => 'required',
            'tahun' => 'required',            
            'deskripsi' => 'required',
            ]);

    $data=Pengalaman::create([
        'perusahaan' => $request->comp,
        'pekerjaan' => $request->job,
        'tahun' => $request->year,
        'deskripsi' => $request->desc,
        ]);

    return redirect()->route('pengalamans.index')
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
            'perusahaan' => 'required',
            'pekerjaan' => 'required',
            'tahun' => 'required',            
            'deskripsi' => 'required',
        ]);

        $pengalaman = Pengalaman::findOrFail($id);

            $pengalaman->update([
                'perusahaan' => $request->comp,
                'pekerjaan' => $request->job,
                'tahun' => $request->year,
                'deskripsi' => $request->desc,
            ]);
        
        return redirect()->route('pengalamans.index')
        ->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $pengalaman = pengalaman::findOrFail($id);
        Storage::delete('public/posts/'. $pengalaman->image);
        $pengalaman->delete();
        
        return redirect()->route('pengalamans.index')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
