@extends('layout')

@section('title')
    Register Client
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-10 col-12 ">
                <div class="card shadow">
                    <div class="card-header">
                        <h4> Register Cient</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clients.save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">First Name *</label>
                                <input type="text" class="form-control" name="txtfirstname">
                                @if ($errors->any())
                                    <span class="text-danger">{{ $errors->first() }}</span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Last Name *</label>
                                <input type="text" class="form-control" name="txtlastname">
                            </div>
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="text" class="form-control" name="txtemailclient">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="txtphoneclient">
                            </div> --}}
                        </form>



                        <div class="text-center">
                            <button class="btn btn-outline-primary mt-3"> Save Client</button>
                            <br>
                            @if ($message = Session::get('result'))
                                <div class="alet alert-primary">
                                    {{ $message }}
                                </div>
                            @endif
                        </div>


                    </div>
                </div>
            </div>


        </div>
    @endsection
