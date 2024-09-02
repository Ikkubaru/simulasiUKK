<div class="container-fluid pt-4 px-4">
					<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Edit Categories</h6>
                            </div>
							<form action="<?= base_url('admin/categories/update/'.$kategori->categoriesID) ?>" method="POST">
								<div class="d-flex mb-1">
									<input class="form-control bg-transparent" name="categoriesName" type="text" value="<?= $kategori->categoriesName ?>">
									<button type="submit" class="btn btn-primary ms-2">Confirm</button>
								</div>
							</form>
                        </div>
                    </div>
				</div>
