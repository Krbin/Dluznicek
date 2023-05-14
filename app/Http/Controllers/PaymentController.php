<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payments.index.index', [
            'heading' => 'Home',
            'payments' => Payment::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Payment $payment)
    {
        return view('payments.show', ['payment' => $payment]);
    }

    public function store(Request $request)
    {

        $formFields = request()->validate([
            'payment_name' => 'required',
            'amount' => 'required',
            'payer' => 'required',
            'debtors' => 'required',
            'note' => 'nullable'
        ]);
        $formFields['user_id'] = auth()->id();

        $format_check = $formFields['debtors'];

        if (preg_match("/^(\w *[,; ] *)*\w$/", $format_check)) {
            return redirect('/');
        }

        Payment::create($formFields);


        return redirect('/')->with('succes', 'Payment created succesfully');
    }

    //Show Edit Form
    public function edit(Payment $payment)
    {
        return view('payments.edit', ['payment' => $payment]);
    }

    public function update(Request $request, Payment $payment)

    {

        $formFields = $request->validate([
            'payment_name' => 'required',
            'amount' => 'required',
            'payer' => 'required',
            'debtors' => 'required',
            'note' => 'nullable'
        ]);

        $payment->update($formFields);

        return redirect("payments/{$payment->id}")->with('succes', 'Payment updated');
    }


    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect('/')->with('delete', 'Listing deleted succesfuly');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
