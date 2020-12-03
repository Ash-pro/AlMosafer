<?php

namespace App\Http\Controllers\Dashboard;

use App\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "dashboard.advertisement.";

        //Permissions
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create','store']);
        $this->middleware('permission:update_categories')->only(['edit','update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);

    }

    public function index()
    {
        $advertisements = Advertisement::WhenSearch(request()->search)->paginate(5);
        return view($this->path.'index',compact('advertisements'));
    }//end of index

    public function create()
    {
        return view($this->path.'create');
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|unique:advertisements,description',
        ]);
        Advertisement::create($request->all());
        session()->flash('success',__('site.DataAddSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of store

    public function edit(Advertisement $advertisements)
    {
        return view($this->path.'create',compact('advertisements'));
    }//end of edit

    public function update(Request $request, Advertisement $advertisements)
    {
        $request->validate([
            'description' => 'required|unique:advertisements,description,'.$advertisements->id,
        ]);
        $advertisements->update($request->all());
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(Advertisement $advertisements)
    {
        $advertisements->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
