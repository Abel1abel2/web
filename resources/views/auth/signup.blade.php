<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/sign.css') }}">
    <div class='div-r1'>

        <h1 class='hsi'>Register</h1>
        <form class='form-r1' method='POST' action='/signup'>
            @csrf
            <div class='label-r1'>
                <label for='first_name'>First Name:</label>
                <input class='input-r1' name='first_name' type='text' value="{{old('first_name')}}">
            </div>
            @error('first_name')
            <p class='p-r1'>{{$message}}</p>
            @enderror
            <br>
            <div class='label-r1'>
                <label for='last_name'>Last Name:</label>
                <input class='input-r2' name='last_name' type='text' value="{{old('last_name')}}">
            </div>
            @error('last_name')
            <p class='p-r1'>{{$message}}</p>
            @enderror
            <br>
            <div class='label-r1'>
                <label for='email'>Email:</label>
                <input class='input-r3' name='email' type='email' value="{{old('email')}}">
            </div>
            @error('email')
            <p class='p-r1'>{{$message}}</p>
            @enderror
            <br>
            <div class='label-r1'>
                <label for='password'>Password:</label>
                <input class='input-r4' name='password' type='password' value="{{old('password')}}">
            </div>
            @error('password')
            <p class='p-r1'>{{$message}}</p>
            @enderror
            <br>
            <div class='label-r1'>
                <label for='password_confirmation'>Confirm Password:</label>
                <input class='input-r5' name='password_confirmation' type='password' value="{{old('password_confirmation')}}">
            </div>
            @error('password_confirmation')
            <p class='p-r1'>{{$message}}</p>
            @enderror
            <button class='button-r1' type='submit'>register</button>


        </form>


    </div>
</x-nav>
