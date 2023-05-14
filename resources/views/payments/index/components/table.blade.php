<table class="table table-dark">

    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">amount</th>
            <th scope="col">payer</th>
            <th scope="col">debtors</th>
            <th scope="col">created at</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($payments as $payment)
            <tr>
                <th scope="col">
                    <a href={{ '/payments/' . $payment->id }}>{{ $payment->payment_name }}</a>
                </th>
                <th scope="col">{{ $payment->amount }}</th>
                <th scope="col">{{ $payment->payer }}</th>
                <th scope="col">{{ $payment->debtors }}</th>
                <th scope="col">{{ $payment->created_at }}</th>
                <th scope="col">
                    <div class="d-inline-flex justify-content-end">
                        <button onclick="window.location.href='/payments/{{ $payment->id }}/edit'" type="button"
                            class="btn btn-info">edit</button>
                        <form method="POST" action="/payments/{{ $payment->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </div>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
