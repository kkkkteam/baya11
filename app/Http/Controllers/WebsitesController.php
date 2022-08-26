<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Config;


class WebsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function goToLoginPage(Request $request)
    {   
        
        $m = config('master.root');
        // $m = env('MASTER_HERE_ID');
        // $m = config('view.paths');
        // dd($m);
        $master = User::findMemberByID($m);

        $masterName = $master->name;

        $list = User::pluck('name')->all();

        $listArray = array();

        foreach($list as $a){
            $listArray[] = array(
                'id' => $a,
                'text'=> $a,
            );
        }

        return view('welcome', [
            'name' => 'Kay Ng',
            'happy' => config('app.key'), 
            'master' => $masterName,
            'list' => $listArray,
        ]);

    }

    public function getNameListApi(Request $request){

        $serach = $request->search;

        if ($search == ''){
            $names = User::orderby('name')
                    ->select('id','name')
                    ->limit(5)
                    ->get();
        }else{
            $names = User::orderby('name')
            ->select('id','name')
            ->where('name', 'LIKE', '%' . $search . '%')
            ->limit(5)
            ->get();
        }

        $response = array();
        foreach($names as $n){
            $response[] = array(
                'id' => $n->id,
                'text' => $n->name,
            );
        }
        // dd($response);
        return response()->json($response);

    }


    public function index()
    {
        //
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
        //
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
}
