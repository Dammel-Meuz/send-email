<div class="container ">
  {{-- <div>tableau de bord</div> --}}

    <div class="d-flex justify-content-center">
      
        <div class="card m-5 border border-primary" style="width: 15rem;">
            
            <div class="card-body">
              <h5 class="card-title">Admin </h5>
              <p class="card-text" "><h1><strong>{{$admine}}</strong></h1></p>
              <a href='{{route('listContactadminview')}}'>voire list</a>
            </div>
          </div>

          <div class="card m-5 border border-secondary" style="width: 15rem;">
           
            <div class="card-body">
              <h5 class="card-title">Stagiaires</h5>
              <p class="card-text" ><h1><strong>{{$stagiaire}}</strong></h1></p>

            </div>
          </div>

          <div class="card m-5 border border-info" style="width: 15rem;">
         
            <div class="card-body ">
              <h5 class="card-title">Membres</h5>
              <p class="card-text" ><h1><strong>{{$membre}}</strong></h1></p>
            
            </div>
          </div>
          
    </div>
    <div class="d-flex justify-content-center"">
    <div class="card  border border-info" style="width: 15rem;">
         
      <div class="card-body ">
        <h5 class="card-title">Total</h5>
        <p class="card-text" style="width: 18rem;"><h1><strong>{{$total}}</strong></h1></p>
      
      </div>
    </div>
    </div>
    <hr>
    <div  class="col-md-5 m-3" >
        <div class="form-group">
          <label class="m-2" for="firstName">Search</label>
          <input type="text" class="form-control" name="firstName" placeholder="Entrer your name" wire:model.debounce.350='search' >
    
      </div>
      <div>
        @if ($checkedContact)
            <button class="btn btn-info" wire:click='message()'>Nombre de contact selectionner({{ count($checkedContact)}})</button>
        @endif
       
        
      </div>
    </div>
 
    <div>
    <table class="table table-striped table-bordered  ">
        <thead class="thead thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">first Name</th>
            <th scope="col">last Name</th>
            <th scope="col">email</th>
            <th scope="col">Phone</th>
            {{-- <th scope="col">Action</th> --}}
            
          </tr>
        </thead>
      @foreach($contact as $cont)
        <tbody>
          <tr>
            <td>  <input class="form-check-input" type="checkbox"  name="membre" value="{{$cont->id}}" wire:model="checkedContact" ><img class="rounded mx-auto d-block" style="width: 50px;height:50px;" src="{{asset('/image/images.png')}}" alt=""></td> 
            {{-- <td>{{$cont->id}}</td> --}}
            <td>{{$cont->firstName}}</td>
            <td>{{$cont->lastName}}</td>
            <td>{{$cont->email}}</td>
            <td>{{$cont->phone}}</td>
            {{-- <td>
              <div class="btn-group ">
                <button class="btn btn-danger btn-sm " wire:click="deleteContact({{$cont->id}})">Delete</button>
                
                <button class="btn btn-success btn-sm ">Edit</button>
              </div>
            </td> --}}
            
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="d-flex pb-0 pt-2 border m-3 justify-content-center">
      @if(count($contact))
        {{ $contact->links('livewire-pagination') }}
      @endif
      </div>
    </div>
</div>
