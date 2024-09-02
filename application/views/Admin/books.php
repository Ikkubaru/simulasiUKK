<div class="container-fluid pt-4 px-4">
	<a href="<?= base_url('admin/books/add') ?>" class="btn btn-info">Add Book</a>
                <div class="bg-light text-left rounded p-4">
					<br>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">List of Books</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Release</th>
                                    <th scope="col">Synopsis</th>
                                    <th scope="col">Action</th>
									</thead>
                            <tbody>
								<?php
								$num = 1; 
								foreach($book as $buku){?>
                                <tr>
									<td><?= $num++ ?></td>
									<td><img src="<?= base_url('assets/cover/'.$buku['cover']) ?>" width="150px" height="200px"></td>
									<td><?= $buku['title'] ?></td>
									<td><?= $buku['author'] ?></td>
									<td><?= $buku['releaseYear'] ?></td>
									<td><?= $buku['synopsis'] ?></td>
                                    <td>
										<a class="btn btn-sm btn-danger" href="<?= base_url('admin/books/delete/'.$buku['bookID']) ?>">Delete</a>
										<a class="btn btn-sm btn-warning" href="<?= base_url('admin/books/edit/'.$buku['bookID']) ?>">Edit</a>
									</td>
									<?php }?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
