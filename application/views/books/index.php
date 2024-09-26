  <div class="container">
      <div class="row mt-5">
          <div class="col mt-4">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Name
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Name</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form group">
                      <label for="name">Name</label>
                      <input type="text" class="form control" id="name" placeholder="Insert Name">
                </div>
                <div class="modal-body">
                  <div class="form group">
                      <label for="title">Title</label>
                      <input type="text" class="form control" id="title" placeholder="Insert Title">
                </div>
                <div class="modal-body">
                  <div class="form group">
                      <label for="author">Author</label>
                      <input type="text" class="form control" id="author" placeholder="Insert Author">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
          </div>
      </div>
  </div>