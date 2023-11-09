@extends('layouts.master')

@section('content')

<div class="container fonts mt-5">
    <div class="row">
        <div class="col-md-6">
            @if(count($errors) > 0)
                    <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                    </div>
               @endif

               @if(\Session::has('success'))
               <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
               </div>
               @endif

            <div class="d-flex align-items-center mb-5">
                <i class="far fa-list-alt mr-3" style="font-size: 2.5rem;"></i>
                <div>
                    <div>Week {{ $work['WorkWeek'] }} : {{ $work->WorkDescription }}</div>
                    <div>12/02/2020</div>
                </div>
            </div>

            <form method="post" action="{{ url('quizstore', ['wid'=>$work->WorkID]) }}">
                {{csrf_field()}}
                <div>
                    <p>
                        <span>คำศัพท์ : </span> 
                        <input type="text" name="Vocab" id="Vocab" placeholder="กำหนดคำศัพท์"> </>
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input" id="Choice_1"
                                        name="Choice_1">
                                    <label class="custom-control-label" for="Choice_1">
                                        <input type="text" name="Choice_1" id="Choice_1" placeholder="ตัวเลือกที่ 1"> </>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input" id="Choice_2"
                                        name="Choice_2">
                                    <label class="custom-control-label" for="Choice_2">
                                        <input type="text" name="Choice_2" id="Choice_2" placeholder="ตัวเลือกที่ 2"> </>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input" id="Choice_3"
                                        name="Choice_3">
                                    <label class="custom-control-label" for="Choice_3">
                                        <input type="text" name="Choice_3" id="Choice_3" placeholder="ตัวเลือกที่ 3"> </>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input" id="Choice_4"
                                        name="Choice_4">
                                    <label class="custom-control-label" for="Choice_4">
                                        <input type="text" name="Choice_4" id="Choice_4" placeholder="ตัวเลือกที่ 4"> </>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            

                <div class="form-group">
                    <a href="{{ route('classdetails', ['id'=>$work['ClassID']]) }}"> <button type="button" class="btn btn-outline-danger mt-4 mb-4">ยกเลิก</button> </a>
                    <input type="submit" class="btn btn-outline-success mt-4 mb-4" value="เพิ่มคำศัพท์" />
                </div>

            </form>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fonts">Week {{ $work->WorkWeek }} : {{ $work->WorkDescription }}</h5>
                    <p class="card-text fonts-D">12/2/2020
                    </p>

                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex mt-3 fonts-B">
                                คำศัพท์
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mt-3 fonts-B">
                                เฉลย
                            </div>
                        </div>
                    </div>

                    <hr>
                    @foreach( $quiz as $row)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                {{ $row->Vocab  }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mt-3">
                                {{ $row->Answer  }}
                            </div>
                        </div>
                    </div>
                    @endforeach

                    

                </div>

            </div>
        </div>
    </div>

</div>

@endsection()