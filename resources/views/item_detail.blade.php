@extends('layout')
@section('content')
    


<main id="main" class="main">

    <div class="pagetitle mb-3">
    </div><!-- End Page Title -->
    
    <section class="section profile">
        <div class="row">
            
            <div class="col-10 offset-1">
                {{-- <a href="{{ url('my-items') }}" class="btn btn-primary mb-2">Back</a> --}}
                <div class="card">
              <div class="card-header bg-white">
                <h3>Item Detail</h3>
              </div>
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <div class="row mt-4">
                        <div class="col-7">
                            <h5 class="card-title">Item Details</h5>
    
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label "><strong>ID:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->id ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label"><strong>Created at:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->created_at ?? "1h" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label"><strong>Item Name:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->item_name ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label"><strong>Item Category:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->category_name ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label"><strong>Type:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->status ?? "pending" }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-5 label"><strong>Status:</strong></div>
                                <div class="col-lg-8 col-md-7">{{ $item->lost_found_status ?? "pending" }}</div>
                              </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-5 label"><strong>Lost/Found Date:</strong></div>
                              <div class="col-lg-8 col-md-7">{{ $item->date ?? "buy" }}</div>
                            </div>
                        </div>
    
                        <div class="col-5">
                            <h5 class="card-title">User Details</h5>
    
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label ">User Name:</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->name ?? "" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label">Email</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->email ?? "" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label">Contact #</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->mobile_no ?? "" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-5 label">Country</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->country ?? "" }}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-5 label">City</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->city ?? "" }}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-5 label">Address</div>
                              <div class="col-lg-8 col-md-7">{{ $item->users->address ?? "" }}</div>
                            </div>
                        </div>


                        <div class="col-12 mt-5">
                            <h5 class="card-title">Description</h5>
    
                            <div class="row">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit repellendus ducimus nobis tempore hic soluta porro voluptatibus dolor debitis! Architecto quaerat saepe dignissimos iste ipsam neque cumque nemo autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio a, voluptatibus, earum laudantium possimus nisi libero necessitatibus, omnis harum saepe laboriosam repudiandae veritatis? Aliquam similique necessitatibus alias hic labore voluptates?</p>
                            </div>
                        </div>

                        <div class="col-12 mt-5">
                            <h5 class="card-title">Image</h5>
    
                            <div class="row">
                              <img src="{{ asset('images/'.$item->image) }}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('customerdesign/assets/img/profile-img.jpg') }}" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Zahid Akbar">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestiae nemo, doloribus, eos error ratione corporis facilis culpa quasi natus expedita officia, perspiciatis nobis sed qui placeat rerum officiis autem!</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="Pakistan">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="Ward # 5, Layyah">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="+923081312527">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="zahidjakhar2370@gmail.com" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div> --}}

                {{-- <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
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

                {{-- <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div> --}}

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection