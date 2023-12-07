<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Student Records</h1>
    <table>
        <thead>
            <tr>
              
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach($students as $student)
            <tr>
               
                <td>{{$student->fname}}</td>
                <td>{{$student->lname}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student-> phone}}</td>
                <td>{{$student-> address}}</td>
                <td>
                    
                    <a href="{{route('students.edit',$student->id)}}"><button>Edit</button></a>
                    <form action="{{route('students.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('Delete')
                        <button>Delete</button></a>
                    </form>
                </td>
            </tr>

            @endforeach
            
        </tbody>
    </table>
</body>
</html>
