@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">How are you feeling today?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="http://algorhythm.online/?fbclid=IwAR2KfETPYdN8Pfe6V7sujhaE7vdp9zc-vj6UpeLX8bkxN9AomfcVR1dzSXs">Create your Melody of the Day!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
