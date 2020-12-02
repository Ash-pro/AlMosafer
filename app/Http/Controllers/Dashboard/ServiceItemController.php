<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\ServiceItem;
use Illuminate\Http\Request;

class ServiceItemController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "dashboard.serviceItem.";

        //Permissions
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create','store']);
        $this->middleware('permission:update_categories')->only(['edit','update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);

    }

    public function index()
    {
       $serviceItem = ServiceItem::WhenSearch(request()->search)->paginate(5);
        return view($this->path.'index',compact('serviceItem'));
    }//end of index

    public function create()
    {
        return view($this->path.'create');
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:service_items,name',
        ]);

        ServiceItem::create($request->all());
        session()->flash('success',__('site.DataAddSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of store

    public function edit(ServiceItem $serviceItem)
    {
        return view($this->path.'create',compact('serviceItem'));
    }//end of edit

    public function update(Request $request, ServiceItem $serviceItem)
    {
        $request->validate([
            'name' => 'required|unique:service_items,name,'.$serviceItem->id,
        ]);
        $serviceItem->update($request->all());
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(ServiceItem $serviceItem)
    {
        $serviceItem->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
