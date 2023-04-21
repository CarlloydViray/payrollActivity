@extends('template')

@section('content')
    <br><br><br>
    <div class="container w-50 mx-auto">
        <form action="/view2" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="emloyeeNoText">Employee No.</label>
                        <input type="text" id="emloyeeNoText" class="form-control" name="employeeNo"
                            value="{{ old('employeeNo') }}" />
                        @error('employeeNo')
                            <span class="mb-3" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="emloyeeNameText">Employee Name</label>
                        <input type="text" id="emloyeeNameText" class="form-control" name="employeeName"
                            value="{{ old('employeeName') }}" />
                        @error('employeeName')
                            <span class="mb-3" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="positionSelect">Position</label>
                        <select name="employeePos" id="positionSelect" class="form-select">
                            <option value="">Select Position</option>
                            <option value="Instructor I">Instructor I</option>
                            <option value="Instructor II">Instructor II</option>
                            <option value="Instructor III">Instructor III</option>
                            <option value="Associate Professor I">Associate Professor I</option>
                            <option value="Associate Professor II">Associate Professor II</option>
                            <option value="Associate Professor III">Associate Professor III</option>
                        </select>
                        @error('employeePos')
                            <span class="mb-3" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="hoursText">Hours Rendered</label>
                        <input type="text" id="hoursText" class="form-control" name="hours" />
                    </div>
                    @error('hours')
                        <span class="mb-3" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline" for="deductionsCheck">
                        <label class="form-label" for="deductionsCheck">Deductions</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="deductions[]"
                                value="256">
                            <label class="form-check-label">Pagibig</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="deductions[]"
                                value="550">
                            <label class="form-check-label">GSIS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="deductions[]"
                                value="150">
                            <label class="form-check-label">PhilHealth</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mb-4">
                <button type="submit" class="btn btn-primary btn-block mb-4">COMPUTE PAYROLL</button>
            </div>

        </form>
    </div>
@endsection
