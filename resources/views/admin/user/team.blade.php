@extends('admin.layout.mono')

@section('content')

<div class="row">
    <div class="col-xl-4">
        <div class="card card-default">
            <div class="card-header">
                <h2>Progress</h2>
            </div>

            <div class="card-body pt-3 pb-4">
                <div class="circle circle-lg" data-size="200" data-value="0.83" data-thickness="20" data-fill="{
            &quot;color&quot;: &quot;#35D00E&quot;
          }">
                    <div class="circle-content">
                        <h2 class="text-uppercase font-weight-bold">83%</h2>

                        <strong></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="card card-default">
            <div class="card-header">
                <h2>Team Activity</h2>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All time
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="javascript:void(0)">1 Day ago</a>
                        <a class="dropdown-item" href="javascript:void(0)">7 Day ago</a>
                        <a class="dropdown-item" href="javascript:void(0)">15 Day ago</a>
                        <a class="dropdown-item" href="javascript:void(0)">1 month ago</a>
                    </div>
                </div>
            </div>

            <div class="card-body" data-simplebar style="height: 241px;">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action border-0">
                        <div class="media media-xs mb-0">
                            <div class="media-xs-wrapper bg-primary">
                                <i class="mdi mdi-star-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Emma Smith</span>
                                <p>Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months
                                    do things
                                    on at.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-0">
                        <div class="media media-xs mb-0">
                            <div class="media-xs-wrapper bg-success">
                                <i class="mdi mdi-pencil"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Emily Disuja</span>
                                <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion
                                    perfectly ye
                                    consisted so.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-0">
                        <div class="media media-xs mb-0">
                            <div class="media-xs-wrapper bg-danger">
                                <i class="mdi mdi-square-edit-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Roger Forstt</span>
                                <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he
                                    an to he roof only.
                                    Music
                                    leave say doors him.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-0">
                        <div class="media media-xs mb-0">
                            <div class="media-xs-wrapper bg-info">
                                <i class="mdi mdi-diamond-outline"></i>
                            </div>
                            <div class="media-body">
                                <span class="title">Aaron Varta</span>
                                <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection
                                    abilities the. As hastened
                                    oh
                                    produced prospect formerly up am.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/user-md-1.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Emma Smith</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.90" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>90%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.65" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>65%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.35" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>25%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/user-md-2.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Sophia Amanda</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.70" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>70%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.20" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>20%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.95" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>95%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/user-md-3.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Emily Disuja</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.15" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>15%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.80" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>80%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.40" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>40%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/user-md-4.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">William Camble</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.55" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>55%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="1" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>100%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.20" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>20%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/user-md-5.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Albrecht Straub</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.15" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>15%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.40" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>40%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.80" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>80%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/u6.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Kean Barn</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.95" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>95%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.25" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>25%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.65" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>65%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/u7.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Sophia Amanda</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.70" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>70%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.20" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>20%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.95" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>95%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-7">
            <div class="card-body text-center">
                <a class="d-block mb-2" href="javascript:void(0)" data-toggle="modal" data-target="#modal-contact">
                    <div class="image mb-3 d-inline-flex mt-n8">
                        <img src="images/user/u8.jpg" class="img-fluid rounded-circle d-inline-block" alt="Avatar Image">
                    </div>

                    <h5 class="card-title">Emily Disuja</h5>
                </a>

                <ul class="list-unstyled d-inline-block mb-5">
                    <li class="d-flex mb-1">
                        <i class="mdi mdi-map mr-1"></i>
                        <span>Nulla vel metus 15/178</span>
                    </li>
                    <li class="d-flex">
                        <i class="mdi mdi-email mr-1"></i>
                        <span>exmaple@email.com</span>
                    </li>
                </ul>

                <div class="row justify-content-center">
                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.15" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fe5461&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">html</h6>
                                <h6>15%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.80" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#35D00E&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">css</h6>
                                <h6>80%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 px-1">
                        <div class=" circle" data-size="60" data-value="0.40" data-thickness="4" data-fill="{
                &quot;color&quot;: &quot;#fec400&quot;
              }">
                            <div class="circle-content">
                                <h6 class="text-uppercase">js</h6>
                                <h6>40%</h6>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Modal -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-end border-bottom-0">
                <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-pencil"></i>
                </button>

                <div class="dropdown">
                    <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                    </div>
                </div>

                <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>

            <div class="modal-body pt-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="profile-content-left px-4">
                            <div class="card text-center px-0 border-0">
                                <div class="card-img mx-auto">
                                    <img class="rounded-circle" src="images/user/u6.jpg" alt="user image">
                                </div>

                                <div class="card-body">
                                    <h4 class="py-2">Albrecht Straub</h4>
                                    <p>Albrecht.straub@gmail.com</p>
                                    <a class="btn btn-primary btn-pill btn-lg my-4" href="javascript:void(0)">Follow</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="text-center pb-4">
                                    <h6 class="pb-2">1503</h6>
                                    <p>Friends</p>
                                </div>

                                <div class="text-center pb-4">
                                    <h6 class="pb-2">2905</h6>
                                    <p>Followers</p>
                                </div>

                                <div class="text-center pb-4">
                                    <h6 class="pb-2">1200</h6>
                                    <p>Following</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-info px-4">
                            <h4 class="mb-1">Contact Details</h4>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                            <p>Albrecht.straub@gmail.com</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>+99 9539 2641 31</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                            <p>Nov 15, 1990</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                            <p>Lorem, ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection