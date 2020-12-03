@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> {{__('site.All Services')}} </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
            <li class="breadcrumb-item"> {{__('site.All Services')}} </li>
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
                                <input type="text" name="search" autofocus class="form-control" placeholder="Search" value="{{request()->search}}">
                            </div>
                        </div>{{-- end-of-col-4 --}}


                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
                                    @if(auth()->user()->hasPermission('create_serviceItem'))
                                        <a href="{{route('dashboard.serviceItem.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                                    @else
                                        <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
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
                @if($serviceItem->count() > 0 )
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('site.icon')}}</th>
                            <th>{{__('site.name')}}</th>
                            <th>{{__('site.description')}}</th>
                            <th>{{__('site.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($serviceItem as $index=>$serviceIm)
                            <tr>
                                <td>{{++$index}}</td>
                                <td width="200px"><img width="100px" height="50px" src="{{asset('storage/'.$serviceIm->icon)}}" alt=""></td>
                                <td>{{$serviceIm->name}}</td>
                                <td>{{\Illuminate\Support\Str::limit($serviceIm->description, 50)}}</td>
                                <td>
                                    {{--Edit buttom--}}
                                    @if(auth()->user()->hasPermission('update_serviceItem'))
                                        <a href="{{route('dashboard.serviceItem.edit', $serviceIm->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a>
                                    @else
                                        <a href="#" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit">{{__('site.Edit')}}</i></a>
                                    @endif

                                    {{--Delete buttom--}}
                                    @if(auth()->user()->hasPermission('delete_serviceItem'))
                                        <form action="{{route('dashboard.serviceItem.destroy', $serviceIm->id)}}" method="post" style="display: inline-block">
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
                    {{$serviceItem->appends(request()->query())->links()}}
                @else
                    <h3 style="font-weight: 400; text-align: center"> No Record Found</h3>
                @endif
            </div>
        </div>
    </div>{{--end-of-tile mb-4--}}


@endsection
