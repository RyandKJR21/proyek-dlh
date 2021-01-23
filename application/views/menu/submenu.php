<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

          	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubmenuModal">Add New Submenu</a>
          	<?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
            <?php endif ?>

          	<?= $this->session->flashdata('massage'); ?>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Url</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Active</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php $i=1; ?>
              	<?php foreach ($subMenu as $sm) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $sm['title']; ?></td>
                  <td><?= $sm['menu']; ?></td>
                   <td><?= $sm['url']; ?></td>
                    <td><?= $sm['icon']; ?></td>
                     <td><?= $sm['is_active']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('menu/ubahsubmenu/'); ?><?= $sm['id']; ?>">Edit</a>
               			<a class="badge badge-danger" href="<?= base_url('menu/hapussubmenu/'); ?><?= $sm['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></td>
                </tr>
                <?php $i++; ?>
            	<?php endforeach; ?>
            </tbody>
        	</table>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->


        <!-- Modal -->
        <div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        		<h5 class="modal-title" id="newSubmenuModalLabel">Add New Submenu</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        			</div>
        	<form action="<?= base_url('menu/submenu'); ?>" method="post">
        	<div class="modal-body">
        		<div class="form-group">
        			<input type="text" name="title" class="form-control" id="title" placeholder="Submenu title">
        		</div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select menu</option>
                <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="url" class="form-control" id="url" placeholder="Submenu url">
            </div>
            <div class="form-group">
              <input type="text" name="icon" class="form-control" id="icon" placeholder="Submenu icon">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
                <label class="form-check-label" for="is_active">Active?
                </label>
              </div>
            </div>
        	</div>
        	<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-primary">Add</button>
        	</div>
        	</form>
        		</div>
       		</div>
       	</div>
     