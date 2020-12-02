@extends('layouts.dashboard.app')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Consultation Requests</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
            <li class="breadcrumb-item">{{__('site.Consultation Requests')}}</li>
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
                                <a href="{{route('dashboard.consultation_requests.index')}}" class="btn btn-success"><i class="fa fa-trash"></i> Clear</a>
{{--                                @if(auth()->user()->hasPermission('create_consultation_requests'))--}}
{{--                                    <a href="{{route('dashboard.consultation_requests.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>--}}
{{--                                @else--}}
{{--                                    <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>--}}
{{--                                @endif--}}
                            </div>
                        </div>{{-- end-of-col-4 --}}


                    </div>{{-- end-of-row --}}
                </form>{{-- end-of-form --}}

            </div>{{-- end-of-col-12 --}}
        </div>{{--end-of-row--}}

        <div class="row">
            <div class="col-md-12">
                <hr>
                @if($consultation_requests->count() > 0 )
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('site.name')}}</th>
                            <th>{{__('site.Email')}}</th>
                            <th>{{__('site.Phone Number')}}</th>
                            <th>{{__('site.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($consultation_requests as $index=>$consultation_request)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$consultation_request->name}}</td>
                                <td>{{$consultation_request->email}}</td>
                                <td>{{$consultation_request->number}}</td>
                                <td>
                                    {{--Edit buttom--}}
{{--                                    @if(auth()->user()->hasPermission('update_consultation_requests'))--}}
{{--                                        <a href="{{route('dashboard.consultation_requests.edit', $consultation_request->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a>--}}
{{--                                    @else--}}
{{--                                        <a href="#" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit">{{__('site.Edit')}}</i></a>--}}
{{--                                    @endif--}}

                                    {{--Delete buttom--}}
                                    @if(auth()->user()->hasPermission('delete_consultation_requests'))
                                        <form action="{{route('dashboard.consultation_requests.destroy', $consultation_request->id)}}" method="post" style="display: inline-block">
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
                    {{$consultation_requests->appends(request()->query())->links()}}
                @else
                    <h3 style="font-weight: 400; text-align: center"> No Record Found</h3>
                @endif
            </div>
        </div>
    </div>{{--end-of-tile mb-4--}}


@endsection
