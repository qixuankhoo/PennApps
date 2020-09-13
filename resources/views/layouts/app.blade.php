<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Melodify') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{-- 
		<!-- shim -->
		<script src="./MIDI.js/inc/shim/Base64.js" type="text/javascript"></script>
		<script src="./MIDI.js/inc/shim/Base64binary.js" type="text/javascript"></script>
		<script src="./MIDI.js/inc/shim/WebAudioAPI.js" type="text/javascript"></script>
		<script src="./MIDI.js/inc/shim/WebMIDIAPI.js" type="text/javascript"></script>
		<!-- jasmid package -->
		<script src="./MIDI.js/inc/jasmid/stream.js"></script>
		<script src="./MIDI.js/inc/jasmid/midifile.js"></script>
		<script src="./MIDI.js/inc/jasmid/replayer.js"></script>
		<!-- midi.js package -->
		<script src="./MIDI.js/js/midi/audioDetect.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/gm.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/loader.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/plugin.audiotag.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/plugin.webaudio.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/plugin.webmidi.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/midi/player_1.1.js" type="text/javascript"></script>
		<!-- utils -->
		<script src="./MIDI.js/js/util/dom_request_xhr.js" type="text/javascript"></script>
		<script src="./MIDI.js/js/util/dom_request_script.js" type="text/javascript"></script>
		<!-- includes -->
		<script src="./MIDI.js/examples/inc/timer.js" type="text/javascript"></script>
		<script src="./MIDI.js/examples/inc/colorspace.js" type="text/javascript"></script>
		<script src="./MIDI.js/examples/inc/event.js" type="text/javascript"></script>
	  	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	  	<script type="text/javascript">
	  	function onclick() {
			$(function() {
				MIDI.loadPlugin({
					// This is a database of soundfonts: containing samples of every key of every instrument (like C# piano, F guitar, etc.) 
					soundfontUrl: "https://gleitz.github.io/midi-js-soundfonts/MusyngKite/",
					onprogress: function(state, progress) {
						console.log(state, progress);
					},
					onsuccess: function() {
						// Each one of this is an encoded midi file. Just two strings
						var base64midi = 'data:audio/midi;base64,TVRoZAAAAAYAAAABAIBNVHJrAAAAggCQP0CBAIA/QACQRECBAIBEQACQP0CBAIA/QACQRECBAIBEQACQQECBAIBAQACQQECCAIBAQACQRECBAIBEQACQUkCBAIBSQACQUECCAIBQQACQT0CBAIBPQACQTECBAIBMQACQS0CBAIBLQACQSUCBAIBJQACQT0CBAIBPQAD/LwA=';
						var base64midi2 = 'data:audio/midi;base64,TVRoZAAAAAYAAAABAIBNVHJrAAAAkACQSECBAIBIQACQTEBAgExAAJBIQECASEAAkE9AgQCAT0AAkEhAgQCASEAAkExAggCATEAAkExAgQCATEAAkE1AgQCATUAAkEdAgQCAR0AAkEpAQIBKQACQR0BAgEdAAJBKQIEAgEpAAJBHQIEAgEdAAJBNQIEAgE1AAJBNQIEAgE1AAJBMQIIAgExAAP8vAA==';
						/// this sets up the MIDI.Player and gets things going
						player = MIDI.Player;
						// This takes a string (the encoded midi file) as an input and plays it
						player.loadFile(base64midi2, player.start);
					}
				});
			});
	  	}
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $('#MyButton').click(function(){
			     onclick();
			  });
			});
		</script> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="font-weight: 200; font-family: 'Pacifico', cursive;">{{ config('app.name', 'Melodify') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
