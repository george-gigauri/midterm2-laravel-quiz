<?php $index; $question; $answers; $correct; $score; ?>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <form action="/next" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        @if(isset($index) && isset($question) && isset($answers) && isset($correct))
        <h3>{{$index + 1}}.  {{$question}}</h3>

        @foreach($answers as $a)
        <input type="radio" name="selectedAnswer" value="{{$a}}">
        <label for="lab">{{$a}}</label><br>
       @endforeach
       
       <input type="number" value="{{ $score }}" name="currentScore" readonly>
       <input type="text" name="ind" value="{{ $index }}" style="display: none;" >
       @endif

       @if(!isset($index))
       <input type="text" name="ind" value="0" style="display: none;" >
       @endif

<input type="submit" value="შემდეგი >">
        </form>
    </body>
</html>