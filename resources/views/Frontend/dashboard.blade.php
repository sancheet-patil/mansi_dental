@extends('layouts.layout')
@section('frontend')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-xl-3">
        
        <div class="card">
            <div class="card-body">
                <div class=" d-flex justify-content-between">
                    <img src="../assets/images/widgets/monthly-re.png" alt="" height="75">
                    <div class="align-self-center">
                        <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                        <h4 class="title-text mb-0">Monthly Revenue</h4>
                    </div>
                </div>
                <div class="d-flex justify-content-between bg-purple p-3 mt-3 rounded">
                    <div>
                        <h4 class="mb-1 font-weight-semibold text-white font-20">$10255</h4>
                        <p class="text-white mb-0">Card Balance</p>
                    </div>
                    <div>
                        <h4 class=" mb-1 font-weight-semibold text-white font-20">25.12 <small>BTC</small></h4>
                        <p class="text-white mb-0">Crypto Balance</p>
                    </div>
                </div>                                    
            </div><!--end card-body-->
        </div><!--end card--> 
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Emails Report</h4>
                <div class="">
                    <div id="d2_performance" class="apex-charts"></div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->                            
    </div><!-- end col-->
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img src="../assets/images/users/user-1.png" alt="" class="thumb-md rounded-circle mr-2">                                       
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-1">Welcome back, Lucy Peterson</h4>
                        <p class="text-muted mb-0 font-14 pr-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div><!--end media-body-->
                </div><!--end media-->
                <div class="welcome-img">
                    <img src="../assets/images/widgets/w-2.svg" alt="" height="120" class="mt-n4 mr-5 d-none d-lg-block">    
                </div>                                       
            </div><!--end card-body--> 
        </div><!--end card-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-smile rounded-circle bg-soft-success"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">Happy Customers</p>
                                <h3 class="mb-0">63k</h3>
                            </div><!-- end col-->
                        </div><!-- end row-->                                                                                  
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-user rounded-circle bg-soft-pink"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">New Customers</p>
                                <h3 class="mb-0">10k</h3>                                            
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-handshake rounded-circle bg-soft-purple"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">New Deals</p>
                                <h3 class="mb-0">720</h3>                                            
                            </div><!-- end col-->
                        </div><!-- end row-->                                                                                     
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div><!--end col-->
            <div class="col-sm-3">
                <div class="card crm-data-card">                                        
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="far fa-registered rounded-circle bg-soft-warning"></i>
                                </div>
                            </div><!-- end col-->
                            <div class="col-8 text-right">
                                <p class="text-muted font-14">New Register</p>
                                <h3 class="mb-0">964</h3>
                                
                            </div><!-- end col-->
                        </div><!-- end row-->
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Leads and Vendors</h4>
                <div id="CrmDashChart" class="flot-chart"></div>                                
            </div><!--end card-body--> 
        </div><!--end card-->  
    </div><!-- end col-->
</div><!--end row-->

<div class="row">                        
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Leads By Country</h4>
                <div class="row">
                    <div class="col-lg-8">
                        <div id="world-map-markers" class="crm-dash-map drop-shadow-map"></div>
                    </div><!--end col-->
                    <div class="col-lg-4 align-self-center">                                           
                        <div class="">
                            <span class="text-secondary">USA</span>
                            <small class="float-right text-muted ml-3 font-13">81%</small>
                            <div class="progress mt-2" style="height:3px;">
                                <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <span class="text-secondary">Greenland</span>
                            <small class="float-right text-muted ml-3 font-13">68%</small>
                            <div class="progress mt-2" style="height:3px;">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%; border-radius:5px;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>   
                        <div class="mt-3">
                            <span class="text-secondary">Australia</span>
                            <small class="float-right text-muted ml-3 font-13">48%</small>
                            <div class="progress mt-2" style="height:3px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 48%; border-radius:5px;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <span class="text-secondary">Brazil</span>
                            <small class="float-right text-muted ml-3 font-13">32%</small>
                            <div class="progress mt-2" style="height:3px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 32%; border-radius:5px;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>        
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->                            
    </div><!--end col-->

    <div class="col-xl-4">                            
        <div class="card">
            <div class="card-body dash-info-carousel">
                <h4 class="mt-0 header-title mb-4">New Leads</h4>
                <div id="carousel_2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="media">
                                <img src="../assets/images/users/user-1.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                <div class="media-body align-self-center">                                                          
                                    <h4 class="mt-0 mb-1 title-text text-dark">Important Watch</h4>
                                    <p class="text-muted mb-0">Python Devloper</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="media">
                                <img src="../assets/images/users/user-2.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                <div class="media-body align-self-center">                                                           
                                    <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                    <p class="text-muted mb-0">Python Devloper</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="media">
                                <img src="../assets/images/users/user-3.jpg"  class="mr-2 thumb-lg rounded-circle" alt="...">
                                <div class="media-body align-self-center">                                                          
                                    <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                    <p class="text-muted mb-0">Python Devloper</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row my-3">
                    <div class="col-sm-6">
                        <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-secondary"></i>New Leads</p>                            
                    </div><!-- end col-->
                    <div class="col-sm-6">
                        <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-warning"></i>New Leads Target</p>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="progress bg-warning mb-3" style="height:5px;">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-0 text-muted text-truncate align-self-center"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Up From Last Week</p>
                    <button type="button" class="btn btn-gradient-primary btn-sm">Leads Report</button>
                </div>
                <div class="bg-light p-3 mt-3 d-flex justify-content-between">
                    <div>
                        <h2 class="mb-1 font-weight-semibold">402</h2>
                        <p class="text-muted mb-0">New Leads Won</p>
                    </div>
                    <div class="img-group align-self-center">
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a class="user-avatar user-avatar-group" href="#">
                            <img src="../assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                        </a>
                        <a href="" class="avatar-box thumb-xs align-self-center">
                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+25</span>
                        </a>    
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div><!-- end col-->                                                    
</div><!--end row-->  

<div class="row"> 
    <div class="col-lg-4">
        <div class="card">                                       
            <div class="card-body"> 
                <h4 class="header-title mt-0 mb-3">Activity</h4>
                <div class="slimscroll crm-dash-activity">
                    <div class="activity">
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 w-75">Task finished</h6>
                                    <span class="text-muted d-block">10 Min ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                    <a href="#" class="text-info">[more info]</a>
                                </p>
                            </div>
                        </div> 

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-timer-off bg-soft-pink"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0  w-75">Task Overdue</h6>
                                    <span class="text-muted">50 Min ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                    <a href="#" class="text-info">[more info]</a>
                                </p>
                                <span class="badge badge-soft-secondary">Design</span>
                                <span class="badge badge-soft-secondary">HTML</span>  
                            </div>
                        </div>
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0  w-75">New Task</h6>
                                    <span class="text-muted">10 hours ago</span>
                                </div> 
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                    <a href="#" class="text-info">[more info]</a>
                                </p>
                            </div>
                        </div>   

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">New Comment</h6>
                                    <span class="text-muted">Yesterday</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                    <a href="#" class="text-info">[more info]</a>
                                </p>     
                            </div>
                        </div>  
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">New Lead Miting</h6>
                                    <span class="text-muted">14 Nov 2019</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                    <a href="#" class="text-info">[more info]</a>
                                </p> 
                            </div>
                        </div>                                                                                                              
                    </div><!--end activity-->
                </div><!--end crm-dash-activity-->
            </div>  <!--end card-body-->                                     
        </div><!--end card--> 
    </div><!--end col-->                              
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Leads Report</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Lead</th>
                                <th>Email</th>
                                <th>Phone No</th>                                                    
                                <th>Company</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr><!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td><img src="../assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Starbucks coffee</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>                                                                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td><img src="../assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Mac Donald</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td><img src="../assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Life Good</td>
                                <td> <span class="badge badge-md badge-soft-danger">Lost</span></td>
                                <td>                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td><img src="../assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Flipcart</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr--> 
                            <tr>
                                <td><img src="../assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Adidas</td>
                                <td> <span class="badge badge-md badge-soft-primary">Follow Up</span></td>
                                <td>                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td><img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Reebok</td>
                                <td> <span class="badge badge-md badge-soft-success">Converted</span></td>
                                <td>                                                       
                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr><!--end tr-->                                    
                        </tbody>
                    </table>                    
                </div>  
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->                        
</div><!--end row-->

@stop