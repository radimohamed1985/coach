@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row">
            
       @foreach ($sports as $sport)
              
                    <div class="col-3">
                        <div class="card">
                            <div class="card-title text-center">{{$sport->sportname}}</div>
                            <div class="card-body">
                                <div class="card-text">
                                    @foreach ($coaches as $coach)
                                  <p class="text-center"><a href="">{{ $coach->name}}</a>  </p>
                                    @endforeach
                </div>
                </div>
            </div>
        </div>
           
       @endforeach
    
</div>
</div>
@endsection
