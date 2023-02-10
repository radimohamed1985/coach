@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Add New Coach</h1>
    <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
       @csrf
        <div class="mb-3">

        <label for="name" class="form-label">Coach Name</label>
        <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">

        <label for="name" class="form-label">Coach City</label>
        <input type="text" name="city" class="form-control">
        </div>
        <div class="mb-3">

            <label for="image" class="form-label">Coach City</label>
            <input type="file" name="image" class="form-control">
            </div>
        <div class="mb-3">

        <label for="name" class="form-label">Sport </label>
<select name="sport_id" id="" class="form-select">
    <option value="0" class="text-center">-- Select Coach Sport ---</option>
    @foreach ($sports as $sport)

    <option value="{{$sport->id}}">{{$sport->sportname}}</option>

    @endforeach
    </select>        
</div>
        <div class="mb-3">
        <input type='submit'  class="form-control btn-outline-danger" value="Add Coach">
        </div>

    </form>
</div>
    
@endsection