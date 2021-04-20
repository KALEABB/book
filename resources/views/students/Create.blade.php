@extends('students.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>

    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ther were problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>                                                                                                                                                
    </div>
@endif

<form action="{{route('students.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName: </strong>
                <input type="text" name="studname" class="form-control" placeholder="studname">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grade: </strong>
                <input type="text" name="course" class="form-control" placeholder="grade">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student ID: </strong>
                <input type="text" name="fee" class="form-control" placeholder="fee">
            </div>
        </div>
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title: </strong>
                <input type="text" name="booktitle" class="form-control" placeholder="booktitle">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Auther: </strong>
                <input type="text" name="bookauther" class="form-control" placeholder="bookauther">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Catagoriy: </strong>
                <input type="text" name="bookcatagoriy" class="form-control" placeholder="bookcatagoriy">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Borrowingdate: </strong>
                <input type="text" name="bookborrowingdate" class="form-control" placeholder="bookborrowingdate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Returneddate : </strong>
                <input type="text" name="bookteturneddate" class="form-control" placeholder="bookteturneddate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
