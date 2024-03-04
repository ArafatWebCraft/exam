@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container mt-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Replace the dummy data with actual data from your database -->
                                @foreach ($employee as $employees)
                                <tr>
                                    <td>{{$employees->employee_id}}</td>
                                    <td>{{$employees->name}}</td>
                                    <td>{{$employees->phone}}</td>
                                    <td>{{$employees->eamil}}</td>
                                    <td>{{$employees->address}}</td>
                                    <td>{{$employees->salary}}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-danger"><a
                                                href="{{route('employee.edit',$employees->id)}}">Edit</a></button>
                                        <button class="btn btn-blue"><a
                                                href="{{ route('employee.delete', $employees->id) }}">Delete</a></button>

                                    </td>
                                </tr>
                                @endforeach
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>




                </div>


            </div>
        </div>
    </div>
</div>
</div>
@endsection