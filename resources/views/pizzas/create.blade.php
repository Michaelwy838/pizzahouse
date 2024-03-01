@extends('layout.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="wrapper">
        <div class="pizzas">
            <h1>Order a new Pizza</h1>
            <form action="/pizzas" method="POST" >
                @csrf
                <input type="text" name="name" id="" placeholder="Name">
                <label for="type">Choose Pizza Type</label>
                <select name="type" id="">
                    <option value="margherita">Margherita</option>
                    <option value="haiwaian">Haiwaian</option>
                    <option value="veg supreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
                <label for="base">Choose Base Type</label>
                <select name="base" id="">
                    <option value="cheesy crust">Cheesy Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="thick">Thick</option>
                </select>
                <fieldset>
                    <label for="">Toppings:</label><br>
                    <input type="checkbox" name="toppings[]" id="" value="mushrooms">Mushrooms<br>
                    <input type="checkbox" name="toppings[]" id="" value="peppers">Peppers<br>
                    <input type="checkbox" name="toppings[]" id="" value="garlic">Garlic<br>
                    <input type="checkbox" name="toppings[]" id="" value="olives">Olives


                </fieldset>
                <input type="submit" value="Order Pizza">
            </form>
            <a href="/">Cancel</a>
        </div>
    </div>
</div>
@endsection