<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use File;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::paginate(10);
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'tipe' => 'required',
            'twitter' => 'required',
            'telegram' => 'required',
            'gambar' => 'required'
        ]);
        //dd($request);
        $gambar = $request->file('gambar');
        $new_gambar = time().$gambar->getClientOriginalName();
        //dd($gambar);
        $post = Team::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'tipe' =>  $request->tipe,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram,
            'gambar' => $new_gambar,
        ]);

        $img = Image::make($gambar->path());
        $img->resize(250, 250)->save('public/uploads/team/250x250/'.$new_gambar);
        
        $gambar->move('public/uploads/team/', $new_gambar);
        return redirect()->back()->with('success','Team anda berhasil di tambahkan'); 
    }
    /**
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();
     
        $destinationPath = public_path('/thumbnail');
        
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
   
        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }
    **/
    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::where('id',$id)->first();
        File::delete('public/uploads/team/'.$team->gambar);
        File::delete('public/uploads/team/250x250/'.$team->gambar);
        $team->delete();
        return redirect()->back()->with('success','Team Berhasil Dihapus');
    }
}
