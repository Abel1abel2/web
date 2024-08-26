<x-nav>


    <link rel="stylesheet" type="text/css" href="{{ url('css/track.css') }}">

    <div class="div-t1">
        <div class='div-t4'>
            <img class='img-t1' src="{{asset('img/cal.jpg')}}">
        </div>

        <div class='div-t3'>
            @if($catagory->isEmpty())
            <script>
                alert('first select catagory');


                document.querySelector('.div-t3').style.visibility = "hidden";
            </script>



            @else
            @foreach($catagory as $cat)
            <h3>{{date('m/d/y')}} Expense Information</h3>
            <br>
            <h4> Catagory Type: </h4>
            {{$cat['catagory_type'][0]}},

            {{$cat['catagory_type'][1]}},
            {{$cat['catagory_type'][2]}} and
            {{$cat['catagory_type'][3]}}

            <br>
            <br>
            <h4 class='h4-t1'> Total Expense: </h4>
            <span> {{$cat['expense_value']}} birr</span>

            @endforeach

            <br>
            <br>
            <h4 class='h4-t2'> Balance: </h4>
            @foreach($budget as $bud)
            <span> {{$bud['balance']}} birr</span>
            @endforeach

        </div>

    </div>
    <h3 class='hr'>current balance</h3>
    <button class='button-t1'>show</button>
    <h4 class='hh'></h4>

    <div class='div-t2'>

        @foreach($budget as $bud)
        @php
        $remain= $bud['balance']-$cat['expense_value'];
        @endphp
        @endforeach
        <h2 class='hp'></h2>
        <img class='imgh' src="{{asset('img/happy.gif')}}">
        <img class='imgs' src="{{asset('img/sad.gif')}}">
        <h1 class='hy'></h1>

        <form method='POST' action='/track'>
            @csrf
            <p class='bp'>press button to update balance</p>
            <button class='button-t2' type='submit'>Budget</button>
        </form>

    </div>
    <x-footer></x-footer>
    <script type="text/javascript">
        document.querySelector('.button-t1').addEventListener('click', function() {

            document.querySelector('.hh').innerHTML = "{{$remain}} birr";
            document.querySelector('.div-t2').style.visibility = 'visible';
            if ("{{$remain}}" > "{{$bud['saving_goal']}}") {
                document.querySelector('.hy').innerHTML = "you are in good status";
                document.querySelector('.imgh').style.visibility = "visible";
                document.querySelector('.hp').innerHTML = "Saving-goal:{{$bud['saving_goal']}}";
                '<br>'

            } else {
                document.querySelector('.imgs').style.visibility = "visible";
                document.querySelector('.hy').innerHTML = "you are in bad status";

                document.querySelector('.hp').innerHTML = "Saving-goal:{{$bud['saving_goal']}}";
            }
        });
    </script>
    @endif

</x-nav>
