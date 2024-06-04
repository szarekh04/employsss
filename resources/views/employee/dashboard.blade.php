@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <h3 align="center" class="mt-5">EMPLOYEE TABLE</h3>

        <div class="row">
        <a href="{{url('employee/create')}}" class="btn btn-primary">ADD</a>    
            <div class= "card-body">
                <table class= "table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Zip</th>
                            <th>Age</th>
                            <th>BirthDate</th>
                            <th>Date Hired</th>
                            <th>Department</th>
                            <th>Division</th>
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach ($employment as $identify)
                        <tr>
                            <td>{{$identify->id}}</td>
                            <td>{{$identify->firstname}}</td>
                            <td>{{$identify->middlename}}</td>
                            <td>{{$identify->lastname}}</td>
                            <td>{{$identify->address}}</td>
                            <td>{{$identify->country}}</td>
                            <td>{{$identify->zip}}</td>
                            <td>{{$identify->age}}</td>
                            <td>{{$identify->birth}}</td>
                            <td>{{$identify->DOB}}</td>
                            <td>{{$identify->dept}}</td>
                            <td>{{$identify->division}}</td>
                            <td>
                            <a href="{{url('employee/'.$identify->id.'/edit')}}" class="btn btn-success">EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>

@endpush