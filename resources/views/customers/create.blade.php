@extends('layout')

@section('content')
<form action="/learn_more" method="POST">
    @csrf
    <fieldset>
         <legend>Contact Info:</legend>
         <label for="honorific">Honorific:</label>
         <select name="honorific" id="honorific" required>
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>
         </select>
         <label for="lname">Last name:</label>
         <input type="text" id="lname" name="lastName" required><br><br>
         <label for="fname">First name:</label>
         <input type="text" id="fname" name="firstName" required><br><br>
         <label for="email">Email:</label>
         <input type="email" id="email" name="email" required><br><br>
         <label for="mobile">Mobile:</label>
         <input type="mobile" id="mobile" name="mobile" required><br><br>
    </fieldset>

{{-- 
    <div class="field">
        <label class="label" for="honorific">Honorific</label>
        <div class="control">
            <input class="input {{$errors->has('honorific') ? 'is-danger' : ''}}" type="text"name="title" id="honorific" value="{{old('honorific')}}"/>
            @error('honorific')
                <p>{{$errors->first('honorific')}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="firstName">First Name</label>
        <div class="control">
            <input class="input {{$errors->has('firstName') ? 'is-danger' : ''}}" type="text"name="title" id="firstName" value="{{old('firstName')}}"/>
            @error('firstName')
                <p>{{$errors->first('firstName')}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="lastName">Last Name</label>
        <div class="control">
            <input class="input {{$errors->has('lastName') ? 'is-danger' : ''}}" type="text"name="title" id="lastName" value="{{old('lastName')}}"/>
            @error('lastName')
                <p>{{$errors->first('lastName')}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Email Address</label>
        <div class="control">
            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text"name="title" id="email" value="{{old('email')}}"/>
            @error('email')
                <p>{{$errors->first('email')}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="mobile">Mobile Number</label>
        <div class="control">
            <input class="input {{$errors->has('mobile') ? 'is-danger' : ''}}" type="text"name="title" id="mobile" value="{{old('mobile')}}"/>
            @error('mobile')
                <p>{{$errors->first('mobile')}}</p>
            @enderror
        </div>
    </div>    
 --}}
    <div class="field is-grouped">
        <div class="control">
            <button type="submit">Submit</button>
        </div>
    </div>
    
</form>
@endsection