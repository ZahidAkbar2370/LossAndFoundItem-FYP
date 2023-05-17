@extends('Admin.layout')
@section('content')
    


<main id="main" class="main mb-5">

    <div class="pagetitle mb-3">
      <h1>Category List</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
         <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                  @if(Session::has("message"))
                    <p class="bg-success p-2 text-white">{{ Session::get("message") }}</p>
                  @endif
                  <!-- Bordered Table -->
                  <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if(!empty($categories))
                        @foreach ($categories as $key => $category)
                          <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $category->category_name ?? "" }}</td>
                            <td style="width: 170px"><a href="{{ url('admin/edit-category/'.$category->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('admin/delete-category/'.$category->id) }}" class="btn btn-danger">Delete</a></td>
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