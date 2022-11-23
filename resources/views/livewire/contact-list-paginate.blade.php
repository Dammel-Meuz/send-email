<div class="container ">
  {{-- <div>tableau de bord</div> --}}
    <div class="d-flex flex-row m-3">

        <div class="card m-5 border border-primary" style="width: 18rem;">
            
            <div class="card-body">
              <h5 class="card-title">Admines</h5>
              <p class="card-text" style="fontsize: 18rem;"><h1><strong>{{$admine}}</strong></h1></p>

            </div>
          </div>

          <div class="card m-5 border border-secondary" style="width: 18rem;">
           
            <div class="card-body">
              <h5 class="card-title">Stagiaires</h5>
              <p class="card-text" style="width: 18rem;"><h1><strong>{{$stagiaire}}</strong></h1></p>

            </div>
          </div>

          <div class="card m-5 border border-info" style="width: 18rem;">
         
            <div class="card-body ">
              <h5 class="card-title">Membres</h5>
              <p class="card-text" style="width: 18rem;"><h1><strong>{{$membre}}</strong></h1></p>
            
            </div>
          </div>
    </div>
    <div  class="col-md-5 m-5" >
        <div class="form-group">
          <label class="m-2" for="firstName">Search</label>
          <input type="text" class="form-control" name="firstName" placeholder="Entrer your name" wire:model.debounce.350='seach' >
    
      </div>
    </div>
    <div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">first Name</th>
            <th scope="col">last Name</th>
            <th scope="col">email</th>
            <th scope="col">Phone</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
      @foreach($contact as $cont)
        <tbody>
          <tr>
            <td>{{$cont->firstName}}</td>
            <td>{{$cont->lastName}}</td>
            <td>{{$cont->email}}</td>
            <td>{{$cont->phone}}</td>
            <td>{{$cont->id}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="d-flex pb-0 pt-2 border  justify-content-center">
      @if(count($contact))
        {{ $contact->links('livewire-pagination') }}
      @endif
      </div>
    </div>
</div>