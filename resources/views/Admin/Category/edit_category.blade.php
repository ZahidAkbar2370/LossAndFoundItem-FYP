@extends('Admin.layout')
@section('content')
    


<main id="main" class="main mb-5">

    <div class="pagetitle mb-3">
      <h1>Edit Category</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
         <div class="col-xl-12">

            <div class="card">

                <div class="card-body">
                  {{-- <h5 class="card-title">New Category</h5> --}}
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3" action="{{ URL::to('admin/update-category') }}" method="post">
                    @csrf

                        <input type="hidden" name="id" value="{{ $editCategory->id }}">

                      <div class="col-md-6">
                        <label for="inputState" class="form-label"><b>Category Name</b></label><br>
                        <input type="text" class="form-control" value="{{ $editCategory->category_name }}" name="category_name" required>

                      </div>

                    <div class="text-left mt-5">
                      <button type="submit" class="btn btn-primary">Save Change</button>
                      {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                    </div>
                  </form><!-- End Multi Columns Form -->
    
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