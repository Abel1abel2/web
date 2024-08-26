<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/edit.css') }}">
    <div class='div-5'>
        @foreach($budget as $bu)

        <h1>edit Here</h1>
        <form class='form-1' method='POST' action='/edit'>
            @csrf
            @method('PATCH')
            <div class='label-1'>
                <pre>
                This is where your budget starts. You can update
                 the date after it's created in the view.
                </pre>
                <label for='start_date'>Start Date:</label>
                <input class='input-1' name='start_date' type='date' value='{{$bu->start_date}}'>

            </div>
            @error('start_date')
            <p class='p-c1'>{{$message}}</p>


            @enderror
            <br>
            <div class='label-1'>
                <pre>
                fill the end date. You can update.you can
                 the date after it's created in the view.
                </pre>
                <label for='end_date'>End Date:</label>
                <input class='input-2' name='end_date' type='date' value='{{$bu->end_date}}'>
            </div>
            @error('end_date')
            <p class='p-c1'>{{$message}}</p>


            @enderror
            <br>
            <div class='label-1'>
                <pre>
                fill your monthly income, you can
                update the income after it's created in the view.
                </pre>
                <label for='balance'>Balance:</label>
                <input class='input-3' name='balance' type='currency' value='{{$bu->balance}}'>
            </div>
            @error('balance')
            <p class='p-c1'>{{$message}}</p>


            @enderror
            <br>
            <div class='label-1'>
                <pre>
               how much do you want to save, you can
                update saving goal after it's created in the view.
                </pre>
                <label for='saving_goal'>Saving goal:</label>
                <input class='input-4' name='saving_goal' type='currency' value='{{$bu->saving_goal}}'>
            </div>
            @error('saving_goal')
            <p class='p-c1'>{{$message}}</p>


            @enderror
            <div class='label'>
                <button class='button-1' type='submit'>Update</button>
            </div>
            <div class='label'>
                <a class='a-e1' href='/show'>Cancel</a>
            </div>

        </form>
        @endforeach

    </div>
    <x-footer></x-footer>
</x-nav>