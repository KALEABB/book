@extends('students.layout')

@section('content')
<div class="pull-left">

    <h2>Student list</h2>
</div>


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Student ID</th>
        <th>Book Title</th>
        <th>Book Auther</th>
        <th>Book Catagoriy</th>
        <th>Book Borrowing Date</th>
        <th>Book Returne Ddate</th>
        
     
        <th width="280px">Action</th>
    </tr>

    @foreach($student as $student)

    <tr>
        <td>{{++$i}}</td>
        <td>{{$student->studname}}</td>
        <td>{{$student->course}}</td>
        <td>{{$student->fee}}</td>
        <td>{{$student->booktitle}}</td>
        <td>{{$student->bookauther}}</td>
        <td>{{$student->bookcatagoriy}}</td>
        <td>{{$student->bookborrowingdate}}</td>
        <td>{{$student->bookteturneddate}}</td>
        <td> 
           
        </td>
    </tr>
    @endforeach
</table>
@endsection