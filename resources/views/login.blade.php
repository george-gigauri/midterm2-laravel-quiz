
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ავტორიზაცია - ქუიზი</title>

  <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 

  <style>
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

*{margin:0;padding:0;}

body{
  background:#567;
  font-family:'Open Sans',sans-serif;
}

.button{
  width:100px;
  background:#3399cc;
  display:block;
  margin:0 auto;
  margin-top:1%;
  padding:10px;
  text-align:center;
  text-decoration:none;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

.button:hover{
  background:#2288bb;
}

#login{
  width:400px;
  margin:0 auto;
  margin-top:8px;
  margin-bottom:2%;
  transition:opacity 1s;
  -webkit-transition:opacity 1s;
}

#triangle{
  width:0;
  border-top:12x solid transparent;
  border-right:12px solid transparent;
  border-bottom:12px solid #3399cc;
  border-left:12px solid transparent;
  margin:0 auto;
}

#login h1{
  background:#3399cc;
  padding:20px 0;
  font-size:140%;
  font-weight:300;
  text-align:center;
  color:#fff;
}

form{
  background:#f0f0f0;
  padding:6% 4%;
}

input[type="email"],input[type="password"]{
  width:92%;
  background:#fff;
  margin-bottom:4%;
  border:1px solid #ccc;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:95%;
  color:#555;
}

input[type="submit"]{
  width:100%;
  background:#3399cc;
  border:0;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

input[type="submit"]:hover{
  background:#2288bb;
}
  </style>

</head>

<body>

  <span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>ავტორიზაცია</h1>
  <form action="/login" method="post">
  @csrf
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="email" placeholder="ელ. ფოსტა" name="email"/>
    <input type="password" placeholder="პაროლი" name="password"/>
    <input type="submit" value="შესვლა" />
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>