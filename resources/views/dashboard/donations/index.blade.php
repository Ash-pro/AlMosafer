@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> {{__('site.Donations')}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">{{__('site.Dashboard')}}</a></li>
            <li class="breadcrumb-item">{{__('site.Donations')}}</li>
        </ul>
    </div>

    <div class="tile mb-4">
        <div class="row">
            <div class="col-md-12">
                {{-- this form for Search button                --}}
                <form action="" >
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="search" name="search" autofocus class="form-control" placeholder="Search" value="{{request()->search}}">
                            </div>
                        </div>{{-- end-of-col-4 --}}


                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
                                @if(auth()->user()->hasPermission('create_donations'))
                                    <a href="{{route('dashboard.donations.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                                @else
{{--                                    <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>--}}
                                @endif
                            </div>
                        </div>{{-- end-of-col-4 --}}


                    </div>{{-- end-of-row --}}
                </form>{{-- end-of-form --}}

            </div>{{-- end-of-col-12 --}}
        </div>{{--end-of-row--}}

        <div class="row">
            <div class="col-md-12">
                <hr>
                @if($donations->count() > 0 )
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('site.name')}}</th>
                            <th>{{__('site.Status')}}</th>
                            <th>{{__('site.Sender Donation')}}</th>
                            <th>{{__('site.Needy Donation')}}</th>
{{--                            <th>{{__('site.image')}}</th>--}}
                            <th><span class="ml-lg-5">{{__('site.action')}}</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donations as $index=>$donation)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$donation->name}}</td>
                                <td><span class="badge badge-info">{{$donation->status == 1 ?'Active': 'non Active'}}</span></td>
                                <td>
                                    @foreach( $users as $user )
                                        {{$user->id ==$donation->senderUser_id ? $user->name:'' }}
                                     @endforeach
                                </td>
                                <td>
                                    @foreach( $users as $user )
                                        {{$user->id ==$donation->needleUser_id ? $user->name:'' }}
                                    @endforeach
                                </td>
{{--                                <td>{{$donation->image}}</td>--}}
                                <td>

                                    {{--Show buttom--}}
                                    @if(auth()->user()->hasPermission('read_donations'))
                                        <a href="{{route('dashboard.donations.show', $donation->id)}}" class="btn btn-primary btn-sm "><i class="fa fa-eye"><span class="ml-1">{{__('site.Details')}}</span></i></a>
                                    @else
                                        <a href="#" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit">{{__('site.Edit')}}</i></a>
                                    @endif

                                    {{--Edit buttom--}}
                                    @if(auth()->user()->hasPermission('update_donations'))
                                        <a href="{{route('dashboard.donations.edit', $donation->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a>
                                    @else
                                        <a href="#" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit">{{__('site.Edit')}}</i></a>
                                    @endif

                                    {{--Delete buttom--}}
                                    @if(auth()->user()->hasPermission('delete_donations'))
                                        <form action="{{route('dashboard.donations.destroy', $donation->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i>{{__('site.Delete')}}</button>
                                        </form>
                                    @else
                                        <a href="#" disabled="" class="btn btn-danger btn-sm"><i class="fa fa-edit">{{__('site.Delete')}}</i></a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    {{$donations->appends(request()->query())->links()}}
                @else
                    <h3 style="font-weight: 400; text-align: center"> No Record Found</h3>
                @endif
            </div>
        </div>
    </div>{{--end-of-tile mb-4--}}


@endsection
