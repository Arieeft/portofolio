<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function showSkill()
    {
        return view('skills.index');
    }

    public function index(): View
    {
        //get posts
        $skills = Skill::all(); 
        //render view with posts
        return view('skills.index', ['skills' => $skills ]);   
     }
    
    public function create(): View
    {
        return view('skills.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'ski' => 'required',
            ]);

    $data=Skill::create([
        'skill' => $request->ski,
        ]);

    return redirect()->route('skindex')
    ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $skill = Skill::findOrFail($id);
        //render view with post
        return view('skills.show', compact('skill'));
    }

    public function edit(string $id): View
    {
        $skill = Skill::findOrFail($id);
        return view('skills.edit', compact('skill'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'ski' => 'required',
        ]);

        $skill = Skill::findOrFail($id);

            $skill->update([
                'skill' => $request->ski,
            ]);
        
        return redirect()->route('skindex')
        ->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $skill = Skill::findOrFail($id);
        Storage::delete('public/posts/'. $skill->image);
        $skill->delete();
        
        return redirect()->route('skindex')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
