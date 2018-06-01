@extends('admin.superadmin.app')

@section('content')
  

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>

<!----------------- /.conainer-fluid start -------------- -->   
    <!--main content-->
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="card" style="background:none;border:none;">
              <div class="add_vertisment">
                <a href="#"><img src="img/ad.jpg" alt="advertisment banner estelmet" class="img-responsive"></a>
                <div class="card-actions" style="position: absolute;top: 0px;right: 2px;">
                  <a href="#" class="btn-close" style="color:white;text-decoration:none;"><i class="icon-close"></i></a>
                </div>
              </div>
            </div>  
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="avatar">
                      <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="avatar-status badge-success"></span>
              
                    </div>
                    <span>&nbsp;Abdul</span>
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">My site &nbsp;|&nbsp;</a><a href="#">My Favourites</a></p>
        
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">My Business Card (2)</a></p>
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">Membership &nbsp;Upgrade (0)</a></p>
                  </div>
                </div>
                  
              </div>
                <div class="card-body">
          <div class="row" >
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Sells Actvities (0)</h6>
                            <p>Manage Your Sales & Increase Your Bid</p>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Message Center</h6>
                            <p>New Messages (2)&nbsp;&nbsp; Spam (12)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Inventory Reports</h6>
                            <p>Manage Inventory(2)&nbsp;&nbsp;&nbsp; View Inventory(21)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-sm-3">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-window-close-o" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Rejected Request</h6>
                            <p>cancel Request(0)&nbsp;&nbsp;&nbsp;&nbsp; View Request(1)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                
          </div>
                  <!--/.row-->
        </div>
            </div>
        
        <div class="card">
          <div class="card-body">
            <i class="fa fa-hand-paper-o"></i>&nbsp;Hi Abdul. Please complete your personalized profile to enjoy & access to selected & verified Trade Assurance sellers, and more.&nbsp;
            <span>
            <a href="#" class="btn btn-danger active" style="border-radius: 5px;margin-left:10px;margin-top:2px;">Personalize Now</a>
            </span>
              <div class="card-actions" style="position: absolute;top: 0px;right: 2px;">
                <a href="#" class="btn-close"><i class="icon-close"></i></a>
              </div>
          </div>
        </div>
        
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-3">
                    <span class="badge badge-primary badge-pill"></span>
                      <strong>Purchase Inventory</strong>
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">My site &nbsp;|&nbsp;</a><a href="#">My Favourites</a></p>
        
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">My Business Card (2)</a></p>
                  </div>
                  
                  <div class="col-sm-3">
                    <p><a href="#">Membership &nbsp;Upgrade (0)</a></p>
                  </div>
                </div>
                  
              </div>
                <div class="card-body">
          <div class="row" >
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Puchase Actvities(9)</h6>
                            <p>Manage Your Purchase & Increase Trade Leads</p>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Manage Tenders</h6>
                            <p>New Messages (2)&nbsp;&nbsp; Spam (12)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-3" style="border-right:1px solid #C0C2C4;">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>Manage Quations</h6>
                            <p>Manage Inventory(2)&nbsp;&nbsp;&nbsp; View Inventory(21)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              
                <div class="col-sm-3">
                  <div class="col">
                    <div class="iva_inner">
                      <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                        <div class="content">
                          <a href="#"><h6>International Buy</h6>
                            <p>cancel Request(0)&nbsp;&nbsp;&nbsp;&nbsp; View Request(1)</p>
                            
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                
          </div>
                  <!--/.row-->
        </div>
            </div>
            
            
            
            <!--list row start-->
            <div class="row">
            
            <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                <span><img src="img/icons/lead.png" class="img-responsive"></span>&nbsp;<b>Highly Recommended</b><br/> 
                <small>Thousands of Buyers Waiting for You to Send Quotes!</small>
                    
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-hover mb-0">
                    <thead class="">
                      <tr>
                        <th class=""><i class="icon-people"></i></th>
                        <th>User</th>
                        <th class="">Quantity</th>
                        
                        <th class="">Payment</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Yiorgos</div>
                        </td>
                        
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>50%</strong>
                            </div>
                            
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                        </td>
                        
                      </tr>
                      
                     <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Miagrate</div>
                        </td>
                        
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>80%</strong>
                            </div>
                            
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-visa" style="font-size:24px"></i>
                        </td>
                        
                      </tr>
            
            <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>abcd</div>
                        </td>
                        
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>40%</strong>
                            </div>
                            
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                        </td>
                        
                      </tr>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>Offers from Portal</b>
                  
              </div>
              <div class="card-body my_right_list">
                <ul class="list-group">
                  <li><a href="#">Video comes. new functions re..</a> <span class="flag-icon-aw"></span></li>
                  <li><a href="#">Revised Rules  Action agai..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
            
            </div>
            
        <div class="col-sm-12" style="margin-bottom:10px;">
        
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
            <div class="row">
            <div class="col-sm-3"><img src="img/brand1.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand2.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand3.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand4.png" class="img-responsive"></div>
            </div>
                      </div>
                      <div class="carousel-item">
                         <div class="row">
            <div class="col-sm-3"><img src="img/brand5.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand6.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand7.png" class="img-responsive"></div>
            <div class="col-sm-3"><img src="img/brand8.png" class="img-responsive"></div>
            </div>
                      </div>
                     
                    </div>
                  </div>
                
        
        </div>  

        <div class="col-sm-12">
          <div class="mobile_notice">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify "></i> <b> <span class="animated infinite zoomIn">Notice Board</span></b>
                  
              </div>
              <div class="card-body my_right_list">
                <ul class="list-group">
                  <li><a href="#">Video comes. new functions re..</a></li>
                  <li><a href="#">Revised Rules  Action agai..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
          
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>News Info</b>
                  <small class="badge badge-danger animated infinite flash">Latest</small>
              </div>
              <div class="card-body my_right_list_2">
                <ul class="list-group">
                  <li style="list-style:none;"><marquee direction="left" BEHAVIOR=scroll ><a href="#" style="color:#F86C6B;"><b>Auctions Are Running!!</b></a></marquee></li>
                  <li><a href="#">Bid Rate is High</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Trade..</a></li>
                  
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>Current Rates</b>
                  <small class="badge badge-primary">Updated</small>
              </div>
              <div class="card-body my_right_list_3">
                <ul class="list-group">
                  
                  <li><a href="#">1210 Rs for INDIA &nbsp;<img src="img/flags/flag_4.gif" class="img-responsive"></a></li>
                  <li><a href="#">1091 $ for USA  &nbsp;<img src="img/flags/flag_6.gif" class="img-responsive"></a></li>
                  <li><a href="#">1010 &#8364; for EUROPE &nbsp;<img src="img/flags/flag_5.gif" class="img-responsive"></a></li>
                  <li><a href="#">10241 &#8361; for Canada &nbsp; <img src="img/flags/flag_2.gif" class="img-responsive"></a></li>
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
            
            
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>RSS Feeds</b>
                  
              </div>
              <div class="card-body my_right_list_3">
                <ul class="list-group">
                  
                  <li><a href="#">Lorem ipsum content goes here..</a></li>
                  <li><a href="#">Lorem ipsum content goes here..</a></li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
            
        <div class="col-sm-12">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>This Section !</strong>Contains some social advertisment and Offers Banners From Many Companies It is use to give informations as well as some message you can cut by crossing the X sign.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                
                </div>
              
            </div>
            
            
          
          
          


        
          
          </div><!--end of col sm-9-->
            
          
          
          
          
          
        </div><!--end of main row-->
        
    </div><!--end of col-sm-12-->
    
</div>
 <!----------------- /.conainer-fluid end -------------- -->  

   
      
     
    </main>

    <aside class="aside-menu aside-menu-hidden">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify "></i> <b> <span class="animated infinite zoomIn">Notice Board</span></b>
                  
              </div>
              <div class="card-body my_right_list">
                <ul class="list-group">
                  <li><a href="#">Video comes. new functions re..</a></li>
                  <li><a href="#">Revised Rules  Action agai..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Handling Unauthorized..</a></li>
                  <li><a href="#">New: Learn  Gold Supplier accou..</a></li>
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
          
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>News Info</b>
                  <small class="badge badge-danger animated infinite flash">Latest</small>
              </div>
              <div class="card-body my_right_list_2">
                <ul class="list-group">
                  <li style="list-style:none;"><marquee direction="left" BEHAVIOR=scroll ><a href="#" style="color:#F86C6B;"><b>Auctions Are Running!!</b></a></marquee></li>
                  <li><a href="#">Bid Rate is High</a></li>
                  <li><a href="#">Rules of  Actions for IPR Infrin..</a></li>
                  <li><a href="#">Notice of Trade..</a></li>
                  
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>Current Rates</b>
                  <small class="badge badge-primary">Updated</small>
              </div>
              <div class="card-body my_right_list_3">
                <ul class="list-group">
                  
                  <li><a href="#">1210 Rs for INDIA &nbsp;<img src="img/flags/flag_4.gif" class="img-responsive"></a></li>
                  <li><a href="#">1091 $ for USA  &nbsp;<img src="img/flags/flag_6.gif" class="img-responsive"></a></li>
                  <li><a href="#">1010 &#8364; for EUROPE &nbsp;<img src="img/flags/flag_5.gif" class="img-responsive"></a></li>
                  <li><a href="#">10241 &#8361; for Canada &nbsp; <img src="img/flags/flag_2.gif" class="img-responsive"></a></li>
                  <li style="list-style:none;"><a href="#" style="float:right;color:blue;">View More...</a></li>
                </ul>
              </div>
            </div>
            
            
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i><b>RSS Feeds</b>
                  
              </div>
              <div class="card-body my_right_list_3">
                <ul class="list-group">
                  
                  <li><a href="#">Lorem ipsum content goes here..</a></li>
                  <li><a href="#">Lorem ipsum content goes here..</a></li>
                  
                  
                </ul>
              </div>
            </div>
            
            
            <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i><b>Business Trends</b>
                  <small class="badge badge-success">Now</small>
              </div>
              <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout callout-info">
                            <small class="title">Client Read(9)</small>
                            
                            
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                          <div class="callout callout-danger">
                            <small class="title">Recuring Clients(2)</small>
                          
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <hr class="mt-0">
                      <ul class="horizontal-bars">
                        <li>
                          <div class="title">
                            Monday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Tuesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Wednesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Thursday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Friday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Saturday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                       
                        <li class="legend">
                          <span class="badge badge-pill badge-info"></span>
                          <small>New clients</small> &nbsp;
                          <span class="badge badge-pill badge-danger"></span>
                          <small>Recurring clients</small>
                        </li>
                      </ul>
                    </div><!--card body-->
            </div>
          
          
         
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>

          <div class="aside-options">
            <div class="clearfix mt-4">
              <small><b>Option 1</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 2</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 3</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 4</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <hr>
          <h6>System Utilization</h6>

          <div class="text-uppercase mb-1 mt-4">
            <small><b>CPU Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>Memory Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 1 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 2 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>

  </div>

  @endsection

