

@extends('index')

@section('title', 'Home')

@section('content')
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?homes')">


  <div class="container">
    @if(Auth::user())

      
      <h1 class="display-4">Welcome back, {{ Auth::user()->nickname}}!</h1>
      
      <p class="lead">Best shop for reservation management.</p>
      
      <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
    
    @else
      
      <h1 class="display-3">Reservation management made easy.</h1>
      
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, perferendis minus, voluptas sed maxime dignissimos aut nisi perspiciatis tempore unde qui illum, sint expedita eligendi. Assumenda inventore perspiciatis saepe dolores?</p>
      
      <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of accomodation</a>
    @endif              
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comfort</h5>
                    <p class="card-text">Manage all your hotel reservations in one place</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Low prices</h5>
                    <p class="card-text">We have special discounts at the best hotels</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Book and manage with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection