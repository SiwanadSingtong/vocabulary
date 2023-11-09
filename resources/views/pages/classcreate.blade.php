@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h4>สร้างชั้นเรียน</h4>
                <br />
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
                <p>{{ \Session::get('success') }}</p>
               </div>
               @endif

                <form method="post" action="{{url('classstore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="ClassName" class="form-control" placeholder="ชื่อชั้นเรียน(ต้องระบุ)" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="ClassGroup" class="form-control" placeholder="กลุ่ม" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="ClassDetails" class="form-control" placeholder="รายละเอียด" />
                    </div>
                    <div class="form-group">
                        <a href="{{ URL::previous() }}"> <button type="button" class="btn btn-outline-danger mt-4 mb-4">ยกเลิก</button> </a>
                        <input type="submit" class="btn btn-primary" value="บันทึก" />
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection