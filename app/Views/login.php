<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <?php echo session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="row align-middle min-vh-100">
            <form action="<?= base_url('/login') ?>" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Username/Email address</label>
                    <input id="email" class="form-control" name="username" value="<?= old('username') ?>" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>