<div class="modal fade mt-5" id="modalGroupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark text-light">


            <form action="/groups/store" method="post">
                @csrf
                <div class="modal-body mx-3 mt-4">
                    <div class="md-form mb-2">
                        <input type="text" id="defaultForm-pass"
                            class="form-control bg-dark text-light validate @error('login-email') border-danger  @enderror"
                            name="group-name" placeholder="name">

                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">create group</button>
                    <button type="button" class="btn btn-default text-light btn-outline-secondary" data-dismiss="modal"
                        aria-label="Close">
                        close
                    </button>
                </div>
            </form>

        </div>

    </div>
</div>

<div class="text-center">
    <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#modalGroupForm">groups</a>
</div>
