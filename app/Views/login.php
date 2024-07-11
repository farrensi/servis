<?php include 'layout/header.php'; ?>
<div class="container login-container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">Login</h3>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
<?php include 'layout/footer.php'; ?>
