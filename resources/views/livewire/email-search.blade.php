<div class="relative">
    
 <label for="text">email</label>
<input type="email"
 class="form-control"
  name="email" 
  placeholder="email" 
  value="{{old('email')}}"
  wire:model='query'/>

  
  
@error('email')<span class="text-danger">{{$message}}</span>@enderror


@if (!empty($email))
<div class="absolute z-18 list-group bg-white w-full rounded-t-none shadow-lg">
    @foreach ($email as $item)
    <a href="">{{$item->email}}</a>
@endforeach
</div>
@else
    <div class="list-item">no resulte</div>
@endif


</div>
