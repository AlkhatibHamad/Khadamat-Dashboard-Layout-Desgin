

<!-- INCLUDE NAV & SIDEBAR SECTION -->
<?php include('layouts/nav-sidebar.php') ?>



    <!--Start Page Content -->
    <div class="page-content-wrapper">
        <div class="container-fluid">
            
            <div class="panel-heading">
                <h4>بيانات العامل</h4>
            </div>
            <div class="panel-body">
                <!--Start Profile-->
                <div class="row">
                    <div class="profile col-md-12 text-center">
                        <div class="profile-data">

                            <!--Stert Profile Pic & Name -->
                            <div class="profile-userpic">
                                <img src="../images/77.jpeg" class="rounded-circle" alt="...">
                                <div class="profile-user-name">
                                    <h4>محمد عبدالكريم</h4>
                                </div>
                            </div>
                             <!--End Profile Pic & Name -->   

                            <!-- Start Profile Information -->
                            <div class="profile-usertitle col-md-12">
                                <div class="row">
                                    <div class="item col-md-4">
                                        <i class="fa fa-envelope fa-2x"></i>
                                        <h6>kaboo2002@gmail.com</h6> 
                                    </div> 
                                    <div class="item col-md-4">
                                         <i class="fa fa-mobile fa-2x"></i>
                                        <h6>0999999999</h6>
                                    </div>
                                    <div class="item col-md-4"> 
                                        <i class="fa fa-home fa-2x"></i>
                                        <h6>بحري طيبة الاحامدة  مربع(18)</h6>     
                                    </div>     
                                </div>  
                                <div class="row">
                                    <div class=" item col-md-4">
                                        <a class="certif" href="#" role=""> 
                                         <i class="fa fa-certificate fa-2x"></i>
                                        <h6>الشهادات </h6>
                                        </a>
                                    </div>
                                    <div class="item col-md-4">
                                        <a class="identit" href="#"> 
                                         <i class="fa fa-id-card fa-2x"></i>
                                        <h6>الهوية الشخصية</h6>
                                        </a>
                                    </div>
                                    <div class="item col-md-4">
                                        <a target="_blank" class="" href="#"> 
                                         <i class="fa fa-edit fa-2x"></i>
                                        <h6>تعديل </h6>
                                        </a>
                                    </div>    
                                </div>                             
                            </div>
                            <!-- End Profile Information -->
                        </div>
                    </div>
                    <!--Start Profile Table-->
                    <div class="col-md-12">
                        <div class="profile-table">
                            <h3 class="table-title">سجل التعبئة :-</h3>
                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <!--End Profile Table-->
                </div>
                <!--End Profile-->
                <div class="Profile-buttons text-center">
                    <button type="button" class="btn btn-secondary">شحن</button>
                    <button type="button" class="btn btn-secondary">تفعيل</button>
                    <button type="button" class="btn btn-secondary">إلغاء تفعيل</button>
                    <button type="button" class="btn btn-secondary">إلغاء حساب</button>
                </div>
            </div> 
        </div>
    </div> 
    <!--End Page Content -->

    <div class="Profile-overlay-certificate">
        <div class="certificate">
            <div class="certificate-content">
                <div class="close pull-left">
                    <button type="button" class="btn btn-outline-primary"><i class="fa fa-window-close fa-2x"></i></button>
                 </div>  
                <div class="title">
                    <h1>الشهادات</h1>
                </div>

                <div class="certificate-img">  
                    <img src="../images/1.jpeg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="certificate-img">  
                    <img src="../images/1.jpeg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="certificate-img">  
                    <img src="../images/1.jpeg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="certificate-img">  
                    <img src="../images/1.jpeg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>


    <div class="Profile-overlay-identity">
        <div class="identity">
            <div class="identity-content">
                <div class="close pull-left">
                    <button type="button" class="btn btn-outline-primary"><i class="fa fa-window-close fa-2x"></i></button>
                 </div>  
                <div class="title">
                    <h1>الهوية الشخصية</h1>
                </div>

                <div class="identity-img">  
                    <img src="../images/1.jpeg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>

<!-- INCLUDE FOOTER SECTION -->
<?php include('layouts/footer.php') ?>
