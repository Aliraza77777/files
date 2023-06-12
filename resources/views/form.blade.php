<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="display:flex;height:100vh">
        <div style="margin:auto">
                            <form action="{{ url('students') }}" method="post">
                                @csrf
                                <label for=""> Name</label> <br> <br>
                                <input type="text" placeholder="Enter Name" name="name"> <br> <br>
                                <label for=""> Father Name</label> <br> <br>
                                <input type="text" placeholder="Enter Fname" name="father_name"> <br> <br>
                                <label for=""> Email</label> <br> <br>
                                <input type="text" placeholder="enter email" name="email"> <br> <br>
                                <label for=""> Password</label> <br> <br>
                                <input type="password" placeholder="enter password" name="password">
                                <button trpe="submit">Add Data</button>

                            </form>
        </div>
    </div>

</body>

</html>
