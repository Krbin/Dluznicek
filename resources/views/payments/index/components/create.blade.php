        <form action="/payments" method="POST" class="d-flex">
            @csrf
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">
                            <input value="{{ old('payment_name') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="payment_name" id="input-name" placeholder="name" />
                            @error('payment_name')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('amount') }}"class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="amount" id="input-amount" placeholder="amount" />
                            @error('amount')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('payer') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                type="text" name="payer" id="input-payer" placeholder="payer" />
                            @error('payer')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror
                        </th>

                        <th scope="col">
                            <input value="{{ old('debtors') }}" class="pt-1 pb-1 form-control bg-dark text-light"
                                class="class" type="text" name="debtors" id="input-debtors" placeholder="debtors" />
                            @error('debtors')
                                <p class="text-danger" style="position: absolute">{{ $message }}</p>
                            @enderror

                        <th>
                            <button id="input-submit-button" type="submit"
                                class="btn btn-primary mt-1 form-control bg-dark">
                                add
                            </button>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="colgroup" colspan="6">
                            <textarea value="{{ old('note') }}" placeholder="note" name="note" id="note"
                                class="form-control pt-1 pb-1 form-control bg-dark text-light "></textarea>
                        </th>
                    </tr>
                </tbody>

            </table>
        </form>
