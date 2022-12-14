@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            
            @if (session('message'))
               <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                 {{session('error')}}
             </div>
            @endif 

            <div class="card mt-3 shadow-lg p-3 mb-5 bg-white rounded">

                <div class=" text-dark text-center">
                    <h3 class="card-title">Login</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{url('/')}}" method="post">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" >
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <a href="/register">Sign up for an account</a>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>

                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection