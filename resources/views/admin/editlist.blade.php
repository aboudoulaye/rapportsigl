@extends('template_base')
@section('content')
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">DASHBOARD FOR SELECT EDIT SERVICE</h3>
                                    <div class="nk-block-des text-bright">
                                        {{-- <p>BIENVENUE Mr {{Auth::user()->name}}.</p> --}}
                                    </div>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-sm-2"></div>
                                <div class="col-xl-8 col-xxl-8">
                                    <div class="card card-full">
                                        <div class="card-inner">
                                            @if (session()->has('success'))
                                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                                            @endif
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title"><span class="me-2">SELECTION DU SERVICE A EDITER</span></h6>
                                                </div>
                                                <div class="card-tools">
                                                    <ul class="card-tools-nav">
                                                        <li><a href="#"><span>{{$nombreusers}} utilisateurs</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0 border-top">
                                            <div class="nk-tb-list nk-tb-orders">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-orders-type"><span>Role</span></div>
                                                    <div class="nk-tb-col tb-col-sm-3"><span>NOM</span></div>
                                                    <div class="nk-tb-col tb-col-sm-3"><span>Date creation</span></div>
                                                    <div class="nk-tb-col tb-col-sm-2"><span>Creé par</span></div>
                                                    <div class="nk-tb-col tb-col-sm-4"><span>Action</span></div>
                                                    <hr>
                                                </div><!-- .nk-tb-item -->
                                                @forelse ($users as $user)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <span class="tb-lead">{{$user->role}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <span class="tb-lead">{{$user->name}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <span class="tb-sub">{{$user->created_at}}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <span class="tb-sub">{{$user->admin ? $user->admin->name : 'N/A' }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <a href="{{route('edit.page',['user' => $user->id])}}" class="btn btn-warning">Editer</a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm-3">
                                                        <form action="{{route('delete.page',['user' => $user->id])}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit">supprimer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                @empty
                                                    <p class="text text-info"> Aucun utilisateur </p>
                                                @endforelse
                                                
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner-sm border-top text-center d-sm-none">
                                            <a href="#" class="btn btn-link btn-block">See History</a>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-sm-2"></div>
                            </div><!-- .row -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
            <!-- content @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="./assets/js/bundle.js?ver=3.2.2"></script>
<script src="./assets/js/scripts.js?ver=3.2.2"></script>
<script src="./assets/js/charts/gd-default.js?ver=3.2.2"></script>

@endsection