<?php
include_once('./them/header.php')
?>
<nav class="navbar navbar-expand-lg topnav">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Compeny</a>
        <div class="navbar-left" id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav">
                    <a class="d-flex nav-link btn" data-bs-toggle="modal" data-bs-target="#change-Password" href="#">Reset Password</a>
                    <a class="d-flex nav-link btn" href="signout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <h1 class="ms-5">Profile</h1>
    <p class="ms-5">Welcome: Rajesh Arya</p>
</div>

<!-- change password -->
<div class="row">
    <div class="col-log-4 col-log-offset-4">
        <div class="modal-body mt-4">
            <h3>Change Password</h3>
            <div class="mb-3">
                <label>New Password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label>Confarm Password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mb-3">Save Pass</button>
            </div>
        </div>
    </div>
</div>

<!-- change-Password form -->
<div class="modal fade mt-5" id="change-Password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Cheng Password</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label>New Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label>Confarm Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Log In</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once('./them/footer.php')
?>