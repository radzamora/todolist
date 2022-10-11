<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Task</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="input.php" enctype="multipart/form-data">

                    <br>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3"><label style="color:#3a87ad;">Start Date</label></div>
                        <div class="col-sm-7"><input type="date" class="form-control" name="start_date" required></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3"><label style="color:#3a87ad;">Dead Line</label></div>
                        <div class="col-sm-7"><input type="date" class="form-control" name="deadline" required></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-1"></div>       
                        <div class="col-sm-3"><label style="color:#3a87ad;">Task Description</label></div>
                        <div class="col-sm-7"><textarea class="form-control" name="task" required></textarea></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3"><label style="color:#3a87ad;">Status</label></div>
                        <div class="col-sm-7"><input type="text" class="form-control" name="status" required></div>
                    </div>
                    <br>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="Submit" class="btn btn-primary">Add</button>
            </div>

                </form>

        </div>
    </div>
</div>