@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Edit Information</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                 
            @if (session('status'))
                <div class= "alert alert-success">{{session('status')}}</div>
            @endif
            <div class="form-area">
                <form method="POST" action="{{url('employee/'.$employment->id.'/edit')}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{($employment->firstname)}}">
                            @error('firstname')<span class="text-danger">{{$message}} @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Employee Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="{{($employment->middlename)}}">
                            @error('middlename')<span class="text-danger">{{$message}} @enderror
                        </div><div class="col-md-6">
                            <label>Employee Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{($employment->lastname)}}">
                            @error('lastname')<span class="text-danger">{{$message}} @enderror
                        </div><div class="col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{($employment->address)}}">
                            @error('address')<span class="text-danger">{{$message}} @enderror
                        </div><div class="col-md-6">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country" value="{{($employment->country)}}">
                            @error('country')<span class="text-danger">{{$message}} @enderror
                        </div><div class="col-md-6">
                            <label>Zip</label>
                            <input type="text" class="form-control" name="zip" value="{{($employment->zip)}}">
                            @error('zip')<span class="text-danger">{{$message}} @enderror
                        </div><div class="col-md-6">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" value="{{($employment->age)}}">
                            @error('age')<span class="text-danger">{{$message}} @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label>BirthDate</label>
                            <input type="date" class="form-control" name="birth" value="{{($employment->birth)}}">
                            @error('birth')<span class="text-danger">{{$message}} @enderror

                        </div>
                        <div class="col-md-6">
                            <label>Date Hired</label>
                            <input type="date" class="form-control" name="DOB" value="{{($employment->DOB)}}">
                            @error('DOB')<span class="text-danger">{{$message}} @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Department</label>
                            <input type="text" class="form-control" name="dept" value="{{($employment->dept)}}">
                            @error('dept')<span class="text-danger">{{$message}} @enderror

                        </div>
                        <div class="col-md-12">
                            <label>Division</label>
                            <input type="text" class="form-control" name="division" value="{{($employment->division)}}">
                            @error('division')<span class="text-danger">{{$message}} @enderror

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>

                    </div>
                    <div class="row">
                    <a href="employee.index">
                        <div class="col-md-6 mt-2">
                            <input type="submit" class="btn btn-danger" value="Back">
                    </a>
                     </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
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