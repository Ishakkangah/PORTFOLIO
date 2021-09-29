
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h5 class="font-weight-bolder">
                                            <?= $this->session->flashdata('flash'); ?>
                                        </h5>
                                        <h1 class="font-weight-bolder h4 text-gray-900 mb-4 shadow-lg">Forgot password</h1>
                                    </div>
                                    <form class="user" action="<?= base_url('auth/forgotpassword'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                                                value="<?= set_value('email'); ?>">
                                                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset password
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
