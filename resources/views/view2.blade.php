@extends('template')

@section('content')
    <br><br><br>
    <div class="container w-50 mx-auto">
        {{-- <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">Last name</label>
              </div>
            </div>
          </div> --}}
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="emloyeeNoText">Employee No.</label>
                    <input type="text" id="emloyeeNoText" class="form-control" value="{{ $employeeNo }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="emloyeeNameText">Employee Name</label>
                    <input type="text" id="emloyeeNameText" class="form-control" value="{{ $employeeName }}" readonly />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="employeePosText">Position</label>
                    <input type="text" id="employeePosText" class="form-control" value="{{ $employeePos }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="grossPayText">Gross Pay</label>
                    <input type="text" id="grossPayText" class="form-control" value="{{ $grossPay }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="deductionsText">Deductions</label>
                    <input type="text" id="deductionsText" class="form-control" value="{{ $deductions }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="withholingText">Withholding Tax</label>
                    <input type="text" id="deductionsText" class="form-control" value="{{ $tax }}" readonly />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="netText">Net Pay</label>
                    <input type="text" id="netText" class="form-control" value="{{ $netPay }}" readonly />
                </div>
            </div>
        </div>

    </div>
@endsection
