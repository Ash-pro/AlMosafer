<?php

namespace App\Http\Controllers\Dashboard;

use App\Donation;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "dashboard.donations.";

        //Permissions
        $this->middleware('permission:read_donations')->only(['index']);
        $this->middleware('permission:create_donations')->only(['create','store']);
        $this->middleware('permission:update_donations')->only(['edit','update']);
        $this->middleware('permission:delete_donations')->only(['destroy']);

    }

    public function index()
    {
        $users = User::all();
        $donations = Donation::WhenSearch(request()->search)->paginate(5);
        return view($this->path.'index',compact('donations','users'));
    }//end of index

    public function create()
    {
        return view($this->path.'create');
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:donations,name',
        ]);
        Donation::create($request->all());
        session()->flash('success',__('site.DataAddSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of store

    public function show(Donation $donation)
    {
        $users = User::all();
        return view($this->path.'show',compact('donation','users'));
    }//end of show

    public function edit(Donation $donation)
    {
        return view($this->path.'create',compact('donation'));
    }//end of edit

    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$donation->id,
        ]);
        $donation->update($request->all());
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(Donation $donation)
    {
        $donation->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
