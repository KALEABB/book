@extends('students.layout')
@extends('layouts.app')
@section('content')
<div class="pull-left">


   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Laravel -->
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <h4>Home</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create')}}">Create New Student</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

   


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Student ID</th>
        <th>Book Title</th>
        <th>Book Auther</th>
        <th>Book Catagoriy</th>
        <th>Book Borrowing Date</th>
        <th>Book Returne Ddate</th>
        
     
        <th width="280px">Action</th>
    </tr>

    @foreach($students as $student)

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
            <form action="{{route('students.destroy',$student->id)}}" method="POST">
        
            <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>

            @csrf

            @method('DELETE')
                                                                                                                                                                          
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

