@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h4>งาน</h4>
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

                <form method="post" action="{{url('workstore') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="number" name="ClassName" class="form-control" placeholder="งานสัปดาห์ที่" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="ClassGroup" class="form-control" placeholder="รายละเอียดงาน(ไม่บังคับ)" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="ClassDetails" class="form-control" placeholder="หมวดหมู่คำศัพท์ (เช่น ผลไม้, สัตว์)" />
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