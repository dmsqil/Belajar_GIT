<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <link rel="stylesheet" href="login.css" />
    <script src="login.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UAS Praktikum PWD</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://sso.kemenag.go.id/assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="https://sso.kemenag.go.id/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://sso.kemenag.go.id/assets/css/bootstrap-extended.min.css" />
    <link rel="stylesheet" type="text/css" href="https://sso.kemenag.go.id/assets/css/components.min.css" />

    <link rel="stylesheet" type="text/css" 5 href="https://sso.kemenag.go.id/assets/css/vertical-menu.min.css" />

    <link rel="stylesheet" type="text/css" href="https://sso.kemenag.go.id/assets/css/style.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GEN1TKSK9F"></script>
</head>

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column navbar-sticky footer-static bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-8 col-11">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">
                                                    Login akun untuk masuk
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="divider">
                                                <div class="divider-text text-uppercase text-muted">
                                                    <small>Login Menggunakan NIM atau Email</small>
                                                </div>
                                            </div>
                                            <form action="" method="post">
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="exampleInputEmail1">User</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIM/Email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                                    <input type="hidden" name="source" id="source" />
                                                    <input type="hidden" name="ci_csrf_token" value="" style="display: none" />
                                                </div>
                                                <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <div class="checkbox checkbox-sm">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                                            <label class="checkboxsmall" for="exampleCheck1"><small>Ingat Saya</small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-field button">
                                                    <button type="button" class="btn btn-primary glow w-100 position-relative" onclick="redirectToHome()">
                                                        Login<span class="float-right">></span>
                                                </div>
                                                </button>
                                            </form>
                                            <hr />

                                            <div class="lupa-password">
                                                <a href="#"><b>Lupa password?</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img src="https://static.vecteezy.com/system/resources/previews/002/144/011/original/school-building-college-academy-education-cartoon-illustration-vector.jpg" width="400" height="400" alt="Cartoon university building" />
                                </div>
</body>

</html>