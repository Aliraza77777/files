<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>

                            </tr>
        </thead>
        <tbody>
                                <tr>
                                    @foreach ($students as $student)
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->father_name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->password }}</td>
                                    <td>
                                                                <form action="{{ url('students') }}/{{ $student->id }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">delete</button>
                                                                </form>
                                                </td>
                                </tr>
                                @endforeach

        </tbody>
      </table>
</body>
</html>
