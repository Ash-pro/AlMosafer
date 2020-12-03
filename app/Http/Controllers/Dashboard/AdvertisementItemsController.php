<?php

namespace App\Http\Controllers\Dashboard;

use App\AdvertisementItems;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        AdvertisementItems::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'photo'=>$request->photo->store('images','public'),
        ]);
        session()->flash('success',__('site.DataAddSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of store

    public function edit(AdvertisementItems $advertisementItem)
    {
        return view($this->path.'create',compact('advertisementItem'));
    }//end of edit

    public function update(Request $request, AdvertisementItems $advertisementItem)
    {
        $request->validate([
            'name' => 'required|unique:advertisement_items,name,'.$advertisementItem->id,
        ]);


        $data = $request->only(['name','description']);
        if ($request->hasFile('photo')){
            $photo = $request->photo->store('images','public');
            Storage::disk('public')->delete($advertisementItem->photo);
            $data['photo'] = $photo;
        }
        $advertisementItem->update($data);

//        $advertisementItem->update([
//            'name'=>$request->name,
//            'description'=>$request->description,
//            'photo'=>$request->photo->store('images','public'),
//        ]);
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(AdvertisementItems $advertisementItem)
    {
        $advertisementItem->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
