<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payroll extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                'employeeNo' => 'required',
                'employeeName' => 'required|max:100',
                'employeePos' => 'nullable|required',
                'hours' => 'required|numeric'
            ]
        );
        $employeePos = $request->input('employeePos');
        if ($employeePos == 'Instructor I') {
            $payRate = 890.75;
        } else if ($employeePos == 'Instructor II') {
            $payRate = 940.50;
        } else if ($employeePos == 'Instructor III') {
            $payRate = 1200.75;
        } else if ($employeePos == 'Associate Professor I') {
            $payRate = 1700.25;
        } else if ($employeePos == 'Associate Professor II') {
            $payRate = 5000.75;
        } else if ($employeePos == 'Associate Professor III') {
            $payRate = 7500.50;
        }

        $hours = $request->input('hours');

        $grossPay = $hours * $payRate;
        $tax = 0;

        if ($grossPay < 10000) {
            $tax = $grossPay * 0.05;
        } else if ($grossPay > 10000 && $grossPay < 30000) {
            $tax = (($grossPay - 10000) * 0.10) + 500;
        } else if ($grossPay > 30000 && $grossPay < 70000) {
            $tax = (($grossPay - 30000) * 0.15) + 2500;
        } else if ($grossPay > 70000 && $grossPay < 140000) {
            $tax = (($grossPay - 70000) * 0.20) + 8500;
        } else if ($grossPay > 140000 && $grossPay < 25000) {
            $tax = (($grossPay - 140000) * 0.25) + 22500;
        } else if ($grossPay > 250000 && $grossPay < 50000) {
            $tax = (($grossPay - 250000) * 0.30) + 50000;
        } else if ($grossPay > 500000) {
            $tax = (($grossPay - 500000) * 0.34) + 125000;
        }

        $deductions = $request->input('deductions');

        $numericValues = array_map('intval', $deductions);

        $deductionsSum = array_sum($numericValues);

        $netPay = $grossPay - ($deductionsSum + $tax);


        return view('/view2', ['employeeNo' => $request->input('employeeNo'), 'employeeName' => $request->input('employeeName'), 'employeePos' => $request->input('employeePos'), 'grossPay' => $grossPay, 'deductions' => $deductionsSum, 'tax' => $tax, 'netPay' => $netPay]);
    }
}
