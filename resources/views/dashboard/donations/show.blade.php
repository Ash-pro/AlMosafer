
@extends('layouts.dashboard.app')
@section('content')
    <div class="app-title">
        <div>
            <h1>
                <i class="fa fa-eye">
                  {{__('site.Show Donations Details') }}
                </i>
            </h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list"></i></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">{{__('site.Dashboard')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.donations.index')}}">{{__('site.All Donations')}}</a></li>
            <li class="breadcrumb-item">{{__('site.Details')}}</li>
        </ul>
    </div>

    <div class="row user">
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#Donation-Item" data-toggle="tab">{{__('site.Details of Donation Item')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Benefactor-Details" data-toggle="tab">{{__('site.Benefactor Details')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Needies-list" data-toggle="tab">{{__('site.Needies list')}}</a></li>
                </ul>
            </div>{{-- End of tile p-0 --}}
        </div> {{-- End of col-md-3 --}}

        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="Donation-Item">
                    <div class="timeline-post">
                        <div class="post-media">
                            <a href="#">
                                <img style="width: 400px; height: 200px" src="http://lorempixel.com/400/200/"></a>
                            <div class="content">
                                <h5> <span class="ml-3" style="font-size: 30px">Name :  <a href="#">John Doe</a></span></h5>
                                <p class="text-muted"><span class="ml-3">Date :</span><small class="ml-3" >2 January at 9:30</small><br>
                               <span class="ml-3">time :</span><small class="ml-3" >2 January at 9:30</small></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">
                                    <div class="widget-small primary coloured-icon" style="background-color: #bed5ec;"><i class="icon fa fa-archive fa-3x" style="font-size: 20px;"><span style="margin-left: 5px">The quantity in stock</span> </i>
                                        <div class="info"style="text-align: center" >
                                            <h4><b> 5 </b></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="widget-small danger coloured-icon " style="background-color: #bed5ec;"><i class="icon" style="font-size: 25px" >Category</i>
                                        <p style="font-size: 20px; text-align: left; margin: auto"><b> name </b></p>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-6" >
                                    <div class="widget-small danger coloured-icon " style="background-color: #bed5ec;"><i class="icon" style="font-size: 25px">Sub Category</i>
                                            <p style="font-size: 20px; text-align: left; margin: auto"><b> name </b></p>
                                    </div>
                                </div>
                                {{-- image Gallary--}}
                                <!--Carousel Wrapper-->
                                <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(105).jpg" alt="First slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive">This is the first title</h3>
                                                <p>First text</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!--Mask color-->
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(115).jpg" alt="Second slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive">Thir is the second title</h3>
                                                <p>Secondary text</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!--Mask color-->
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive">This is the third title</h3>
                                                <p>Third text</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                         </div>
                 </div>
                </div>{{-- End of tab-pane active -- Donation-Item --}}
                <div class="tab-pane fade" id="Benefactor-Details">

                    <div class="tile user-settings">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="post-media mb-4"><a href="#"><img  style="width: 200px ; height: 100px" src="http://lorempixel.com/200/100/"></a> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    <h3><span>name</span><a href="#"> : John Doe</a></h3>
                                    <div class="text-muted">
                                        <h5>
                                            email :<a href="#"> john@gmail.com</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                         </div>

                        <h4 class="line-head">Details</h4>
                        <form>

                            <div class="row">
                                <div class="col-md-8 mb-4">
                                    <label>Address</label>
                                    <input class="form-control" type="text" readonly value="Address">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" readonly value="Mobile No">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Number Of all Donate</label>
                                    <input class="form-control" readonly type="text" value="Number Of all Donate">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Type of This Donate</label>
                                    <input class="form-control" readonly type="text" value="Type of This Donate">
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                                </div>
                            </div>
                        </form>


                    </div>{{-- End of tab-pane fade --}}
                </div> {{-- End of tab-pane active -- Donation-Item --}}
                <div class="tab-pane fade" id="Needies-list">
                    <div class="tile user-settings">
                        <h4 class="line-head">List of All User Requested of this Donation</h4>
                        <div class="col-md-12">
                            <div class="tile" style="border: black solid 1px">
                                <h3 class="tile-title">All Users</h3>
                                @if($users->count() > 0 )
                                    <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>His Message</th>
                                        <th>Is Account trusted</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      @foreach( $users as $index=>$user )
                                        <td>{{$index+1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{Str::limit($user->email,8)}}</td>
                                        <td><h3 class="badge badge-info"> trusted </h3></td>
                                        <td></td>
                                      @endforeach
                                    </tr>

                                    </tbody>
                                </table>
                                @else
                                    <h3 style="font-weight: 400; text-align: center"> No Record Found</h3>
                                @endif
                            </div>
                        </div>
                    </div>{{-- End of tab-pane fade --}}
                </div> {{-- End of tab-pane fade -- Needies-list --}}
            </div> {{-- End of tap contant --}}
        </div>{{-- End of col-md-9 --}}
    </div>{{--end-of-row user class --}}




@endsection
