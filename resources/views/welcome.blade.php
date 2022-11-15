@extends('app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5" >
            <h4>Contact Us</h4><hr>
            <form action="{{route('sendMail')}}" method="post" enctype="multipart/form-data">
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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Entrer your name" value="{{old('name')}}">
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Entrer your email" value="{{old('email')}}">
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Entrer your subject" value="{{old('subject')}}">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" cols="4" rows="4" class="form-control" name="message" placeholder="Entrer your message" value="{{old('message')}}"></textarea>
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="file" class="form-control" name="piecejoint" placeholder="piecejoint" value="{{old('piecejoint')}}">
                </div>
                <button type="submit" class="btn btn-primary m-3" >Send</button>
            </form>
        </div>
    </div>
</div>

    
@endsection