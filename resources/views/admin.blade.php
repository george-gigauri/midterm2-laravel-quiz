<?php $error; $msg; ?>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        @if(isset($error))
        @if($error)
        <h1 style="color:red;">{{$msg}}</h1>
        @else 
        <h1 style="color:green;">{{$msg}}</h1>
        @endif
        @endif

        <form action="/add" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <input type="text" name="question" placeholder="კითხვა" />
        <input type="text" name="option1" placeholder="პასუხი 1" />
        <input type="text" name="option2" placeholder="პასუხი 2" />
        <input type="text" name="option3" placeholder="პასუხი 3" />
        <input type="text" name="correct" placeholder="სწორი პასუხი" />
        <input type="text" name="score" placeholder="ქულა" />
        <input type="submit" name="submit" value="დამატება" />
        </form>
    </body>
</html>