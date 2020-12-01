@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            @if(isset($donation)  )
                <h1>
                    <i class="fa fa-edit">
                        {{ __('site.Update Donation')}}
                    </i>
               </h1>
            @else
                <h1>
                    <i class="fa fa-plus">
                          {{__('site.Add Donation') }}
                    </i>
                </h1>
            @endif

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">{{__('site.Dashboard')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.donations.index')}}">{{__('site.Donations')}}</a></li>
            @if(isset($donation))
                <li class="breadcrumb-item">{{__('site.Update Donation')}}</li>
            @else
                <li class="breadcrumb-item">{{__('site.Add Donation')}}</li>
            @endif
        </ul>
    </div>

    <div class="tile mb-4">
        <div class="row">
            <div class="col-md-12">
             <form action="{{isset($donation)?route('dashboard.donations.update',$donation->id):route('dashboard.donations.store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                 @if(isset($donation))
                     @method('put')
                 @else
                     @method('post')
                 @endif

                 @include('dashboard.partials._errors')
                 {{--Name of Dontions--}}
                 <div class="form-group">
                     <label>{{__('site.name')}} :</label>
                     <input type="text" name="name" class="form-control" placeholder="PLZ write Name of Donations" value="{{isset($donation)?$donation->name:""}}">
                 </div>

                 {{--Type Of Donations--}}
                <div class="form-group">
                    <label> {{__('site.Type Of Donations')}} :</label>
                    <input type="text" name="type_of_Donation" class="form-control" placeholder="PLZ write Type Of Donations" >
                </div>

                 {{--Number of Piece--}}
                 <div class="form-group">
                    <label> {{__('site.Number of Piece')}} :</label>
                    <input type="number" min="1"  name="number_of_piece" class="form-control" placeholder="PlZ fill Number of Piece">
                </div>

                {{--stock--}}
                <div class="form-group">
                    <input type="hidden" name="stock" class="form-control" value="number">
                </div>

                 {{--image--}}
                 <div class="form-group">
                     <label> {{__('site.Choose Main Photo For you Donation')}} :</label>
                     <input type="file" name="image" class="form-control">
                 </div>

                 {{--anther Image--}}
                 <div class="form-group">
                     <label>{{__('site.Anther image')}}  :</label>
                     <input type="file" name="anther_image" class="form-control">
                     <span style="font-size:12px; color: red "><b> This filed is optional</b></span>
                 </div>

                {{--Status of Donations--}}
                <div class="form-group">
                    <label>{{__('site.Status of This Donations ( appear or Disappear )')}}</label>
                    <select name="status" class="form-control" >
                        <option value="0">{{__('site.Disappear')}}</option>
                        <option value="1">{{__('site.Appear')}}</option>
                    </select>
                </div>

                 {{--Sender Name--}}
                 <div class="form-group">
                     <label>{{__('site.Name of the donor of the donation')}}</label>
                     <input type="text" name="senderUser_id" class="form-control" value="" placeholder="PLZ write The Sender Name">
                 </div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">
                         @if( isset($donation) )
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
