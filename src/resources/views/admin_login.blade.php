<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('vendor/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('vendor/assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('vendor/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('vendor/assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <p class="text-muted mt-2 mb-4">Application Backend</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Sign In</h4>
                            </div>

                            <form action="{{ route('backend.login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress"
                                        required="" placeholder="Enter your email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                        placeholder="Enter your password" name="password">
                                </div>


                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('vendor/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('vendor/assets/js/app.min.js') }}"></script>

</body>

</html>
