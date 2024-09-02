<div class="container-fluid pt-4 px-4">
					<div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Add Book</h6>
                            </div>
								<form action="<?= base_url('admin/books/save') ?>" method="POST" enctype="multipart/form-data">
									<input class="form-control" name="title" type="text" placeholder="Title" required> <br>
									<input class="form-control" name="author" type="text" placeholder="Author" required> <br>
									<input class="form-control" name="releaseyear" type="text" placeholder="Release Year" required> <br>
									<textarea class="form-control" name="synopsis" type="text" placeholder="Synopsis" required></textarea><br>
									<input class="form-control" name="cover" type="file" placeholder="Cover Book" required> <br>
									<button type="submit" class="btn btn-primary">Add</button>
								</form>
                        </div>
                    </div>
				</div>
