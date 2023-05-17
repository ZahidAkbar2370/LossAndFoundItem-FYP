@extends('layout')
@section("content")

<div class="container mt-5">
    <div class="row card p-3">
        <div class="card-header bg-white">
            <h3 class="card-text">Add Found Item</h3>
        </div>
            <div class="row p-3">
                <div class="col-12">
                    <h3 class="text-center mb-4">Item Detail</h3>
                    <form action="{{ URL::to('save-item') }}" method="post" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="type" value="found">

                        <div class="row">
                          <div class="col-6">
                            <input type="text" class="form-control" name="item_name" placeholder="Item Name" required>
                          </div>
                          <div class="col-6">
                            <select class="form-control" name="category" required>
                                <option>Item Category</option>
                                <option>Mobile</option>
                                <option>Bike</option>
                                <option>Car</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                              <input type="date" name="lost_date" class="form-control mt-2" required>
                            </div>
                            <div class="col-6">
                                <input type="file" name="image" class="form-control mt-2" required>
                            </div>
                          </div>
    
                        <div class="row mt-3">
                              <textarea class="form-control" name="description" placeholder="Item Description" required></textarea>
                        </div>
    
                        <div class="row mt-3">
                            <button class="btn btn-success">Add Found Item</button>
                      </div>
                      </form>
                </div>
            </div>
        </div>
    </div>



@endsection