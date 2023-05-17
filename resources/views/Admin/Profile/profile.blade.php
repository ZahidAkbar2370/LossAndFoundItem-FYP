@extends('Admin.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle mb-3">
            <h1>Profile</h1>
        </div><!-- End Page Title -->

        {{-- @if (Session::has('message'))
            <p class="bg-success p-2">{{ Session::get('message') }}</p>
        @endif --}}

        <section class="section profile">
            <div class="row">
                {{-- <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="#" alt="Profile"
                                class="rounded-circle mb-3">
                            <h2>{{ Auth::user()->name ?? '' }}</h2>
                            <h6>Since: {{ Auth::user()->created_at ?? '' }}</h6>
                        </div>
                    </div>

                </div> --}}

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3"> 
                            @if (Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                {{-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#update-image">Update Image</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Settings</button>
                                </li> --}}

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                   <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name ?? '' }}</div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Mobile # </div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->mobile_no ?? '+923081312527' }}
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email ?? '' }} <small
                                                class="text-success">(verified)</small></div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->address ?? '' }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">City</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->city ?? '' }}</div>
                                    </div> --}}
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ URL::to('admin/update-profile') }}"
                                        method="post">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName"
                                                    value="{{ Auth::user()->name ?? ''}}">
                                            </div>
                                        </div>

                                        {{-- <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                    value="{{ Auth::user()->address ?? ''}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    value="{{ Auth::user()->mobile_no ?? ''}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ Auth::user()->email ?? ''}}" readonly disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">City</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="city" type="city" class="form-control" id="city"
                                                    value="{{ Auth::user()->city ?? ''}}">
                                            </div>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>
                                </form>



                                {{-- <div class="tab-pane fade pt-3" id="update-image">

                                    <!-- Settings Form -->
                                    <form action="{{ url('customer/update-image') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Select Image</label>

                                                <div class="col-md-8 col-lg-9">
                                                    <input name="avatar" type="file" class="form-control" id="fullName">
                                                </div>
                                            
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Upload Image</button>
                                        </div>
                                    </form><!-- End settings Form -->

                                </div> --}}


                                {{-- <div class="tab-pane fade pt-3" id="profile-settings">

                                    <!-- Settings Form -->
                                    <form action="{{ url('customer/customer-setting') }}" method="post">
                                        @csrf
                                        
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="change_alert" id="changesMade" @if(!empty($customerSetting->settings) && $customerSetting->settings->change_alert == "on") checked @endif
                                                    >
                                                    <label class="form-check-label" for="changesMade">
                                                        Changes made to your account
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="proOffers" name="offer_alert" @if(!empty($customerSetting->settings) && $customerSetting->settings->change_alert == "on") checked @endif>
                                                    <label class="form-check-label" for="proOffers">
                                                        Marketing and promo offers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="security_alert" id="securityNotify"
                                                        checked disabled>
                                                    <label class="form-check-label" for="securityNotify">
                                                        Security alerts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End settings Form -->

                                </div> --}}

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form action="{{ url('admin/update-password') }}" method="post">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
