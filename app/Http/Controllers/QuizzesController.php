<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Quiz;
use App\Work;
use App\Vocab;
use DB;

class QuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$cid)
    {
        $work = Work::where('WorkID',$id)->first();
        $quiz = DB::table('Work')
        ->join('Vocabulary', 'Vocabulary.WorkID', '=', 'Work.WorkID')
        ->join('Choice', 'Choice.VocabularyID', '=', 'Vocabulary.VocabularyID')
        ->select('WorkWeek', 'WorkDescription','Vocab','Answer')
        ->where('Work.WorkID', '=', $id)
        ->get();
        return view('pages.quiz', compact ('work'), compact('quiz'));
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
    public function store(Request $request, $wid)
    {
        
        $this->validate($request, [
            'WorkID',
            'StudentID',
            'VocabularyID',
            'Vocab' => 'required',
            'Choice_1' => 'required',
            'Choice_2' => 'required',
            'Choice_3' => 'required',
            'Choice_4' => 'required',
            'Answer'
        ]);

        DB::beginTransaction();

        $WorkID = $request->input('WorkID');
        $StudentID = $request->input('StudentID');
        $VocabularyID = $request->input('VocabularyID');
        $Vocab = $request->input('Vocab');
        $Choice_1 = $request->input('Choice_1');
        $Choice_2 = $request->input('Choice_2');
        $Choice_3 = $request->input('Choice_3');
        $Choice_4 = $request->input('Choice_4');
        $Answer = $request->input('Answer');

        

        $vocab = new Vocab([
            'VocabularyID' => $request->get('VocabularyID'),
            'WorkID' => $request->get('WorkID', $wid),
            'StudentID' => $request->get('StudentID'),
            'Vocab' => $request->get('Vocab'),
            
        ]);
        $vocab->save();
        //dd($vocab->id);
        
        
        
       

        $quiz = new Quiz([
            'VocabularyID' => $request->get('VocabularyID', $vocab->id),
            'Choice_1' => $request->get('Choice_1'),
            'Choice_2' => $request->get('Choice_2'),
            'Choice_3' => $request->get('Choice_3'),
            'Choice_4' => $request->get('Choice_4'),
            'Answer' => $request->get('Answer')
        ]);

        $quiz->save();

        DB::commit();
        //dd($request);
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
