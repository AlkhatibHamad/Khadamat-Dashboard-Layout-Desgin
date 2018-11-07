
<!-- INCLUDE NAV & SIDEBAR SECTION -->
<?php include('layouts/nav-sidebar.php') ?>



    <!--Start Page Content -->
    <div class="page-content-wrapper">
        <div class="container-fluid">
            
            <div class="panel-heading">
                <h4><button type="button" class="btn btn-secondary pull-left">رجوع</button>البحث</h4>
            </div>
            
            <div class="panel-body"><!--Start Body Content-->

                <form>
                    <div class="form-row">
                        <div class="col-md-7">
                            <label for="inputState">حالات</label>
                            <input type="text" class="form-control" placeholder="إدخال">
                        </div>
                        <div class="col-md-7">
                            <label for="inputState">حالات</label>
                            <input type="text" class="form-control" placeholder="إدخال ">
                        </div>
                        <div class="col-md-7">
                            <label for="inputState">حالات</label>
                            <input type="text" class="form-control" placeholder="إدخال">
                        </div>
                        <div class="col-md-7">
                            <label for="inputState">حالات</label>
                            <input type="text" class="form-control" placeholder="إدخال">
                        </div>

                        <div class="form-group col-md-7">
                          <label for="inputState">حالات</label>
                          <select id="inputState" class="form-control">
                            <option selected>إختيار</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="custom-file col-md-7">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">إختار ملف </label>
                        </div>
                        <div class="col-md-7 send">
                            <button type="submit" class="btn btn-primary mb-4 pull-right">إرسال</button>
                            <button type="reset" class="btn btn-primary mb-4 pull-left">إلغاء</button>
                        </div>    
                    </div>

                </form>
                   
            </div><!--Start Body content-->
        </div>
    </div> 
        <!--End Page Content -->



<!-- INCLUDE FOOTER SECTION -->
<?php include('layouts/footer.php') ?>