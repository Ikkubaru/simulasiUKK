<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-left rounded p-4">
					<br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">Edit Books</h2>
                    </div>
                    <div class="table-responsive">
						<form action="<?= base_url('admin/books/update/'.$book->bookID) ?>" method="post">
							<label for="floatingInput">Book Title</label>
							<input type="text" name="title" value="<?= $book->title ?>" class="form-control">
							<label for="floatingInput">Author</label>
							<input type="text" name="author" value="<?= $book->author ?>" class="form-control">
							<label for="floatingInput">Release</label>
							<input type="text" name="releaseyear" value="<?= $book->releaseYear ?>" class="form-control">
							<label for="floatingInput">Synopsis</label>
							<textarea name="synopsis" class="form-control"><?= $book->synopsis ?></textarea>
							<center>
								<label for="floatingInput">Cover</label> <br>
								<img src="<?= base_url('assets/cover/'.$book->cover) ?>" width="150px" height="200px">
								<input type="file" name="cover" class="form-control" value="<?= $book->cover ?>">
							</center> <br>
							<center>
								<button class="btn btn-info" type="submit">Confirm</button>
							</center>
						</form>
                    </div>
                </div>
            </div>
