<?php
  require 'header.php';
  ?>
  <!-- form 1 -->
  <div class="container tb1" id="addMenudiv">
    <div  class="text-center py-4 display-4">Add New Menu</div>

    <form method="POST" action="addMenu.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
          <input type="file" name="photo" class="form-control-file">
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="name" name="name" class="form-control" id="name">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="name" name="price" class="form-control" id="email">
        </div>
      </div>
      
      <div class="form-group row py-3">
        <div class="col-sm-10">
          <button type="submit"  class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>

  <!-- form 2 -->
  <div class="container tb2" id="editMenudiv" style="display: none;">
    <div  class="text-center py-4 display-4" >Edit Existing Menu</div>

    <form action="updateMenu.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="edit_id" id="edit_id">
      <input type="hidden" name="edit_oldphoto" id="edit_oldphoto">
      <div class="form-group row my-3">
        <label class="col-sm-2 col-form-label">Photo</label>
        <!-- <div class="col-sm-10">
          <input type="file" name="" class="form-control-file">
        </div> -->

        <div>
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="">Old Photo</a>
              <img src="" id="edit_photo" name="edit_photo" class="img-fluid"  width="100px" height="90px">
              

            </li>
            <li class="nav-item">
              <a href="" class="nav-link">New Photo</a>
              <input type="file"  name="edit_newphoto" class="form-control-file">
            </li>
          </ul>
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="edit_name" name="edit_name">
        </div>
      </div>

      <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="edit_price" name="edit_price">
        </div>
      </div>

      <div class="form-group row py-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>

<!-- table -->
<div class="container">
  
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Action</th>
          
        </tr>
      </thead>
      <tbody id="tb">
        
      </tbody>
      <tfoot></tfoot>
    </table>
  
</div>

  <?php
  require 'footer.php';
  ?>  