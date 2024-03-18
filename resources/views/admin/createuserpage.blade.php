@extends('template_base')

@section('content')
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                    <div class="card">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                @if (session()->has('success'))
                                <div class="alert alert-success">{{ session()->get('success') }}</div>
                                @endif
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">CREER UN SERVICE</h4>
                                    <div class="nk-block-des">
                                        <p>Creation d'un service utilisateur</p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('createuser.Handler')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="name">Nom</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Entrer le nom" name="name">
                                        @error('name')
                                        <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="role">Role</label>
                                    <div class="form-control-wrap">
                                        <select class="form-control form-control-lg" id="role" name="role">
                                            <option value="service">service</option>
                                            <option value="admin">admin</option>
                                        </select>
                                        @error('role')
                                        <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Mot de pass</label>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" id="password" placeholder="Entrer votre mot de passe" name="password">
                                        @error('password')
                                        <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">CREER</button>
                                </div>
                            </form>
                            <div class="form-group">
                                <a href="{{route('admin.dashboard')}}" class="btn btn-lg btn-success btn-block mt-1" type="submit">RETOUR AU TABLEAU DE BORD</a>
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
<!-- select region modal -->
@endsection
   
    

