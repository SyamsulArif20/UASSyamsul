<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Driver;
use App\Models\Branch;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['customer', 'package', 'driver', 'branch'])->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $customers = Customer::all();
        $packages = Package::all();
        $drivers = Driver::all();
        $branches = Branch::all();
        return view('transactions.create', compact('customers', 'packages', 'drivers', 'branches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'package_id' => 'required|exists:packages,id',
            'driver_id' => 'required|exists:drivers,id',
            'branch_id' => 'required|exists:branches,id',
        ]);

        Transaction::create($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }

    public function edit(Transaction $transaction)
    {
        $customers = Customer::all();
        $packages = Package::all();
        $drivers = Driver::all();
        $branches = Branch::all();
        return view('transactions.edit', compact('transaction', 'customers', 'packages', 'drivers', 'branches'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'package_id' => 'required|exists:packages,id',
            'driver_id' => 'required|exists:drivers,id',
            'branch_id' => 'required|exists:branches,id',
        ]);

        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}