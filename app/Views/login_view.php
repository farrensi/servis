<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header bg-pimary text-white">
                LOGIN
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="inputusername"class="form-label">
                        username
                    </label>
                    <input type="text" name="username"class="form-control"id="inputusername" placeholder="masukan nama">
                </div>
                <div class="mb-3">
                    <label for="inputpassword"class="form-label">
                        password
                    </label>
                    <input type="text" name="password"class="form-control"id="inputpassword" placeholder="masukan pasword">
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </div>
            </div>
        </div>
    </div>
</body>
</html>