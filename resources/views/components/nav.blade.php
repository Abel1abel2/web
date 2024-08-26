<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Track</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/nav.css') }}">



</head>



<nav>
    <div class="div1">
        <ul class="ul1">
            <li class="li1 ln1"> <a href="/" class="a1 an">home</a></li>
            <li class="li2 ln1"> <a href="/budgets" class="a2 an">budget</a></li>
            <li class="li3 ln1"> <a href="/track" class="a3 an">track</a></li>
            <li class="li4 ln1"><a href="/catagory" class="a4 an">catagory</a></li>
            <li class="li5 ln1"><a href="/about" class="a5 an">about</a></li>
            @guest <li class="li6 ln1" class="li1"><a href="/loginuser" class="a6 an">login</a></li>
            <li class='li7 ln1'>

                <a href="/signup" class="a4 an">signup</a>

            </li>
            @endguest
            @auth
            <form method='POST' action='/logout'>
                @csrf
                <li class="li8 ln1"><button class='n-b1' type="submit">logout</button></li>
            </form>
            @endauth


        </ul>
        <div>

</nav>
{{$slot}}



</html>
