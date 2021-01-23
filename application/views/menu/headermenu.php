<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">

          	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newHeadermenuModal">Add New Headermenu</a>
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
                  <th scope="col">Icon</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php $i=1; ?>
              	<?php foreach ($headerMenu as $hm) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $hm['title']; ?></td>
                  <td><?= $hm['menu']; ?></td>
                  <td><?= $hm['icon']; ?></td>
                  <td><a class="badge badge-success" href="<?= base_url('menu/ubahheadermenu/'); ?><?= $hm['id']; ?>">Edit</a>
               			<a class="badge badge-danger" href="<?= base_url('menu/hapusheadermenu/'); ?><?= $hm['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></td>
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
        <div class="modal fade" id="newHeadermenuModal" tabindex="-1" role="dialog" aria-labelledby="newHeadermenuModalLabel" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        		<h5 class="modal-title" id="newHeadermenuModalLabel">Add New Headermenu</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        			</div>
        	<form action="<?= base_url('menu/menuheader'); ?>" method="post">
        	<div class="modal-body">
        		<div class="form-group">
        			<input type="text" name="title" class="form-control" id="title" placeholder="Headermenu title">
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
              <input type="text" name="icon" class="form-control" id="icon" placeholder="Headermenu icon">
            </div>
        	</div>
        	<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="Submit" class="btn btn-primary">Add</button>
        	</div>
        	</form>
        		</div>
       		</div>
       	</div>
     