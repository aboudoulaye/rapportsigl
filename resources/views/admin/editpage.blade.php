@extends('template_base')
@section('content')
<div class="nk-block nk-block-middle nk-auth-body  wide-xs">
    <div class="card">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">METTRE A JOUR UN SERVICE</h5>
                    <div class="nk-block-des">
                        <p>ESPACE DE MISE A JOUR DES DONNEES DES SERVICES</p>
                    </div>
                </div>
            </div>
            <form action="{{route('edit.handler',['user' => $user->id])}}" method="post">
                @csrf

                @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Nom</label>
                    </div>
                    <div class="form-control-wrap">
                        <p>ancien nom : {{$user->name}}</p>
                        <input type="text" class="form-control form-control-lg" id="default-01" name="name" placeholder="Entrez le nouveau nom">
                        @error('name')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label-group mt-1">
                        <label class="form-label mt-1" for="default-01">Nouveau mot de passe </label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg" id="default-01" name="password" placeholder="Donner le nouveau mot de passe">
                    </div>
                        @error('password')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Role</label>
                    </div>
                    <div class="form-control-wrap">
                        <p>ancien Role : {{$user->role}}</p>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option selected>choisissez le nouveau role</option>
                            <option value="service">service</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">valider</button>
                </div>
            </form>
            <div class="form-group">
                <a href="{{route('admin.dashboard')}}" class="btn btn-lg btn-success btn-block mt-1" type="submit">RETOUR AU TABLEAU DE BORD</a>
            </div>
        </div>
    </div>
</div>
    
@endsection