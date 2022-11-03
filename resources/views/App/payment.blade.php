@extends('Layout.master')
<title>Unstack |Payment</title>

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Table area Start -->
        <div class="container-fluid" id="payment">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Striped Rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th class="hidden-sm">Last Name</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td class="hidden-sm">Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <span class="u-label bg-warning text-white">Expiring</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td class="hidden-sm">Thornton</td>
                                                <td>@fat</td>
                                                <td>
                                                    <span class="u-label bg-success text-white">Success</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td class="hidden-sm">the Bird</td>
                                                <td>@twitter</td>
                                                <td>
                                                    <span class="u-label bg-danger text-white">Error!</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>htmlstream</td>
                                                <td class="hidden-sm">Web Design</td>
                                                <td>@htmlstream</td>
                                                <td>
                                                    <span class="u-label bg-info text-white">Pending</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Striped Rows -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th class="hidden-sm">Last Name</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td class="hidden-sm">Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <span class="u-label bg-warning text-white">Expiring</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td class="hidden-sm">Thornton</td>
                                                <td>@fat</td>
                                                <td>
                                                    <span class="u-label bg-success text-white">Success</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td class="hidden-sm">the Bird</td>
                                                <td>@twitter</td>
                                                <td>
                                                    <span class="u-label bg-danger text-white">Error!</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>htmlstream</td>
                                                <td class="hidden-sm">Web Design</td>
                                                <td>@htmlstream</td>
                                                <td>
                                                    <span class="u-label bg-info text-white">Pending</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Bordered -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="basic-table-area">
                                <!--Basic Table-->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Description</th>
                                                <th>Locations</th>
                                                <th class="text-center">Status</th>
                                                <th>Contacts</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <h4 class="h6 g-mb-2">Lenovo Group</h4>
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl.</td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="fa fa-map-marker mr-2 font-16" aria-hidden="true"></i>
                                                        <span>389ZA2 DeClaudine, CA, USA</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-success btn-sm" href="#">
                                                        <i class="fa fa-arrows-v"></i>
                                                        Middle
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-14 mr-1"></i>
                                                        +1 4768 97655
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-14 mr-1"></i>
                                                        contact@lenovo.com
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle">
                                                    <h4 class="h6 g-mb-2">Samsung Electronics</h4>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">In consectetur adipiscing hac habitasse platea dictumst, curabitur hendrerit.</td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="fa fa-map-marker mr-2 font-16" aria-hidden="true"></i>
                                                        <span>738AD Lorena Spur, London, UK</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-danger btn-sm" href="#">
                                                        <i class="fa fa-level-up"></i>
                                                        High
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-14 mr-1"></i>
                                                        +44 7689 7655
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-14 mr-1"></i>
                                                        users@samsung.com
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle">
                                                    <h4 class="h6 g-mb-2">Sony Corp.</h4>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">To a general advertiser outdoor advertising is worthy of consideration..</td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="fa fa-map-marker mr-2 font-16" aria-hidden="true"></i>
                                                        <span>044C1 Port Dickson, BC, Canada</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                                        <i class="fa fa-sort-amount-desc"></i>
                                                        Deep
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-14 mr-1"></i>
                                                        +1 0739 3644
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-14 mr-1"></i>
                                                        clients@sony.com
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle">
                                                    <h4 class="h6 g-mb-2">Apple Inc.</h4>
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td>Create a list with all possible keywords that fit to your product, service or business..</td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="fa fa-map-marker mr-2 font-16" aria-hidden="true"></i>
                                                        <span>07W2 Donell Lodge, NY, USA</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-warning btn-sm" href="#">
                                                        <i class="fa fa-level-down"></i>
                                                        Down
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-14 mr-1"></i>
                                                        +1 6589-96451
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-14 mr-1"></i>
                                                        mail@appple.com
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle">
                                                    <h4 class="h6 g-mb-2">Dell Corporation</h4>
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">Consectetur ulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl.</td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="fa fa-map-marker mr-2 font-16" aria-hidden="true"></i>
                                                        <span>1A9WA4 Wanderben, Berlin, Germany</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-info btn-sm" href="#">
                                                        <i class="fa fa-bolt"></i>
                                                        Stabile
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-14 mr-1"></i>
                                                        +49 3868 4792
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-14 mr-1"></i>
                                                        clients@dell.com
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--End Basic Table-->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="basic-table-area">
                                <!--Basic Table-->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Contacts</th>
                                                <th>Rating</th>
                                                <th>Locations</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <img class="chat-img" src="img/member-img/1.png" data-toggle="tooltip" data-placement="top" data-original-title="Lina Zara" alt="Image">
                                                </td>
                                                <td class="align-middle">Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl.</td>
                                                <td class="align-middle">
                                                    <div class="progress h-6">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone mr-1 font-15"></i>
                                                        +1 4768 97655
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-15 mr-1"></i>
                                                        contact@lenovo.com
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                                        <span>389ZA2 DeClaudine, CA, USA</span>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <img class="chat-img" src="img/member-img/2.png" data-toggle="tooltip" data-placement="top" data-original-title="Jhon Deo" alt="Image">
                                                </td>
                                                <td class="align-middle">In consectetur adipiscing hac habitasse platea dictumst, curabitur hendrerit.</td>
                                                <td class="align-middle">
                                                    <div class="progress h-6">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-15 mr-1"></i>
                                                        +44 7689 7655
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-15 mr-1"></i>
                                                        users@samsung.com
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                                        <span>738AD Lorena Spur, London, UK</span>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <img class="chat-img" src="img/member-img/3.png" data-toggle="tooltip" data-placement="top" data-original-title="Lina Zara" alt="Image">
                                                </td>
                                                <td class="align-middle">To a general advertiser outdoor advertising is worthy of consideration..</td>
                                                <td class="align-middle">
                                                    <div class="progress h-6">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-15 mr-1"></i>
                                                        +1 0739 3644
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-15 mr-1"></i>
                                                        clients@sony.com
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                                        <span>044C1 Port Dickson, BC, Canada</span>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <img class="chat-img" src="img/member-img/4.png" data-toggle="tooltip" data-placement="top" data-original-title="Jhon David" alt="Image">
                                                </td>
                                                <td>Create a list with all possible keywords that fit to your product, service or business..</td>
                                                <td class="align-middle">
                                                    <div class="progress h-6">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-15 mr-1"></i>
                                                        +1 6589-96451
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-15 mr-1"></i>
                                                        mail@appple.com
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                                        <span>07W2 Donell Lodge, NY, USA</span>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <img class="chat-img" src="img/member-img/5.png" data-toggle="tooltip" data-placement="top" data-original-title="Hazla Mita" alt="Image">
                                                </td>
                                                <td class="align-middle">Ulla consectetur ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl.</td>
                                                <td class="align-middle">
                                                    <div class="progress h-6">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block mb-10">
                                                        <i class="icon-phone font-15 mr-1"></i>
                                                        +49 3868 4792
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="icon-envelope font-15 mr-1"></i>
                                                        sayhi@pinterest.com
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="fa fa-star-o text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                    <i class="fa fa-star text-warning font-14"></i>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                                                        <span>1A9WA4 Wanderben, Berlin, Germany</span>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!--End Basic Table-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Basic Tables</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>RATE</th>
                                                <th>SKILL</th>
                                                <th>TYPE</th>
                                                <th>LOCATION</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/1.png" alt="">Jhon Right</td>
                                                <td>$18/hr</td>
                                                <td class="text-bold-500">UI/UX</td>
                                                <td>Remote</td>
                                                <td>Dhaka,Taxes</td>
                                                <td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/2.png" alt="">Ajoy Vanblum</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Graphic concepts</td>
                                                <td>Remote</td>
                                                <td>India,Taxes</td>
                                                <td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/3.png" alt="">Smith Blogz</td>
                                                <td>$14/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td>Remote</td>
                                                <td>Austin,Texas</td>
                                                <td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/4.png" alt="">Ashley Jhon</td>
                                                <td>$18/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td>Remote</td>
                                                <td>USA,Taxes</td>
                                                <td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/5.png" alt="">Lara Mice</td>
                                                <td>$17/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td>Remote</td>
                                                <td>Austin,Texas</td>
                                                <td><a href="#"><i class="icon-envelope font-15 btn btn-info btn-circle"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Basic Table</h4>
                            <p class="mb-30">Add class <code>.table</code></p>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td><span class="badge badge-danger badge-pill">admin</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td><span class="badge badge-info badge-pill">member</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td><span class="badge badge-warning badge-pill">developer</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td><span class="badge badge-success badge-pill">supporter</span> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td><span class="badge badge-info badge-pill">member</span> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td><span class="badge badge-success badge-pill">supporter</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Striped Table</h4>
                            <p class="mb-30">Add class <code>.table-striped</code></p>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                User
                                            </th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Progress
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-2.jpg" alt="image">
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-25 bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-3.jpg" alt="image">
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-50 bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-4.jpg" alt="image">
                                            </td>
                                            <td>
                                                John Richards
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-75 bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-5.jpg" alt="image">
                                            </td>
                                            <td>
                                                Peter Meggik
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-25 bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-6.jpg" alt="image">
                                            </td>
                                            <td>
                                                Edward
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-50 bg-danger" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                May 03, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-7.jpg" alt="image">
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-15 bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 123.21
                                            </td>
                                            <td>
                                                April 05, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="chat-img" src="img/member-img/team-8.jpg" alt="image">
                                            </td>
                                            <td>
                                                Henry Tom
                                            </td>
                                            <td>
                                                <div class="progress h-5">
                                                    <div class="progress-bar w-100 bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 150.00
                                            </td>
                                            <td>
                                                June 16, 2015
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="basic-table">
                                <!-- Table Schedule -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Sunday</th>
                                            </tr>
                                        </thead>

                                        <tbody class="g-font-size-12 g-color-black-opacity-0_6 g-font-weight-600">
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Yoga</th>
                                                <td>07:00 - 08:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>15:00 - 17:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>09:00 - 11:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Pilates</th>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>08:00 - 10:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>13:00 - 15:00</td>
                                                <td>10:00 - 12:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Crossfit</th>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>07:00 - 08:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>17:00 - 18:30</td>
                                                <td>11:00 - 13:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>11:00 - 13:00</td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Cardio</th>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>07:00 - 08:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>15:00 - 17:00</td>
                                                <td>09:00 - 11:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Zumba</th>
                                                <td>06:00 - 09:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>11:00 - 14:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>07:00 - 08:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>09:00 - 12:00</td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Boxing</th>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>07:00 - 08:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>15:00 - 17:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>09:00 - 11:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="g-color-black-opacity-0_8" scope="row">Straching</th>
                                                <td>11:00 - 14:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>16:00 - 19:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                                <td>10:00 - 12:00</td>
                                                <td>
                                                    <i class="fa fa-minus"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Schedule -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 height-card box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Basic Table</h6>
                            <p class="mb-30">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>LAST NAME</th>
                                            <th>USERNAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>Larry</td>
                                            <td>Kikat</td>
                                            <td>@lakitkat</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 height-card box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Hoverable Table</h6>
                            <p class="mb-30">Add class <code>.table-hover</code></p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>LAST NAME</th>
                                            <th>USERNAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>Larry</td>
                                            <td>Kikat</td>
                                            <td>@lakitkat</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('Includes.footer')
    </div>
</div>
@endsection
