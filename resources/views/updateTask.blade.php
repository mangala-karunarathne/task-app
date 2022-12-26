<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
      position: absolute;
      top: 10%;
      left:20%;
      right:20%
      text-align: center;
      font-size: 18px;
      margin: auto;
      width: 60%;
      padding: 10px;
    }

    </style>
</head>
<body>
    <div class="container">
        <form action="/tasks" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="updatetask" value="{{$taskData->task}}"/>
            <input type="hidden" name="update_id" value="{{$taskData->id}}"/>
            <br>
            <br>
            <input type="submit" class="btn btn-secondary" value="Update"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-primary" value="Cancel"/>
        </form>
    </div>
</body>
</html>