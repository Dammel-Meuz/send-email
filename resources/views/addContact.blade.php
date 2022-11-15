@extends('app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5" >
            <h4>Ajout Contact</h4><hr>
            <form action="{{route('addContact')}}" method="post" enctype="multipart/form-data">
                @csrf

                {{-- @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif

                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                    
                @endif
                @if (Session::has('error'))
                <div class="alert alert-success">
                    {{Session::get('errormail')}}
                </div>
                    
                @endif --}}
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Entrer your name" >
                    @error('firstName')<span class="text-danger">{{$message}}</span>@enderror
                </div>N
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Entrer your name" >
                    @error('lastName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Entrer your email" >
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="Entrer your email">
                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Type Contact</label>
                    <select class="form-select" aria-label="Default select example" name="type" placeholder="type de contact">
                        <option selected >--</option>
                        <option value="Membre" >Membre</option>
                        <option value="Stagiaire">Stagiaire</option>
                        <option value="Coach">Coach</option>
                      </select>
                </div>
                <button type="submit" class="btn btn-primary m-3" >Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection