<!--  -->
				<div class="container-fluid pt-4 px-4">
					<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Add Categories</h6>
                            </div>
							<form action="<?= base_url('admin/categories/save') ?>" method="POST">
								<div class="d-flex mb-1">
									<input class="form-control bg-transparent" name="categoriesName" type="text" placeholder="Add Categories">
									<button type="submit" class="btn btn-primary ms-2">Add</button>
								</div>
							</form>
                        </div>
                    </div>
				</div>
					<!--  --> 
			<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
					<br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">List of Categories</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
									<th scope="col">Nama Kategori</th>
									<th scope="col">Action</th>
									</thead>
                            <tbody>
								<?php
								$num = 1; 
								foreach($categories as $kategori){ ?>
                                <tr>
									<td><?= $num++ ?></td>
									<td><?= $kategori['categoriesName'] ?></td>
                                    <td>
										<a class="btn btn-sm btn-danger" href="<?= base_url('admin/categories/delete/'.$kategori['categoriesID']) ?>">Delete</a>
										<a class="btn btn-sm btn-warning" href="<?= base_url('admin/categories/edit/'.$kategori['categoriesID']) ?>">Edit</a>
									</td>
									<?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
