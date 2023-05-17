@extends('layout')
@section("content")

<div class="container mt-5">
    <div class="row card p-3">
        <div class="card-header bg-white">
            <h1 class="card-text">My Lost/Found Items</h1>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($items))
                    @foreach($items as $key => $item)
                      <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->date }}</td>
                        <td><img src="{{ asset('images/'.$item->image) }}" style="width: 90px"></td>
                        <td><span class="text-uppercase">{{ $item->status }}</span></td>
                        <td><span class="text-uppercase">{{ $item->lost_found_status }}</span></td>
                        <td>
                            <a href="{{ url('item-detail', $item->id) }}" class="btn btn-success">Detail</a>
                            <a href="{{ url('edit-item', $item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-item', $item->id) }}" class="btn btn-danger">Delete</a>

                            @if($item->status == "lost" && $item->lost_found_status == "pending")
                              <a href="{{ url('item-found', $item->id) }}" class="btn btn-success">Mark as Found</a>
                            @elseif($item->status == "found" && $item->lost_found_status == "pending")
                              <a href="{{ url('item-deliver', $item->id) }}" class="btn btn-success">Mark as Deliver</a>
                            @endif
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
              
        </div>
    </div>
</div>



@endsection