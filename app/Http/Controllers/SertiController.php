<?php

namespace App\Http\Controllers;
use App\Models\Sertifikat;
use Illuminate\http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SertiController extends Controller
{
    public function showSertifikat()
    {
        return view('sertifikats.index');
    }

    public function index(): View
    {
        //get posts
        $sertifikats = Sertifikat::all(); 
        //dd($pengalamans);

        //render view with posts
        return view('sertifikats.index', ['sertifikats' => $sertifikats ]);   
     }
    
    public function create(): View
    {
        return view('sertifikats.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'serti' => 'required',
            ]);

    $data=Sertifikat::create([
        'sertifikat' => $request->serti,
        ]);

    return redirect()->route('serindex')
    ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $sertifikat = Sertifikat::findOrFail($id);
        //render view with post
        return view('sertifikats.show', compact('sertifikat'));
    }

    public function edit(string $id): View
    {
        $sertifikat = Sertifikat::findOrFail($id);
        return view('sertifikats.edit', compact('sertifikat'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'serti' => 'required',
        ]);

        $sertifikat = Sertifikat::findOrFail($id);

            $sertifikat->update([
                'sertifikat' => $request->serti,
            ]);
        
        return redirect()->route('serindex')
        ->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $sertifikat = Sertifikat::findOrFail($id);
        Storage::delete('public/posts/'. $sertifikat->image);
        $sertifikat->delete();
        
        return redirect()->route('serindex')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
