<?php

namespace App\Http\Controllers;
use App\Models\Edukasi;
use App\Models\Pengalaman;
use Illuminate\http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class EduController extends Controller
{
    public function showEdukasi()
    {
        return view('edukasis.index');
    }

    public function index(): View
    {
        $edukasis = Edukasi::all(); 
        return view('edukasis.index', ['edukasis' => $edukasis ]);   
     }

     public function create(): View
     {
         return view('edukasis.create');
     }
 
     public function store (Request $request)
     {
         $this->validate($request, [
             'sch' => 'required',
             'jur' => 'required',
             'year' => 'required',   
             ]);
 
     $data=Edukasi::create([
         'sekolah' => $request->sch,
         'jurusan' => $request->jur,
         'tahun' => $request->year,
         ]);
 
     return redirect()->route('eduindex')
     ->with(['success' => 'Data Berhasil Disimpan!']);
     }
 
     public function show(string $id): View
     {
         //get post by ID
         $edukasi = Edukasi::findOrFail($id);
         //render view with post
         return view('edukasis.show', compact('edukasi'));
     }
 
     public function edit(string $id): View
     {
         $edukasi = Edukasi::findOrFail($id);
         return view('edukasis.edit', compact('edukasi'));
     }
     
 
     public function update(Request $request, $id): RedirectResponse
     {
         $this->validate($request, [
             'sch' => 'required',
             'jur' => 'required',
             'year' => 'required',  
         ]);
 
         $edukasi = Edukasi::findOrFail($id);
 
             $edukasi->update([
                 'sekolah' => $request->sch,
                 'jurusan' => $request->jur,
                 'tahun' => $request->year,
             ]);
         
         return redirect()->route('eduindex')
         ->with(['success' => 'Data Berhasil Diubah!']);
     }
 
     public function destroy($id): RedirectResponse
     {
         $edukasi = Edukasi::findOrFail($id);
         Storage::delete('public/posts/'. $edukasi->image);
         $edukasi->delete();
         
         return redirect()->route('eduindex')
         ->with(['success' => 'Data Berhasil Dihapus!']);
     }
 
}
