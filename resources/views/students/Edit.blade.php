@extends('students.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())

    <div class="alert alert-danger">
    
        <strong>Whooops!</strong>There were some problems with your input,<br><br>

        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('students.update',$student->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudName:</strong>

                <input type="text" name="studname" value="{{$student->studname}}"
                class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grade:</strong>

                <input type="text" name="course" value="{{$student->course}}"
                class="form-control" placeholder="Course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student ID:</strong>

                <input type="text" name="fee" value="{{$student->fee}}"
                class="form-control" placeholder="Fee">
            </div>
        </div>
          
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title: </strong>
                <input type="text" name="booktitle" value="{{$student->booktitle}}" class="form-control" placeholder="booktitle">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Auther: </strong>
                <input type="text" name="bookauther" value="{{$student->bookauther}}" class="form-control" placeholder="bookauther">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Catagoriy: </strong>
                <input type="text" name="bookcatagoriy" value="{{$student->bookcatagoriy}}" class="form-control" placeholder="bookcatagoriy">
            </div>
        </div>
                                                                                                                                                  
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Borrowingdate: </strong>
                <input type="text" name="bookborrowingdate" value="{{$student->bookborrowingdate}}" class="form-control" placeholder="bookborrowingdate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Returneddate : </strong>
                <input type="text" name="bookteturneddate" value="{{$student->bookteturneddate}}" class="form-control" placeholder="bookteturneddate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                                                                                                                   

               <button type="submit" class="btn btn-primary">submit</button>
               
            </div>
        </div>
    </form>
@endsection