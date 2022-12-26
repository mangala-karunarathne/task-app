<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Tasks</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
      .container{
      position: absolute;
      top: 1%;
      left:20%;
      right:20%
      text-align: center;
      font-size: 18px;
      margin: auto;
      width: 60%;
      border: 3px solid #73AD21;
      padding: 10px;
    }
    .container1{
      position: absolute;
      top: 10%;
      left:10%;
      right:10%;
      text-align: center;
      font-size: 18px;
      margin: 10px;
      width: 80%;
      /*border: 3px solid #73AD21; */
      padding: 10px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h2> Daily Tasks</h2>
        </div>
    </div>
    
    <div class="container1">
      <div class="rows">
        <div class="col-md-12">
          
          @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
          @endforeach

          <form method="post" action="/savetask">
          {{csrf_field()}}
          <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
            <br>
              <input type="submit" class="btn btn-primary" value="SAVE">
              <input type="button" class="btn btn-warning" value="CLEAR">  
                <br> 
                <br>
          </form>
            
            <table class="table table-dark">
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Action</th>  
                @foreach($tasks as $task)
                    <tr>
                      <td>{{$task->id}}</td>
                      <td>{{$task->task}}</td>
                      <td>
                      @if($task->iscompleted)
                      <button class="btn btn-success">Completed</button>
                      @else
                      <button class="btn btn-warning">Not Completed</button>
                      @endif
                      </td>
                      <td>
                        @if($task->iscompleted)
                        <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As not Completed</a>
                        @else
                        <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                        @endif
                        <a href="/deletetask/{{$task->id}}" class="btn btn-light">Delete</a>
                        <a href="/updatetask/{{$task->id}}" class="btn btn-secondary">Update</a>
                      </td>
                    </tr>
                @endforeach
            </table>
        </div>

      </div>
    </div>
</body>
</html>