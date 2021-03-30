<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
</head>
<body>
    
    <div class = "text-center">
        <h1>Show Data</h1>
        <a href="/index">Back to index</a>
        <a href="/input">Input</a>
        
    </div>

    <div class ="py-12">
        <div class = "container">
            <div class ="row">
                <div class ="card-header">Show All</div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">รหัสนักศึกษา</th>
                        <!-- <th scope="col">อุณหภูมิ(ก่อนปัด)</th> -->
                        <th scope="col">อุณหภูมิ</th>
                        <!-- <th scope="col">ช่วงอุณหภูมิ</th> -->
                        <th scope="col">วันและเวลาที่เข้าใช้บริการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($temp as $row)
                        <tr>
                        <td>{{$row->studentID}}</td>
                        <!-- <td>{{$row->temp_no}}</td> -->
                        <td>{{round($row->temp_no,1,PHP_ROUND_HALF_DOWN)}}</td>
                        <!-- <td>{{$row->temp_str}}</td> -->
                        <td>{{$row->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class = "text-center">
        <h2>Average : {{round($results -> avg,1,PHP_ROUND_HALF_DOWN)}}</h2>
    </div>

    
    
   
</body>
</html>