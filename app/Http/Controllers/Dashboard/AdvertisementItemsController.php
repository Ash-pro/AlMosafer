<?php

namespace App\Http\Controllers\Dashboard;

use App\AdvertisementItems;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementItemsController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "dashboard.advertisementItems.";

        //Permissions
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create','store']);
        $this->middleware('permission:update_categories')->only(['edit','update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);

    }

    public function index()
    {
        $AdvertisementItems = AdvertisementItems::WhenSearch(request()->search)->paginate(5);
        return view($this->path.'index',compact('AdvertisementItems'));
    }//end of index

    public function create()
    {
        return view($this->path.'create');
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:advertisement_items,name',
        ]);
        AdvertisementItems::create($request->all());
        session()->flash('success',__('site.DataAddSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of store

    public function edit(AdvertisementItems $AdvertisementItems)
    {
        return view($this->path.'create',compact('AdvertisementItems'));
    }//end of edit

    public function update(Request $request, AdvertisementItems $AdvertisementItems)
    {
        $request->validate([
            'description' => 'required|unique:categories,description,'.$AdvertisementItems->id,
        ]);
        $AdvertisementItems->update($request->all());
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(AdvertisementItems $AdvertisementItems)
    {
        $AdvertisementItems->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
