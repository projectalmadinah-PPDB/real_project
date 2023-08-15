<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="d-flex justify-content-center mt-5">
                <div class="card col-6">

                    @if (session('success'))
                        <div class="mt-3 alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="mt-3 alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">
                    <div class="text-center">
                        <a href="/" class="">
                        <img width="50%" src="/frontend/images/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <h4 class="mb-2">Verifikasi Email Anda</h4>
                        <p class="mb-4">Silakan Cek Email Anda</p>
                    </div>

                    <form id="formAuthentication" class="mb-3" action="{{route('user.resend-email-verification')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Kirim Ulang Email</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
