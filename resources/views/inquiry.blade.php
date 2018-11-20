@extends('layouts.master')

@section('title')

Salman Sajun - Home

@endsection

@section('content')

<div class="page-wrapper">

    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                
                <h1>Join Our Team</h1>
                <p>Drop all your information here</p>

            </div>

            <div class="col-md-6">
                
                <form action="/action_page.php">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="contact">Contact #:</label>
                      <input type="number" class="form-control" id="contact" placeholder="Enter your contact" name="contact">
                    </div>
                    <div class="form-group">
                      <label for="contact">Organization/Institute:</label>
                      <input type="text" class="form-control" id="organization" placeholder="Enter your organization/institute" name="organization">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

            </div>

            <div class="col-md-6">
                
                    <div class="form-group">
                      <label for="message">Enter Message:</label>
                      <textarea rows="9" class="form-control" id="message" placeholder="Enter your message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="contact">Attach Documents:</label>
                      <input type="file" class="form-control-file" value="Hix" id="exampleFormControlFile1">
                    </div>

            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

            <div class="divider"></div>

        </div>
    </div>

</div>

@endsection
