<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <!-- Page Title  -->
    <title>PLATEFORME SIG</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('./assets/css/dashlite.css?ver=3.2.2')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('./assets/css/theme.css?ver=3.2.2')}}">
</head>

<body class="nk-body ui-rounder has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->  
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            @auth
                                @if (Auth::user()->role== 'admin')
                                    <div class="nk-header-menu is-light">
                                        <div class="nk-header-menu-inner">
                                            <!-- Menu -->
                                            <ul class="nk-menu nk-menu-main">
                                                <li class="nk-menu-item has-sub">
                                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                                        <span class="nk-menu-text">GESTION SERVICES</span>
                                                    </a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item">
                                                            <a href="{{route('createuser.page')}}" class="nk-menu-link">
                                                                <span class="nk-menu-text">creer un service utilisateur</span>
                                                            </a>
                                                        </li><!-- .nk-menu-item -->
                                                        <li class="nk-menu-item">
                                                            <a href="{{route('editList.page')}}" class="nk-menu-link">
                                                                <span class="nk-menu-text">editer/supprimer un service utilisateur</span>
                                                            </a>
                                                        </li><!-- .nk-menu-item -->

                                                        <li class="nk-menu-item">
                                                            <a href="{{route('userlist.page')}}" class="nk-menu-link">
                                                                <span class="nk-menu-text">listes des services utilisateurs</span>
                                                            </a>
                                                        </li><!-- .nk-menu-item -->
                                                    </ul><!-- .nk-menu-sub -->
                                                </li><!-- .nk-menu-item -->
                                                <li class="nk-menu-item has-sub">
                                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                                        <span class="nk-menu-text">Apps</span>
                                                    </a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Calendar</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">Kanban Board</span></a>
                                                        </li>
                                                    </ul><!-- .nk-menu-sub -->
                                                </li><!-- .nk-menu-item -->
                                                <li class="nk-menu-item">
                                                    <a href="{{route('admin.dashboard')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">Dashboard</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->
                                            </ul>
                                            <!-- Menu -->
                                        </div>
                                    </div><!-- .nk-header-menu -->
                                    @else 
                                    <div class="nk-header-menu is-light">
                                        <div class="nk-header-menu-inner">
                                            <!-- Menu -->
                                            <ul class="nk-menu nk-menu-main">
                                                <li class="nk-menu-item has-sub">
                                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                                        <span class="nk-menu-text">Apps</span>
                                                    </a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Calendar</span></a>
                                                        </li>
                                                        <li class="nk-menu-item">
                                                            <a href="html/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">Kanban Board</span></a>
                                                        </li>
                                                    </ul><!-- .nk-menu-sub -->
                                                </li><!-- .nk-menu-item -->
                                                <li class="nk-menu-item">
                                                    <a href="{{route('service.dashboard')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">Dashboard</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->
                                            </ul>
                                            <!-- Menu -->
                                        </div>
                                    </div><!-- .nk-header-menu -->
                                @endif
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{strtoupper(Auth::user()->role)}} {{strtoupper(Auth::user()->name)}}</span>
                                    </div>
                                </div>
                            @endauth
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    
                                    @auth
                                    <span style="font-weight: bold">SE DECONNECTER ICI</span>
                                        <li class="dropdown user-dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <div class="user-toggle">
                                                    <div class="user-avatar sm">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li><a href="{{asset('html/user-profile-regular.html')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                        <li><a href="{{asset('html/user-profile-setting.html')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                        <li><a href="{{asset('html/user-profile-activity.html')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li><form action="{{route('logout')}}" method="POST">
                                                            @csrf
                                                            <button type="submit">Déconnexion</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <div></div>
                                        <a href="{{route('login.page')}}" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="mr-5">
                                                <a href="{{route('login.page')}}" class="btn btn-primary">
                                                <span class="lead-text">SE CONNECTER</span>
                                                </a>
                                            </div>
                                    @endauth
                                    
                                </ul>
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                    @yield('content')

                    {{-- <nav class="navbar navbar-light navbar-expand-lg fixed-bottm bg-white clean-navbar">
                        <div class="container"><a class="navbar-brand logo" href="#">My Virtual Base</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse"
                                id="navcol-1">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">accueil</a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="licence1.html">Licence
                                            1</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="licence2.html">licence
                                            2</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="licence3.html">licence
                                            3</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contact-us.html">nous
                                            contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav> --}}
                    
                <div class="nk-footer text-center">
                            <div class="nk-footer-copyright"> &copy; realisé par KONATE Aboudoulaye alias Json </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    <script src="./assets/js/charts/gd-campaign.js?ver=3.2.2"></script>
</body>

</html>