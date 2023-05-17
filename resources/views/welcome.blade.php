@extends('layout')
@section("content")

    <div class="container-fluid" style="background-image: url('3.png'); height: 500px; background-size: cover; background-repeat: no-repeat; background-position: center">
        <div class="row p-0">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">We’ve created 142,017 happy losers!</h1>
                <h4 class="text-center text-white mt-3">TLost reunites people with Lost & Found property</h4>

                <form action="" method="post">
                <div class="row" style="margin-top: 140px">
                        <div class="col-6 offset-4 text-center">
                            <div class="input-group text-center">
                                {{-- <input type="text" class="form-control" placeholder="Search Item: Mobile, Tab ...">
                                <button type="submit" class="btn btn-success">Search</button> --}}
                                {{-- <input type="text" class="form-control"> --}}
                                <a href="{{ url('add-item') }}" class="btn btn-danger ml-5 text-center">Lost Something</a>
                                <a href="{{ url('add-found-item') }}" class="btn btn-primary ml-5 text-center">I've found something</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="text-center">How <span class="text-primary">TLost</span> Work</h1>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('register.png') }}" style="height: 190px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Sign Up</h5>
                      <p class="card-text">Register at Tlove to Start finding Lost Item.</p>
                      <a href="#">Register</a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('verify.png') }}" style="height: 190px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Verifiy Account</h5>
                      <p class="card-text">After, register verification required through Email.</p>
                      <a href="#">Account</a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('item.png') }}" style="height: 190px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Add Item</h5>
                      <p class="card-text">Now you can add Lost or found item into listing.</p>
                      <a href="#">Add Item</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 text-center p-5">
                <h3 class="text-center">Register your valuables with TLost. So you can start searching from the moment you lose something.</h3>

                <a href="#" class="btn btn-primary mt-3">Register Your Valuable</a>
            </div>
        </div>
    </div>

    {{-- <div class="container mb-5">
        <marquee width="100%" direction="left">
                <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                          <p class="card-text">Perfect Service</p>
                        </div>
                      </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                          <p>
                            Quite good but also a <br> little frustrating
                          </p>
                        </div>
                      </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                          <p>Register at Tlove to Start finding <br> Lost Item.</p>
                        </div>
                      </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                          <p>Register at Tlove to Start finding <br> Lost Item.</p>
                        </div>
                      </div>
                </div>
                </div>
            </div>
                </marquee>
           
    </div> --}}

    <div class="container mb-3">
        <div class="row card p-3 bg-warning">
            <div class="col-10 offset-1">
                <h3 class="text-center mb-4">Contact Us</h3>
                @if (Session::has('messages'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('messages') }}</p>
            @endif
                <form action="{{ url('contact-us') }}" method="POST">
                  @csrf
                    <div class="row">
                      <div class="col-6">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="col-6">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div>

                    <div class="row mt-3">
                          <textarea class="form-control" name="message" placeholder="Message"></textarea>
                    </div>

                    <div class="row mt-3">
                        <button type="submit" class="btn btn-success">Send Message</button>
                  </div>
                  </form>
            </div>
        </div>
    </div>

@endsection