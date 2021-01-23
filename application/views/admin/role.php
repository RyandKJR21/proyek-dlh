<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg-6">

          	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
          	<?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          	<?= $this->session->flashdata('massage'); ?>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Role</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php $i=1; ?>
              	<?php foreach ($role as $r) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $r['role']; ?></td>
                  <td>
                    <a class="badge badge-warning" href="<?= base_url('admin/roleaccess/') . $r['id']; ?>">Access</a>
                    <a class="badge badge-success" href="<?= base_url('admin/ubahrole/') . $r['id']; ?>">Edit</a>
               			<a class="badge badge-danger" href="<?= base_url('admin/hapusrole/') . $r['id']; ?>">Hapus</a></td>
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
        <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        		<h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        			</div>
        	<form action="<?= base_url('admin/role'); ?>" method="post">
        	<div class="modal-body">
        		<div class="form-group">
        			<input type="text" name="role" class="form-control" id="role" placeholder="Role name">
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