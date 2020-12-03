@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            @if(isset($advertisementItem)  )
                <h1>
                    <i class="fa fa-edit">
                        {{__('site.UpdateAdvertisement')}}
                    </i>
               </h1>
            @else
                <h1>
                    <i class="fa fa-plus">
                        {{__('site.AddAdvertisement')}}
                    </i>
                </h1>
            @endif

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">{{__('site.Dashboard')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.advertisementItems.index')}}">{{__('site.Advertisement')}}</a></li>
            @if(isset($advertisementItem))
                <li class="breadcrumb-item">{{__('site.UpdateAdvertisement')}}</li>
            @else
                <li class="breadcrumb-item">{{__('site.AddAdvertisement')}}</li>
            @endif
        </ul>
    </div>

    <div class="tile mb-4">
        <div class="row">
            <div class="col-md-12">
             <form action="{{isset($advertisementItem)?route('dashboard.advertisementItems.update',$advertisementItem->id):route('dashboard.advertisementItems.store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                 @if(isset($advertisementItem))
                     @method('put')
                 @else
                     @method('post')
                 @endif

                 @include('dashboard.partials._errors')

                 <div class="form-group">
                     <label>{{__('site.title')}} :</label>
                     <input type="text" name="name" class="form-control" value="{{isset($advertisementItem)?$advertisementItem->name:""}}">
                 </div>


                 <div class="form-group">
                     <label>{{__('site.description')}} :</label>
                     <textarea name="description" cols="30" rows="10"  class="form-control">{{isset($advertisementItem)?$advertisementItem->description:""}}</textarea>
{{--                     <input type="text" name="description" class="form-control" value="{{isset($advertisementItem)?$advertisementItem->description:""}}">--}}
                 </div>

                 <div class="form-group">
                     <label>{{__('site.photo')}} :</label><br><br>
                     @isset($advertisementItem)
                         <img width="100px" height="100px" src="{{asset('storage/'.$advertisementItem->photo)}}" alt=""><br><br>
                         <input type="file" name="photo" class="form-control">
                     @else
                         <input type="file" name="photo" class="form-control" value="{{isset($advertisementItem)?$advertisementItem->photo:""}}">
                     @endisset
                 </div>


                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">
                         @if( isset($advertisementItem) )
                             <i class="fa fa-edit"></i>
                             {{__('site.Update')}}
                         @else
                             <i class="fa fa-plus"></i>
                             {{__('site.Add')}}
                         @endif

                     </button>
                 </div>
             </form>

            </div>{{-- end-of-col-12 --}}
        </div>{{--end-of-row--}}


    </div>{{--end-of-tile mb-4--}}


@endsection
