@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Employees') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container mt-5">
                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="employeeId">Employee ID</label>
                                    <input type="text" name="employee_id" class="form-control" id="employeeId"
                                        placeholder="Enter Employee ID" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter Name" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" id="phone"
                                        placeholder="Enter Phone" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Email" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Enter Address" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="salary">Salary</label>
                                    <input type="text" name="salary" class="form-control" id="salary"
                                        placeholder="Enter Salary" required>
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