@extends('layouts.app')

@section('content')

  <div id="offers-page">

    <div class="content-box">
      <div class="row">
        {{-- FORM --}}
        <div class="col-md-8 offset-md-2">
          {{-- TITLE --}}
          <h1>Sign Up To Notifications For Deals </h1>
          {{-- FORM --}}
          <form>
            {{-- FIRST AND LAST NAME --}}
            <div class="row">
              <div class="col-md-6">
                {{-- FIRST NAME --}}
                <div class="form-group">
                  <label for="fnameInput">First Name: </label>
                  <input type="text" class="form-control" name="fname" id="fnameInput" placeholder="John">
                </div>
              </div>
              <div class="col-md-6">
                {{-- LAST NAME --}}
                <div class="form-group">
                  <label for="lnameInput">Last Name: </label>
                  <input type="text" class="form-control" name="lname" id="lnameInput" placeholder="Doe">
                </div>
              </div>
            </div>
            {{-- EMAIL AND PHONE --}}
            <div class="row">
              <div class="col-md-6">
                {{-- EMAIL --}}
                <div class="form-group">
                  <label for="emailInput">Email Address: </label>
                  <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                {{-- PHONE NUMBER --}}
                <div class="form-group">
                  <label for="phoneInput">Phone Number: </label>
                  <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="555-555-5555">
                </div>
              </div>
            </div>
            <div class="row">
              {{-- TERMS & CONDITONS AGREEMENT --}}
              <div class="col-md-6">
                <div class="form-group">
                  <p>
                    In signing up I acknowledge that i am 18 years of age or older, and want to receive email offers from Billy Burgers, and if i select join Dine Rewards, agree to the terms and conditions of the program.
                  </p>
                </div>
              </div>
              {{-- CONFIRM BUTTON --}}
              <div class="col-md-6">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection