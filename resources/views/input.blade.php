<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <div class = "text-center">
        <h1>Input</h1>
        <a href="/index">Back to index</a>
        <br>
        <a href="/showdata">Show Data</a>
    </div>
    @if(session("success"))
        <div class="alert alert-success">{{(session("success"))}}</div>
    @endif
    <div class = "container">
    <form action="{{route('addData')}}" method="post">
        @csrf
        <div class ="form-group">
            <label for="studenId">Student Id</label>
            <input type="text" class="form-control" name="studentId" >
            <br>
            <label for="temp_no">Temperature</label>
            <input type="text" class="form-control" name="temp_no" >
        </div>
        <br>
        <input type="submit" value="บันทึก" class="btn btn-primary">
    </form>
    
    </div>
</body>
</html>