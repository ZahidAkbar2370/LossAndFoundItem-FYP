@extends('Admin.layout')
@section('content')
    


<main id="main" class="main mb-5">

    <div class="pagetitle mb-3">
      <h1>Lost & Found List</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
         <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                  <!-- Bordered Table -->
                  <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Lost/Found</th>
                        <th scope="col">Date</th>
                        <th scope="col">image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if(!empty($items))
                        @foreach ($items as $key => $item)
                          <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->users->name ?? "" }}</td>
                            <td>{{ $item->item_name ?? "" }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td><span class="text-uppercase">{{ $item->status }}</span></td>
                            <td>{{ $item->date }}</td>
                            <td><img src="{{ asset('images/'.$item->image) }}" alt="" style="width: 50px"></td>
                            <td><span class="text-uppercase">{{ $item->lost_found_status }}</span></td>
                            <td><a href="{{ url('customer/trade-detail/'.$item->id) }}" class="btn btn-primary">View Detail</a></td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <!-- End Bordered Table -->
                </div>
              </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <br>
  <br>
  <br>
  <br>


@endsection