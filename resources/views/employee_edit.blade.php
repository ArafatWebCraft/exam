@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Employee') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container mt-5">
                        <form action="{{route('employee.update',$employee->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="employeeId">Employee ID</label>
                                    <input type="text" value="{{ $employee->employee_id }}" name="employee_id"
                                        class="form-control" id="employeeId" placeholder="Enter Employee ID" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $employee->name }}" name="name" class="form-control"
                                        id="name" placeholder="Enter Name" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" value="{{ $employee->phone }}" class="form-control"
                                        id="phone" placeholder="Enter Phone" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $employee->eamil }}" class="form-control"
                                        id="email" placeholder="Enter Email" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" value="{{ $employee->address}}"
                                        class="form-control" id="address" placeholder="Enter Address" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="salary">Salary</label>
                                    <input type="text" name="salary" value="{{ $employee->salary }}"
                                        class="form-control" id="salary" placeholder="Enter Salary" required>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
@endsection