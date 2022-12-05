@extends('app')


@section('content')

<div class="">
    <div class="row justify-content-center">
        
        <div class="col-md-6 mt-5" >
            <h3>Ajouter Contact</h3>
            <div class="p-4 border-2 border border-secondary rounded">
            
            <form class="" action="{{route('addContact')}}" method="post" enctype="multipart/form-data">
                @csrf

                @if (Session::has('error'))
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
                    
                @endif
                
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Entrer your first Name" >
                    @error('firstName')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Entrer your last Name" >
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
                <div class="form-group d-flex flex-row bd-highlight mb-3">
                    <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="membre" value="membre" >
                        <label class="form-check-label" for="Membre">
                         Membre
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"name="admine" value="admine">
                        <label class="form-check-label" for="Admine">
                          Admine
                        </label>
                      </div>
                      <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox"  name="stagiaire" value="stagiaire" >
                        <label class="form-check-label" for="Stagiaire" checked >
                         Stagiaire
                        </label>
                      </div>
                      
                </div>
                <button type="submit" class="btn btn-primary m-3" >Ajouter</button>
            </form>
        </div>
        </div>
        <div class="row justify-content-center" >
            <div class="col-md-6 mt-3">
                <h3>Importer Contact à partir d'un fichier excel </h3>
                <div class="p-4 border-2 border border-secondary rounded">
                   
                    <form action="" method="post" class="" enctype="multipart/form-data">
                        <label for="">Choisir fichier </label>
                        <input type="file" name="file" class="form-control">
                        <div class="mt-3">
                            <button class="btn btn-primary float-right">Ajouter</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            
           
        </div>
    </div>
</div>

@endsection