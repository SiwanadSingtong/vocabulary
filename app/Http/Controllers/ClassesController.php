<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Quiz;
use App\Work;
use App\Vocab;
use DB;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $classes = Classroom::where('ClassID',$id)->first();
        $classWorks = DB::table('Class')
        ->join('Work', 'Work.ClassID', '=', 'Class.ClassID')
        ->select('Class.ClassID', 'Class.ClassName', 'Class.ClassGroup', 'Work.WorkID', 'WorkWeek', 'WorkDescription', 'WorkCategory', 'Work.created_at')
        ->where('Class.ClassID', '=', $id)
        ->get();
        return view('pages.classdetails', compact('classes'), compact('classWorks'));
    }

    /*public function class($id)
    {
        $class = Classroom::Where('ClassID',$id)->first();
        return view('classdetails', ['ClassID' => $ClassID]);
    }
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.classcreate');
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
            'ClassName' => 'required',
            'ClassGroup',
            'ClassDetails' 
        ]);

        $class = new Classroom([
            'ClassName' => $request->get('ClassName'),
            'ClassGroup' => $request->get('ClassGroup'),
            'ClassDetails' => $request->get('ClassDetails')
        ]);
        $class->save();
        return redirect('classcreate')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        dd($id);
    }
}
