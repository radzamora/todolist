<div class="modal fade" id="deleteModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="delete.php" enctype="multipart/form-data">
                    <br>
                    <input type="hidden" name="taskID" id="dtaskID">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9"><h5>Are you sure you want to DELETE this data?</h5></div>
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" name="Submit" class="btn btn-danger">YES</button>
            </div>

                </form>   

        </div>
    </div>
</div>