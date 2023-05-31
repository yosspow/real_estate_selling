<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Batiment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class batimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $data = DB::table('batiments')
        ->join('images', 'batiments.id', '=', 'images.batiment_id') // joining the contacts table , where user_id and contact_user_id are same
        ->select('batiments.*', 'images.path')
        ->groupBy('batiments.id')
        ->get();
        return view('admin.batiment.list',['batiments'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batiment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            'prix' => 'required',
            'metrage'=>'required|int',
            'ville'=>'required|max:10',
            'lieu'=>'required',
            'description'=>'required',

            ]);

    ##dir hna methode dyl insert wdyl wtkhdam fktar mn image w7da
    // $extension = $request->file('image')->getClientOriginalExtension();

    // $photo = $request->file('image')->getClientOriginalName();



  if(count(Arr::wrap($request->file('image')) )>0){





   $newbatiment = Batiment::create([
    'prix' => $request->input('prix'),
    'metrage'=>$request->input('metrage'),
    'status'=>$request->input('status'),
    'ville'=>$request->input('ville'),
    'lieu'=>$request->input('lieu'),
    'description'=>$request->input('description'),

    ]);


    foreach($request->file('image') as $image ){
     $img =   $image->store('img/','public');

    $newbatiment->images()->create([
        'path' => $img
    ]);

}
}else{
return back()->withErrors([
    'image' => 'Veuillez choisir une image'
])->withInput();
}

//  $ex= Str::afterLast($photo, '.');
//     $name = Str::before($photo,'.'.$extension);
//     dd($extension);
    return to_route('batiment.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_to_best(Batiment $batiment)
    {
        if($batiment['best'] == '1') {
            $batiment['best'] = '0';
            $batiment->save();
            return back()->with([
                'success'=> 'Ajouté avec succès à la liste des meilleurs bâtiments'
            ]);
        }
   $batiment['best'] = '1';
   $batiment->save();
   return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Batiment $batiment)
    {
    return view('admin.batiment.edit',['batiment'=>$batiment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batiment $batiment)
    {
        $data = $request->validate([
            'prix' => 'required',
            'metrage'=>'required|int',
            'lieu'=>'required',
            'description'=>'required',

            ]);

            $newbatiment = Batiment::where('id',$batiment['id'])->update([
                'prix' => $request->input('prix'),
                'metrage'=>$request->input('metrage'),
                'status'=>$request->input('status'),
                'lieu'=>$request->input('lieu'),
                'description'=>$request->input('description'),

                ]);
        return to_route('batiment.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batiment $batiment)
    {


    $data = $batiment->images()->get()->toarray();
    foreach($data as $item){
        $image_path = storage_path('/app/public/'.$item['path']);
        unlink($image_path);
    }

    $batiment->delete();
        return to_route('batiment.list');
    }
}
