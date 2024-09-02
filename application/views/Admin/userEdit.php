<div class="container-fluid pt-4 px-4">
					<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Edit User</h6>
                            </div>
								<form action="<?= base_url('admin/user/update/'.$user->userID) ?>" method="POST">
									<input class="form-control" name="username" type="text" value="<?= $user->username ?>"> <br>
									<input class="form-control" name="fullName" type="text" value="<?= $user->fullName ?>"> <br>
									<input class="form-control" name="address" type="text" value="<?= $user->address ?>"> <br>
									<input class="form-control" name="email" type="email" value="<?= $user->email ?>"> <br>
									<input class="form-control" name="phone" type="number" value="<?= $user->phone ?>"> <br>
									<button type="submit" class="btn btn-primary">Add</button>
								</form>
                        </div>
                    </div>
				</div>
