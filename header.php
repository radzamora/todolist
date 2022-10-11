<!DOCTYPE html>
<html lang="en">
    <head>
        <title>To-Do List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="style.css" rel="stylesheet">  

        <script>
            $(document).ready(function(){
                $(document).on('click', '.editbn', function(){
                    $('#updateModal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#taskID').val(data[0]);
                    $('#start_date').val(data[1]);
                    $('#task').val(data[2]);
                    $('#deadline').val(data[3]);
                    $('#status').val(data[4]);
                });
            });
        </script>

        <script>    
            $(document).ready(function(){
                $(document).on('click', '.deletebn', function(){
                    $('#deleteModal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#dtaskID').val(data[0]);
                });
            });
        </script>
    </head>