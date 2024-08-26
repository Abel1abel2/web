<x-nav>
    <link rel="stylesheet" type="text/css" href="{{ url('css/catagory.css') }}">
    <img class='img-c1' src="{{asset('img/c.jpg')}}" alt='not here'>
    <div class="div-c1">
        <h1>Select the catagory</h1>
        <p><span>day {{date('m/d/y')}} </span>expenditure information
            go to the section of expenditure by pressing the button
            below
        </p>
        <div class='div-c2'> <a href='#id-c1'>select</a></div>
    </div>
    <div class="div-c3">
        <p>you need to fill the catagory type and the expenditure
            amount before seeing your daily total expenditure
        </p>
    </div>

    <div class='div-c4' id='id-c1'>
        <div class='div-c5'>
            <img class='img-c2' src="{{asset('img/food.jpg')}}" alt="not here">
            <h3>food and drinks</h3>
            <form id='f1' class='form-c1' method='POST' action="/catagory">
                @csrf
                <label>Expense Type:</label>
                <br>

                <input type="radio" id="rent" name="rent">
                <label for="rent">Rent House/car</label><br>
                <input type="radio" id="food" name="food" value='food and drinks'>
                <label for="food">Food</label><br>
                <input type="radio" id="entertainment" name="entertainment">
                <label for="entertainment">Entertainment</label><br>
                <input type="radio" id="transport" name="transport">
                <label for="transport">Transportation</label><br>
                <br>
                <label>Expense Value:</label>
                <input class='i1 i-c' name="value1" type="text">
                <span>birr</span>


        </div>
        <div class='div-c5 dd'>
            <img class='img-c2' src="{{asset('img/rent.jpg')}}" alt="not here">
            <h3>Rent </h3>


            <div class='div-c7'>
                <label>Expense Type:</label>
                <br>
                <input type="radio" id="rent" name="rent" value='rent'>
                <label for="rent">Rent House/car</label><br>
                <input type="radio" id="food" name="food" value='food'>
                <label for="food">Food</label><br>
                <input type="radio" id="entertainment" name="entertainment" value='entertainment'>
                <label for="entertainment">Entertainment</label><br>
                <input type="radio" id="transport" name="transport" value='transport'>
                <label for="transport">Transportation</label><br>
                <br>
                <label>Expense Value:</label>
                <input class='i2 i-c' name="value2" type="text">
                <span>birr</span>
            </div>


        </div>
        <div class='div-c5'>
            <img class='img-c2' src="{{asset('img/taxi.jpg')}}" alt="not here">
            <h3>Transport</h3>


            <div class='div-c7'>
                <label>Expense Type:</label>
                <br>
                <input type="radio" id="rent" name="rent">
                <label for="rent">Rent House/car</label><br>
                <input type="radio" id="food" name="food">
                <label for="food">Food</label><br>
                <input type="radio" id="entertainment" name="entertainment">
                <label for="entertainment">Entertainment</label><br>
                <input type="radio" id="transport" name="transport" value='transport'>
                <label for="transport">Transportation</label><br>
                <br>
                <label>Expense Value:</label>
                <input class='i3 i-c' name="value3" type="text">
                <span>birr</span>
            </div>

        </div>
        <div class='div-c5 dn'>
            <img class='img-c2' src="{{asset('img/en.jpg')}}" alt="not here">
            <h3>Entertainment</h3>


            <div class='div-c7'>
                <label>Expense Type:</label>
                <br>
                <input type="radio" id="rent" name="rent">
                <label for="rent">Rent House/car</label><br>
                <input type="radio" id="food" name="food">
                <label for="food">Food</label><br>
                <input type="radio" id="entertainment" name="entertainment" value='entertainment'>
                <label for="entertainment">Entertainment</label><br>
                <input type="radio" id="transport" name="transport">
                <label for="transport">Transportation</label><br>
                <br>
                <label>Expense Value:</label>
                <input class='i4 i-c' name="value4" type="text">
                <span>birr</span>
            </div>

        </div>
        <div class='div-c5 di'>

            <h3 class='h3-c1'></h3>

            <button class='button-c2' type='submit' form='f1'>track</button>
        </div>

        </form>

    </div>
    <button class='button-c1'> Total expense</button>
    <x-footer></x-footer>
    <script src="{{url('js/catagory.js')}}" type='text/javascript'></script>

</x-nav>