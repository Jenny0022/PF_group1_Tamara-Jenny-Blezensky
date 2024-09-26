  <div class="container">
      <div class="row mt-5">
          <div class="col mt-4">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Name
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Name</h5>
                  <button type="button" class="btn-close" data-btn-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('books')?>"method="post">
                  <div class="form group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Insert Name">
                </div>
                 <div class="form group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Insert Title">
                </div>
                 <div class="form group">
                      <label for="author">Author</label>
                      <input type="text" name="title" class="form-control" id="author" placeholder="Insert Author">
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($books as $bks): ?>
    <tr>
       <th scope="row"><?=$bks['Title']; ?></th>
       <td><?=$bks['title']; ?></td>
       <td><?=$bks['author']; ?></td>
    </td>   
         <a href="<?= base_url(); ?>books/change/<?= $bks['id']; ?>" class=" btn btn-success">change</a>
         <a href="<?= base_url(); ?>books/delete/<?= $bks['id']; ?>" class=" btn btn-danger" onclick="return confirm"('Are you sure?');">Delete</a>
    </td>
</tr>
    <?php endforeach; ?>
  </tbody>

        </div>
    </div>
</div>