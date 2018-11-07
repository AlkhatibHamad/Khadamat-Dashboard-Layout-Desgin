
<!-- INCLUDE NAV & SIDEBAR SECTION -->
<?php include('layouts/nav-sidebar.php') ?>



    <!--Start Page Content -->
    <div class="page-content-wrapper">
        <div class="container-fluid">
            
            <div class="panel-heading">
                <h4><div class="dropdown pull-left">
                  <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    إدارة
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">إضافة</a>
                    <a class="dropdown-item" href="#">حذف</a>
                  </div>
            </div>
                الرئيسية</h4>
            </div>
            
            <div class="panel-body"><!--Start Body Content-->
                <!--Start Form Before Table-->
                <form>
                    <div class="form-row">

                        <div class="form-group col-md-4">
                          <select id="inputState" class="form-control">
                            <option selected>إختار...</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="form-group col-md-4">
                          <select id="inputState" class="form-control">
                            <option selected>إختار...</option>
                            <option>...</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="form-group col-md-1">
                           <button type="submit" class="btn btn-primary mb-4">إرسال</button>
                        </div>
                    </div>
                </form>
                <!--End Form Before Table-->
                <table class="table table-bordered table-striped"><!--Start Table-->
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">الاول</th>
                          <th scope="col">الثاني</th>
                          <th scope="col">الثالث</th>
                          <th scope="col">الرابع</th>
                          <th scope="col">الخامس</th>
                          <th scope="col" class="text-center">السادس</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="text-center">
                                <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">
                                    <i class="fa fa-cog fa-2x"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">إضافة</a>
                                        <a class="dropdown-item" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="text-center">
                                <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cog fa-2x"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">إضافة</a>
                                        <a class="dropdown-item" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="text-center">
                                <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cog fa-2x"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">إضافة</a>
                                        <a class="dropdown-item" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--End Table-->
            </div><!--Start Body content-->
        </div>
    </div> 
        <!--End Page Content -->



<!-- INCLUDE FOOTER SECTION -->
<?php include('layouts/footer.php') ?>