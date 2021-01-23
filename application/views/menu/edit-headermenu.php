<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
            <?php endif ?>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <form action="" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="title" class="form-control" id="title" value="<?= $user_header_menu['title']; ?>">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select menu</option>
                <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>" <?= $user_header_menu['menu_id'] == $m['id'] ? 'selected' : '' ; ?>><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="icon" class="form-control" id="icon" value="<?= $user_header_menu['icon']; ?>">
            </div>
          </div>
          <div class="form-group col-lg-4">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          </form> 

          </div>
        </div>