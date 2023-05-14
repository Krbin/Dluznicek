@extends('layout')
@section('title')
    Payment {{ $payment->id }}
@endsection
@section('content')
    <h1 align="center" class="text-light mt-5">{{ $payment->name }}</h1>

    <div class="container">
        <table class="table table-dark mt-5">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">amount</th>
                    <th scope="col">payer</th>
                    <th scope="col">debtors</th>
                    <th scope="col">created at</th>
                    <th scope="col">
                        <button onclick="window.location.href='/payments/{{ $payment->id }}/edit'" type="button"
                            class="btn btn-info">edit</button>
                    </th>
            </thead>
            <tbody>
                <tr>
                    <th scope="col"> {{ $payment->name }}</th>
                    <th scope="col">{{ $payment->amount }}</th>
                    <th scope="col">{{ $payment->payer }}</th>
                    <th scope="col">{{ $payment->debtors }}</th>
                    <th scope="col">{{ $payment->created_at }}</th>
                    <th scope="col">
                        <form method="POST" action="/payments/{{ $payment->id }}">
                            @csrf
                            @method('DELETE')
                        </form>

                    </th>
                </tr>
                </tr>
            </tbody>
        </table>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>note</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $payment->note }}</th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
