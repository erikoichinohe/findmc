<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mc;

class McController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Mc::query();
        //全件取得
        //$mcs = $query->get();
        //ページネーション
        $mcs = $query->orderBy('id','desc')->paginate(10);
        return view('mcs.index')->with('mcs',$mcs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mc = Mc::find($id);
        
        if(file_exists( public_path() . '/images/mcs/' . $id . '/mcimage01.jpg')) {
            $photo = '/images/mcs/'.$id.'/mcimage01.jpg';
        } else {
            $photo = '/images/noimage.png';
        }     
        
        return view('mcs.show', [
            'mc' => $mc,
            'photo' => $photo
        ]);
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function photo($id)
 {
    if(file_exists( public_path() . '/images/mcs/' . $id . '/mcimage01.jpg')) {
        return '/images/mcs/'.$id.'/mcimage01.jpg';
    } else {
        return '/images/noimage.png';
    }     
 }
}
