<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTMLメール本文</title>
</head>
<body>
  <h1>以下内容にてお問合せを頂きました。</h1>
  <ul>
    <li>
      <label for="">お名前</label>
      <p>{{$request -> userName}}</p>
    </li>
    <li>
      <label for="">電話番号</label>
      <p>{{$request -> userTelephone}}</p>
    </li>
    <li>
      <label for="">メールアドレス</label>
      <p>{{$request -> userEmailAddress}}</p>
    </li>
    <li>
      <label for="">お問合せ内容</label>
      <p>{{$request -> userMessage}}</p>
    </li>
  </ul>
</body>
</html>

