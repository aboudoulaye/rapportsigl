
@extends('template_base')
@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Service Dashboard</h3>
                        <div class="nk-block-des text-soft">
                            <p>Bienvenue sur le Service Dashboard.</p>
                        </div>
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-md-11">
                        <div class="card card-full">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Active Campaign</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a href="#" class="link">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner py-0 mt-n2">
                                <div class="nk-tb-list nk-tb-flush nk-tb-dashed">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span>Subject</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span>Channels</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Status</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Assignee</span></div>
                                        <div class="nk-tb-col text-end"><span>Date Range</span></div>
                                    </div><!-- .nk-tb-head -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Happy Christmas <span class="dot dot-success d-sm-none ms-1"></span></span>
                                            <span class="tb-sub">Created on 01 Dec 22</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <ul class="d-flex gx-1">
                                                <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                                <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                                <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                                <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                                <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="badge badge-dim bg-success">Live Now</div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <div class="user-avatar-group">
                                                <div class="user-avatar xs">
                                                    <img src="./images/avatar/e-sm.jpg" alt="">
                                                </div>
                                                <div class="user-avatar xs">
                                                    <img src="./images/avatar/f-sm.jpg" alt="">
                                                </div>
                                                <div class="user-avatar xs">
                                                    <img src="./images/avatar/g-sm.jpg" alt="">
                                                </div>
                                                <div class="user-avatar xs">
                                                    <span>2+</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col text-end"><span>01 Dec - 07 Dec</span></div>
                                    </div><!-- .nk-tb-list -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .nk-block-head-content -->
                    <div class="col-md-1">
                        <div class="nk-header-menu is-light">
                            <div class="nk-header-menu-inner">
                                <!-- Menu -->
                                <ul class="nk-menu nk-menu-main">
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">RAPPORTS</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                            @auth 
                                                @if (Auth::user()->name == 'chirurgie')
                                                    <a href="{{route('chirurgieform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'medecine')
                                                    <a href="{{route('medecineform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'maternite')
                                                    <a href="{{route('materniteform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'urgence')
                                                    <a href="{{route('urgenceform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'kine')
                                                    <a href="{{route('kineform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'laboratoire')
                                                    <a href="{{route('laboform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'sevci')
                                                    <a href="{{route('sevciform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'radio')
                                                    <a href="{{route('radioform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'pediatrie')
                                                    <a href="{{route('pediatrieform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    @elseif(Auth::user()->name == 'odonto')
                                                    <a href="{{route('odontoform.page')}}" class="nk-menu-link">
                                                        <span class="nk-menu-text">FAIRE UN RAPPORT</span>
                                                    </a>
                                                    
                                                @endif
                                            @endauth 
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item">
                                                <a href="{{route('editList.page')}}" class="nk-menu-link">
                                                    <span class="nk-menu-text">VOIR TOUS LES RAPPORT DU CHR SEGUELA</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                            
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                </ul>
                                <!-- Menu -->
                            </div>
                        </div>    
                    </div><!-- .nk-header-menu -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        </div>
    </div>
</div>
@endsection