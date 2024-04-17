@extends('layouts.template')
@section('title', 'Contact |')
@section('content')
<div class="content-container">
    <div class="containerrr">
        <h1>Contact Us</h1>
        <div class="contact-info">
          <div>
            <h3>Address</h3>
            <p>123 Main Street<br>City, State ZIP Code</p>
          </div>
          <div>
            <h3>Phone</h3>
            <p>(123) 456-7890</p>
          </div>
          <div>
            <h3>Email</h3>
            <p>contact@example.com</p>
          </div>
        </div>
        <div class="contact-form">
          <form action="#" method="POST">
            <input class="nnn" type="text" name="name" placeholder="Your Name" required>
            <input class="nnn" type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input class="sub" type="submit" value="Send Message">
          </form>
        </div>
      </div>
</div>
@endsection