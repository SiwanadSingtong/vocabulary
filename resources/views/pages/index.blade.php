@extends('layouts.master')


@section('top')
    <i class="fas fa-plus  mr-4 cursor hf-w-coler" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">เข้าร่วมชั้นเรียน</a></li>
            <li><a class="dropdown-item" href="classcreate">สร้างชั้นเรียน</a></li>
        </div>    
@endsection

@section('content')

<div class="container">
    <div class="row">
        @foreach($classes as $row)
        <div class="col-md-4 res-card ex1">
                <a href="{{ route('classdetails', ['id'=>$row['ClassID']]) }}">
                    <div class="card cursor">
                        <div class="card-header bg-main p-5">
                            <h5 class="m-0 fonts">{{ $row['ClassName'] }}</h5>
                            <p class="mb-0 mt-2 fonts-D">กลุ่ม {{ $row['ClassGroup'] }}</p>
                        </div>
                        <div class="card-body hf-b-coler ex2">
                            <h5 class="card-title">{{ $row['ClassName'] }}</h5>
                            <p class="card-text text-limit">{{ $row['ClassDetails'] }}</p>
                        </div>
                    </div>
                </a>
        </div>
        @endforeach
    </div>
</div>

@endsection