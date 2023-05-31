<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('user.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single(Batiment $batiment)
    {

      $imgs = $batiment->images ;
      $all = data_fill($batiment, 'images', $imgs)->toarray();

      $newlieu =  explode(' ', $all['lieu']);
      $data = data_set($all,'lieu',$newlieu);

        return view('user.property-single',['batiment'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function services()
    {

        return view('user.services');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('user.about');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function properties()
    {
        $data = DB::table('batiments')
        ->join('images', 'batiments.id', '=', 'images.batiment_id') // joining the contacts table , where user_id and contact_user_id are same
        ->select('batiments.*', 'images.path')
        ->groupBy('batiments.id')
        ->paginate(9);




       return view('user.properties', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {

       $user = User::findOrFail(auth()->user()->id);

        return view('admin.index',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    }

