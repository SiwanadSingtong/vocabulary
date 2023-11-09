<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Quiz;
use App\Work;
use App\Vocab;
use DB;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.workcreate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.workcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $cid)
    {
        $this->varidate($request, [
            'WorkWeek',
            'WorkDescription',
            'WorkCategory',
            'ClassID',
        ]);

        $work = new Work([
            'WorkWeek' => $request->get('WorkWeek'),
            'WorkDescription' => $request->get('WorkDescription'),
            'WorkCategory' => $request->get('WorkCategory'),
            'ClassID' => $request->get('ClassID', $cid)
        ]);

        
        $work->save();
        return redirect('classdetails'->with('success', 'บันทึกข้อมูลเรียบร้อย'));


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
