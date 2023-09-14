<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create User</h1>

        <form action="<?= base_url('/user/store') ?>" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM :</label>
                <input type="text" class="form-control" name="npm" id="npm">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas :</label>
                <input type="text" class="form-control" name="kelas" id="kelas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
