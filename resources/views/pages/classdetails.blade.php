@extends('layouts.master')

@section('top')
    <i class="fas fa-plus  mr-4 cursor hf-w-coler" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href={{ route('workcreate', ['cid'=>$classes->ClassID]) }}>เพิ่มงาน</a></li>
        </div>    
@endsection

@section('content')

<div class="container">
        <div class="card-header bg-main p-5">
            <h5 class="m-0 fonts">{{ $classes['ClassName']}}</h5>
            <p class="mb-0 mt-2 fonts-D">
                กลุ่ม {{ $classes['ClassGroup'] }}
            </p>
            
        </div>
        
        @foreach($classWorks as $row)
        <a href="{{ route('classquiz', ['id'=>$row->WorkID, 'cid'=>$row->ClassID]) }}">
            <div class="card cursor mt-4">
                <div class="card-body">
                    <h5 class="card-title fonts">Week {{ $row->WorkWeek}} : {{ $row->WorkDescription }}</h5>
                    <p class="card-text fonts-D">ประเภท : {{ $row->WorkCategory }}</p>
                    <p class="card-text fonts-D date-limit">{{ $row->created_at }}</p>
                    <div align="right">
                        <form  method="get" class="delete_form" action="{{ action('ClassesController@destroy',['id'=>$row->WorkID])  }}">
                            {{csrf_field()}}

                            <button type="submit" class="btn btn-primary">Edit</button>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </a>

        
        
        @endforeach

</div>

@endsection