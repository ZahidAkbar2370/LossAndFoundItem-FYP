@extends('CustomerPanel.layout')
@section('content')
    


<main id="main" class="main">

    <div class="pagetitle mb-3">
      <h1>Trade Detail</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">Invoice Details</h5>
    
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label ">Invoice #</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->invoice_no ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Created at</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->created_at ?? "1h" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Trading From</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->plateform ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">USD Price</div>
                              <div class="col-lg-9 col-md-8">${{ $tradeDetail->price_of_currency_in_usd ?? "12312" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Status</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->status ?? "pending" }}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Type</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->type ?? "buy" }}</div>
                            </div>
                        </div>
    
                        <div class="col-6">
                            <h5 class="card-title">Trade Details</h5>
    
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label ">From Currency</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->from_currency ?? "btc" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">To Currency </div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->to_currency ?? "usd" }}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Quanity</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->total_quantity ?? "1" }} <small>- {{ $tradeDetail->from_currency ?? "BTC" }}</small></div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">USD Price</div>
                              <div class="col-lg-9 col-md-8">${{ $tradeDetail->price_of_currency_in_usd ?? "32432" }}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Total Amount</div>
                              <div class="col-lg-9 col-md-8">${{ $tradeDetail->total_price ?? "3523423" }}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">{{ $tradeDetail->wallets->wallet_name ?? "" }}</div>
                              <div class="col-lg-9 col-md-8">{{ $tradeDetail->wallets->wallet_address ?? "" }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

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

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

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

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
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

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection