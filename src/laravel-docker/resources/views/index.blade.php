<!DOCTYPE HTML>
<html>
<head>
    <title>掲示板</title>
</head>
<body>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<h1>掲示板</h1>
<div class="alert alert-danger">{{ $message ?? '' }}</div>
<!-- フォームエリア -->
<h2>フォーム</h2>
<form action="/store" method="POST">
    telno:<br>
    <input name="telno">
    <br>

    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>

</body>
</html>