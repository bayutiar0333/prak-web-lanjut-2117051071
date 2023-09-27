
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bayu Tiar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    h2 {
      text-align: center;
    }
  </style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
  <div class="border border-3 rounded" style="padding: 20px;">
      <h2>Biodata Diri</h2>
<img src="https://avatars.githubusercontent.com/u/92659138?v=4" class="rounded-circle mx-auto d-block py-3" alt="..." width="160" height="190">
  <table class="mx-auto">
    <tr>
      <td>
        <button type="button" class="btn btn-primary" style="width: 320px"><?= $nama
         ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button type="button" class="btn btn-primary" style="width: 320px"><?= $npm ?></button>
      </td>
    </tr>
    <tr>
      <td>
      <button type="button" class="btn btn-primary" style="width: 320px"><?= $kelas ?></button>
      </td>
    </tr>
    <tr>
      <td>
      <button type="button" class="btn btn-primary" style="width: 320px"><?= $alamat ?></button>
      </td>
    </tr>
  </table>
</body>

</html>
