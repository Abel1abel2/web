<x-nav>

    <link rel="stylesheet" type="text/css" href="{{ url('css/show.css') }}">

    @foreach($user as $use)
    <h2 class='hs'>your Budget information</h2>
    @endforeach
    @foreach($budget as $bud)
    <div class='div-s4'>
        <div class='div-s3'>
            <p>Starting date: {{$bud->start_date}}</p>
            <p>Ending date: {{$bud->end_date}}</p>

            <div class='div-s5'>
                <a href='/edit'>update</a>
            </div>
        </div>
    </div>
    <div class="div-s1">
        <img class='is1' src="{{asset('img/salary.png')}}">
        <p> balance: <span class='span-s1'>{{$bud->balance}}<span> birr</p>
    </div>

    <div class='div-s2'>
        <img class='is2' src="{{asset('img/goal.png')}}">
        <p>saving_goal:<span class='span-s1'>{{$bud->saving_goal}} birr</span></p>
    </div>
    @endforeach
    <x-footer></x-footer>

</x-nav>
