    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 d-block p-2">
                                <img class="img-thumbnail d-block mx-auto" width="200px" src="https://source.unsplash.com/K4mSJ7kc0As/600x800" alt="dog">
                            </div>
                            <div class="col-lg-12">
                                <div class="px-5 pt-2 pb-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <?php if(!empty(validation_errors())): ?>
                                        <div class="alert alert-dismissible alert-danger">
                                            <strong><?php echo validation_errors(); ?></strong>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($errors)): ?>
                                            <div class="alert alert-dismissible alert-danger">
                                            <strong><?php echo $errors['error_message']; ?></strong>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php echo form_open('login'); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username" aria-describedby="usernameHelp"
                                                placeholder="Enter Username..." value="<?php echo $this->input->post('username'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="password" placeholder="Password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <input type="submit" value="Login" name="login" class="btn btn-primary btn-user btn-block">
   
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                        <div class="row">
                            <a href="<?php echo base_url(); ?>" class="btn btn-md btn-success mx-auto">Go to HOME page »</a>
                        </div>

            </div>


        </div>

    </div>