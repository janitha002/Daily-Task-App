<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Task</h1>
            <div class="row">
                <div class="col-md-12">

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach

                    <form method="post" action="/saveTask">
                        {{csrf_field()}}

                        <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                        
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>I Have to learn Laraval today</td>
                            <td>Not Yet</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>