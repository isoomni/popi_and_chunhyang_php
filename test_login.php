<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>

<body>
    <form method="POST" action="test_login_process.php"> 
    <div class="w-50 ml-auto mr-auto mt-5">
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">아이디</label>
            <input name="userNickname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="userNickname">
        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
            <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
        </div>
    
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    </div>
    </form>
</body>

</html>