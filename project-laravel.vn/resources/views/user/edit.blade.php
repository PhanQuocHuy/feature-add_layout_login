@extends('admin.index')
@section('content')
    <div class="container">
        <div class="create-user">
            <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
        </div>
        <form action="{{ route('user.update',$users->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
                <div class="row form-edit">
                    <div class="col-md-2">
                        <div class="form-title">
                            <label for="fname">{{ __('Name:') }}</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="content-form">
                            <input class="input" type="text" id="fname" name="name" value="{{ $users->name }}" placeholder="Your name">
                        </div>
                    </div>
                </div>
                <div class="row form-edit">
                    <div class="col-md-2">
                        <div class="form-title">
                            <label for="lname">{{ __('Email:') }}</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="content-form">
                            <input class="input" type="email" id="lname" name="email" value="{{ $users->email }}" placeholder="Your email">
                        </div>
                    </div>
                </div>
                <div class="row form-edit">
                    <div class="col-md-2">
                        <div class="form-title">
                            <label for="fname">{{ __('Password:') }}</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="content-form">
                            <input class="input" type="password" id="fname" name="password" value="{{ $users->password }}" placeholder="Your password">  
                        </div>    
                    </div>
                </div> 
                <input type="submit" class="input button-form btn btn-success" value="Add">
            </form>
    </div>
    @endsection