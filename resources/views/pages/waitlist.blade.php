@extends('layouts.app')

@section('content')

  <div id="waitlist-page">

    <div class="content-box">
      <div class="row">
        {{-- FORM --}}
        <div class="col-md-6">
          {{-- TITLE --}}
          <h1>Get on The List</h1>
          {{-- FORM --}}
          <form>
            {{-- EMAIL --}}
            <div class="form-group">
              <label for="emailInput">Email Address: </label>
              <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
            </div>
            {{-- PHONE NUMBER --}}
            <div class="form-group">
              <label for="phoneInput">Phone Number: </label>
              <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="555-555-5555">
            </div>
            {{-- NUMBER OF GUEST --}}
            <div class="form-group">
              <label for="guests">How Many Guests: </label>
              <select name="guests" class="form-control" id="guestsInput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            {{-- DATE AND TIME --}}
            <div class="form-group">
              {{-- LABEL --}}
              <label for="timeInput">Date & Time: </label>
              <div class="input-group mb-3">
              {{-- TIME --}}
              <select name="time" class="form-control" id="timeInput">
                <option value="6">6:00 PM</option>
                <option value="7">7:00 PM</option>
                <option value="8">8:00 PM</option>
                <option value="9">9:00 PM</option>
                <option value="10">10:00 PM</option>
              </select>
            </div>
            {{-- CONFIRM BUTTON --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <p>Pleas Note: This is not a reservation. You will be added to the current waitlist. You may have a short wait once you arrive while we prepare your table. </p>
        </div>

      </div>
    </div>
  </div>

@endsection