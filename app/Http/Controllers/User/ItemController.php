<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user_id = Auth::user()->id ?? 1;

        $items = Item::where("user_id", $user_id)->get();
        if(isset($_GET["lost_found_status"])){
            $lost_found_status = $_GET["lost_found_status"];

            $items = Item::where("user_id", $user_id)->where("lost_found_status", $lost_found_status)->get();
        }

        return view('my_items', ["items" => $items]);
    }
    public function create()
    {
        return view('add_item');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $profileImage = 'item.png';
        if ($imageUpload = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $imageUpload->getClientOriginalExtension();
            $imageUpload->move($destinationPath, $profileImage);
        }

        Item::create([
            'user_id' => $user_id,
            'item_name' => $request->item_name,
            'category_name' => $request->category,
            'date' => $request->lost_date,
            'image' => $profileImage,
            'description' => $request->description,
            'status' => $request->type,
        ]);

        Session::flash("message", "Lost Item Added, we are Searching ...");
        return redirect("my-items");
    }

    public function itemDetail($id)
    {
        $item = Item::where("id", $id)->with("users")->first();

        return view('item_detail', ["item" => $item]);
    }

    public function foundItem()
    {
        return view('add_found_item');
    }

    public function itemEdit($id)
    {
        $item = Item::where("id", $id)->first();

        return view('item_edit', ["item" => $item]);
    }

    public function itemDelete($id)
    {
        $item = Item::find($id);
        $item->delete();

        Session::flash("message", "Item Deleted Successfully!");
        return redirect()->back();
    }
      
    public function updateItem(Request $request)
    {
        $items = Item::find($request->id);
        $items->item_name = $request-> item_name;
        // dd('here');
        $items->category = $request->category;
        $items->lost_date = $request->lost_date;
        // $items->image = $request->image;
        $items->description = $request->description;

        $items->update();

        Session::flash("message", "Items Updated Successfully!");
        return redirect("my-items");
    }

    public function itemFound($id)
    {
        $item = Item::find($id);
        $item->lost_found_status = "found";
        $item->update();    

        Session::flash("message", "Item Updated Successfully!");
        return redirect('my-items');
    }

    public function itemDeliver($id)
    {
        $item = Item::find($id);
        $item->lost_found_status = "deliver";
        $item->update();

        Session::flash("message", "Item Updated Successfully!");
        return redirect('my-items');
    }
}
