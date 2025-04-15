<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Geheimcode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .code-input input {
      width: 50px;
      height: 50px;
      text-align: center;
      font-size: 24px;
      border: 2px solid #ccc;
      border-radius: 8px;
    }
  </style>
</head>
<body class="bg-light text-center p-5">

  <div class="container">
    <div class="card p-4 shadow-lg">
      <h1 class="mb-4">Gib das geheime Wort ein</h1>
      <p class="mb-4">Sieben Buchstaben. Ein Geheimnis. Versuch es!</p>

      <div class="d-flex justify-content-center gap-2 code-input mb-4">
        <input type="text" maxlength="1" class="form-control" id="char0">
        <input type="text" maxlength="1" class="form-control" id="char1">
        <input type="text" maxlength="1" class="form-control" id="char2">
        <input type="text" maxlength="1" class="form-control" id="char3">
        <input type="text" maxlength="1" class="form-control" id="char4">
        <input type="text" maxlength="1" class="form-control" id="char5">
        <input type="text" maxlength="1" class="form-control" id="char6">
      </div>

      <button class="btn btn-primary" onclick="checkCode()">Prüfen</button>
      <p id="error-message" class="text-danger mt-3"></p>
    </div>
  </div>

  <script>
    function checkCode() {
      let code = '';
      for (let i = 0; i < 7; i++) {
        const char = document.getElementById('char' + i).value;
        code += char;
      }

      if (code.toLowerCase() === 'tauchen') {
        window.location.href = 'geheim.html';
      } else {
        document.getElementById('error-message').textContent = 'Falsches Wort. Versuch es nochmal!';
      }
    }
  </script>

</body>
</html>
