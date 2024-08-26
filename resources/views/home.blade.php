<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/home.css') }}">


    <div class="div-h1h">
        <img class='img1h' src="{{asset('img/img1.jpg')}}">
        <img class='img2h' src="{{asset('img/img2.jpg')}}">
        <div class="dddh">
            <pre class='pre1h'>
            Build a Brighter Financial Future Let us help
            you create a budget that supports your dreams.
            </pre>
        </div>
        <button class="prev">❮</button>
        <button class="next">❯</button>
        @guest
        <form method="POST" action='home'>
            @csrf
        </form>
        <div class="div-h2h"><a class='a-h1h' href="/loginuser">Get Started</a></div>
        <div class="div-h3h">
        </div>
        @endguest
        @auth


        <h2 class='h-h'>Welcome to Budget {{$user['first_name']}}</h2>



        @endauth
    </div>

    <div class="div-h4h">
        <div class="div-h5h"> <img src="{{asset('img/bud.jpg')}}">

            <pre>
            Budgeting Made Simple:Our system
            let you create, modify, and track
            your budget, ensuring you're always
            in control of your finances.
             </pre>
            <div class="div-hbh "><a class='a-h1h' href='/budgets'>Budget</a></div>
        </div>

        <div class="div-h5h"> <img src="{{asset('img/catag.jpg')}}">

            <pre>
            Effortless Expense Tracking: Our system
            lets you easily record your daily expenses
            and provides you with a clear daily total.

            </pre>
            <div class="div-hbh"><a class='a-h1h' href='/catagory'>Catagory</a></div>
        </div>
        <div class="div-h5h"> <img src="{{asset('img/track.jpg')}}">
            <pre>
            Stay in Control: Easily track your
            budget by category and always know
            your remaining balance

            </pre>
            <div class="div-hbh"><a class='a-h1h' href='/track'>Track</a></div>
        </div>


    </div>
    <x-footer></x-footer>
    <script type='text/javascript'>
        document.querySelector('.next').addEventListener('click', function() {
            document.querySelector('.img1h').style.visibility = 'hidden';
            document.querySelector('.img2h').style.visibility = 'visible';

        });
        document.querySelector('.prev').addEventListener('click', function() {
            document.querySelector('.img1h').style.visibility = 'visible';
            document.querySelector('.img2h').style.visibility = 'hidden';

        });
    </script>




</x-nav>