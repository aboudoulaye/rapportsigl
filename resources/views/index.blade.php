{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .form-control, .btn-primary{
            border: 2px solid black;
        }   
    </style>
    <title>ACCUEIL</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-5" >
                <form method="post" action="{{route('login.handler')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Entrer votre mail" name="email" value="{{ old('email')}}" >
                    </div>
                    @error('email')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name='password' placeholder="Entrer votre mot de passe" value="{{ old('password')}}">
                    </div>
                    @error('password')
                    <div class="text text-danger mb-1">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success">Se Connecter</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body ui-rounder npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">ESPACE DE CONNEXION</h4>
                                        <div class="nk-block-des">
                                            <p>ACCEDER A LA PLATEFORME.</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="{{route('login.handler')}}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Nom du service</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Entrer le nom du service" name="name" value="{{ old('name') }}">
                                            @error('name')
                                            <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">mot de passe </label>
                                            <a class="link link-primary link-sm" href="html/pages/auths/auth-reset-v2.html">mot de passe oublié?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Entrer votre mot de passe" name="password">
                                            @error('password')
                                            <div class="text text-danger mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">se connecter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="nk-block-content text-center text-lg-center">
                                        <p class="text-soft">&copy; 2023 K.A alias Json. tous droit reservé.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    
  

</html>