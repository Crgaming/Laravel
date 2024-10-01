@extends('layouts.admin')
@section('title', 'Edit Employee')
@section('content')
<div class="container-fluid mt-5">
    <h1>Edit Employee</h1>

    <form method="POST" action="{{ route('admin.employees.update', $employee->BusinessEntityID) }}">
        @csrf
        @method('PUT')
        <!-- Include the same form fields as in your add form, but pre-filled with existing data -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="NationalIDNumber" class="form-label">National ID Number</label>
                <input type="text" class="form-control" id="NationalIDNumber" name="NationalIDNumber" value="{{ $employee->NationalIDNumber }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="LoginID" class="form-label">Login ID</label>
                <input type="text" class="form-control" id="LoginID" name="LoginID" value="{{ $employee->LoginID }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="OrganizationNode" class="form-label">Organization Node</label>
                <textarea class="form-control" id="OrganizationNode" name="OrganizationNode" required>{{ $employee->OrganizationNode }}</textarea>
            </div>
        </div>
        <!-- Add other fields similarly -->
        <button type="submit" class="btn btn-success">Update Employee</button>
    </form>
</div>
@endsection
