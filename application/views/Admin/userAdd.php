<div class="container-fluid pt-4 px-4">
					<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Add User</h6>
                            </div>
								<form action="<?= base_url('admin/user/save') ?>" method="POST">
									<input class="form-control" name="username" type="text" placeholder="Username" required> <br>
									<input class="form-control" name="password" type="password" placeholder="Password" required> <br>
									<input class="form-control" name="fullName" type="text" placeholder="Full Name" required> <br>
									<input class="form-control" name="address" type="text" placeholder="Address" required> <br>
									<input class="form-control" name="email" type="email" placeholder="Email" required> <br>
									<input class="form-control" name="phone" type="number" placeholder="Phone" required> <br>
									<select name="level" class="form-control" required>
										<option value="peminjam">Peminjam</option>
										<option value="petugas">Petugas</option>
										<option value="admin">Admin</option>
									</select> <br>
									<button type="submit" class="btn btn-primary">Add</button>
								</form>
                        </div>
                    </div>
				</div>
