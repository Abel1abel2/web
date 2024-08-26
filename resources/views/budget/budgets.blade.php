<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/budget.css') }}">

    <div class="div-2">
        <h1 class='h-1'>budget for your future</h1>
        <div class='div-3'>
            <div class='box-1'>
                <img class='img-1' src="{{asset('img/how.jpg')}}" alt="not here">
            </div>
            <div class="box-1">
                <h2 class=content>How to make Budget: here's your guide</h2>
                <p class='content p-1'>making budget is crutial for future sucess</p>
                <p class='content p-2'> you can learn how to budget here </p>
                <a class='content a-1' href='#wo'>Read Guide</a>
            </div>




        </div>
        <div class='div-4'>
            <img class='img-2' src="{{asset('img/cre1.png')}}" alt="not here">
            <div class="div-6">
                <h3> Create your monthly budget here </h3>

                <div class='div-7'> <a href='/create'>create a budget</a></div>
            </div>

        </div>
        <img class='img-2 ni' src="{{asset('img/v1.png')}}" alt="not here">
        <div class="div-6 ndiv">
            <h3> view your current budget </h3>

            <div class='div-7 ndiv'> <a href='/show'>view a budget</a></div>

        </div>
        <div class='wow' id='wo'>
            <pre>
            Introducing our intuitive budget management platform. With just a few clicks,
            you can create a personalized spending plan that aligns with your financial goals.
            Once your budget is set, easily access it to view your income, expenses, and current balance,
            giving you a clear picture of your financial standing.

            Before tracking your expenses, select the appropriate category for each transaction. Our intuitive
            system makes it simple to classify your spending, allowing you to gain valuable insights and identify
            opportunities to optimize your budget. As you input transactions, your balance is automatically updated
            in real-time, empowering you to make informed decisions. Take control of your finances and achieve
            your goals with our comprehensive budget management platform
</pre>
        </div>
        <x-footer></x-footer>


    </div>

    </script>

</x-nav>