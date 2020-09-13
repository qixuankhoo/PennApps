@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Hi {{ Auth::user()->name }}, feeling musical today?</div>
                <div class="card-body" style="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="http://algorhythm.online/?fbclid=IwAR2KfETPYdN8Pfe6V7sujhaE7vdp9zc-vj6UpeLX8bkxN9AomfcVR1dzSXs">Create your Melody of the Day!</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ Auth::user()->name }}'s Melody Diary</div>
                <div class="card-body" style="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($userMelodies as $melody)
                        <li>
                            <h4><span style="font-family: 'Pacifico', cursive;">{{ $melody->name }}</span></h4> <br>
                            <p> {{ $melody->caption }} </p>
                        </li>
                        @endforeach
                    </ul>
                    <a href="http://algorhythm.online/?fbclid=IwAR2KfETPYdN8Pfe6V7sujhaE7vdp9zc-vj6UpeLX8bkxN9AomfcVR1dzSXs">Create your Melody of the Day!</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Explore more melodies!</div>
                <div class="card-body" style="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($otherMelodies as $melody)
                        <li>
                            <h4><span style="font-family: 'Pacifico', cursive;">{{ $melody->name }}</span></h4> <br>
                            <p> {{ $melody->caption }} </p>
                        </li>
                        @endforeach
                    </ul>
                    <a href="http://algorhythm.online/?fbclid=IwAR2KfETPYdN8Pfe6V7sujhaE7vdp9zc-vj6UpeLX8bkxN9AomfcVR1dzSXs">Create your Melody of the Day!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
