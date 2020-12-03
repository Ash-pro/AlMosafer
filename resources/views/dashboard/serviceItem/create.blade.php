@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            @if(isset($serviceItem)  )
                <h1>
                    <i class="fa fa-edit">
                        {{__('site.Update Services')}}
                    </i>
               </h1>
            @else
                <h1>
                    <i class="fa fa-plus">
                      {{__('site.Add Services')}}
                    </i>
                </h1>
            @endif

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">{{__('site.Dashboard')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.serviceItem.index')}}">{{__('site.Category')}}</a></li>
            @if(isset($serviceItem))
                <li class="breadcrumb-item">{{__('site.Update Services')}}</li>
            @else
                <li class="breadcrumb-item">{{__('site.Add Services')}}</li>
            @endif
        </ul>
    </div>

    <div class="tile mb-4">
        <div class="row">
            <div class="col-md-12">
             <form action="{{isset($serviceItem)?route('dashboard.serviceItem.update',$serviceItem->id):route('dashboard.serviceItem.store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                 @if(isset($serviceItem))
                     @method('put')
                 @else
                     @method('post')
                 @endif

                 @include('dashboard.partials._errors')

                 <div class="form-group">
                     @isset($serviceItem)
                         <label>{{__('site.icon')}} :</label><br><br>
                         <img width="100px" height="100px" src="{{asset('storage/'.$serviceItem->icon)}}" alt=""><br><br>
                         <input type="file" name="icon" class="form-control">
                     @else
                         <input type="file" name="icon" class="form-control" value="{{isset($serviceItem)?$WhoAreWe->icon:""}}">
                     @endisset
                 </div>

                 <div class="form-group">
                     <label>{{__('site.name')}} :</label>
                     <input type="text" name="name" class="form-control" value="{{isset($serviceItem)?$serviceItem->name:""}}">
                 </div>


                 <div class="form-group">
                     <label>{{__('site.Service Description')}} :</label>
                     <textarea name="description" cols="30" rows="10"  class="form-control">{{isset($serviceItem)?$serviceItem->description:""}}</textarea>
{{--                     <input type="text" name="description" class="form-control" value="{{isset($serviceItem)?$serviceItem->description:""}}">--}}
                 </div>

                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">
                         @if( isset($serviceItem) )
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
