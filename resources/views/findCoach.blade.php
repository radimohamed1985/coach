@extends('layouts.app')
@section('content')
<div class="container">
    <form action="" method="get">
        @csrf
        <div class="mb-3">
    
        <label for="search" class="form-label">Choose Sport </label>
        <select name="serach" id="search" class="form-select serach">
            <option value="0">find Your Sport Coach</option>
            @foreach ($sports as $sport)
        
            <option value="{{$sport->id}}" id='sport_id'>{{$sport->sportname}}</option>
        
            @endforeach
            </select>  
        </div>
    </form>
    <div class="showcoaches">
        <p class="coachname" ></p>
    </div>
</div>

   
@endsection