<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
    <div class='div-rl1'>

        <h1 class='hl1'>Login</h1>
        <form class='form-l1' method='POST' action='/loginuser'>
            @csrf


            <div class='label-l1'>
                <label class='l11' for='email'>Email:</label>
                <input class='input-l3' name='email' type='email' value="{{old('email')}}">

            </div>
            @error('email')
            <p class='p-cl1'>{{$message}}</p>
            @enderror
            <br>
            <div class='label-l1'>
                <label class='l12' for='password'>Password:</label>
                <input class='input-l4' name='password' type='password'>

            </div>
            @error('password')
            <p class='p-cl1'>{{$message}}</p>
            @enderror

            <button class='button-rl1' type='submit'>Login</button>

        </form>


    </div>
    <h3 class='h3l'>create new account here <a href='/signup'>register</a></h3>
</x-nav>
