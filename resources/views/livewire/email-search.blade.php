{{-- <div class="relative">
    
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


</div> --}}
<div>
    <div class="form-group">
        <select class="form-control" id="select2-dropdown">
            <option value="">Select Option</option>
            {{-- <option value="{{ $webseries }}">"{{ $webseries }}"</option> --}}
            @foreach($webseries as $item)
            <option value="{{ $item->email }}">{{ $item->email }}</option>
            @endforeach
        </select>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('ottPlatform', data);
        });
    });
</script>
@endpush