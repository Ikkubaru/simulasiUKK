<div class="container-fluid pt-4 px-4">
	<a href="<?= base_url('admin/user/add') ?>" class="btn btn-info">Add User</a>
                <div class="bg-light text-left rounded p-4">
					<br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">List of Users</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
									<th scope="col">Username</th>
									<th scope="col">Nama Lengkap</th>
									<th scope="col">Alamat</th>
									<th scope="col">Email</th>
									<th scope="col">Telepon</th>
									<th scope="col">Level</th>
									<th scope="col">Action</th>
									</thead>
                            <tbody>
								<?php
								$num = 1; 
								foreach($user as $users){?>
                                <tr>
									<td><?= $num++ ?></td>
									<td><?= $users['username'] ?></td>
									<td><?= $users['fullName'] ?></td>
									<td><?= $users['address'] ?></td>
									<td><?= $users['email'] ?></td>
									<td><?= $users['phone'] ?></td>
									<td><?= $users['level'] ?></td>
                                    <td>
										<a class="btn btn-sm btn-danger" href="<?= base_url('admin/user/delete/'.$users['userID']) ?>">Delete</a>
										<a class="btn btn-sm btn-warning" href="<?= base_url('admin/user/edit/'.$users['userID']) ?>">Edit</a>
									</td>
									<?php }?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
