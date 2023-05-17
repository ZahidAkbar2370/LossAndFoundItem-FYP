@extends('layout')
@section("content")

<div class="container mt-5">
    <div class="row p-3">
        <div class="col-6 card offset-3">
                <div class="card-header bg-white">
                    <h3 class="card-text">My Account</h3>
                    @if(Session::has("message"))
                        <p class="bg-success p-2">{{ Session::get("message") }}</p>
                    @endif
                </div>
                <div class="row p-3">
                <div class="col-12">
                    <form action="{{ URL::to('update-profile') }}" method="post">
                      @csrf
                        <div class="row">
                          <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ Auth::user()->name ?? '' }}" required>
                          </div>
                          <div class="col-12 mb-2">
                            <input type="email" class="form-control" name="email" readonly placeholder="Email Address" value="{{ Auth::user()->email ?? '' }}" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6 mb-2">
                            <input type="text" placeholder="Role" name="role" class="form-control mt-2" value="{{ Auth::user()->role ?? '' }}" required readonly>
                          </div>
                          <div class="col-6 mb-2">
                            <input type="text" placeholder="Mobile #" name="mobile_no" class="form-control mt-2" value="{{ Auth::user()->mobile_no ?? '' }}" required>
                          </div>
                            <div class="col-6 mb-2">
                              <input type="text" placeholder="Country" name="country" class="form-control mt-2" value="{{ Auth::user()->country ?? '' }}" required>
                            </div>
                            <div class="col-6 mb-2">
                              <input type="text" placeholder="City" name="city" class="form-control mt-2" value="{{ Auth::user()->city ?? '' }}" required>
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" name="address" placeholder="Address" class="form-control mt-2" value="{{ Auth::user()->address ?? '' }}" required>
                            </div>
                          </div>
    
    
                        <div class="row mt-3">
                            <button class="btn btn-success">Update Profile</button>
                      </div>
                      </form>
                </div>
            </div>
            </div>
        </div>
    </div>



@endsection