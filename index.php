<?php
include_once('./them/header.php')
?>
<nav class="navbar navbar-expand-lg topnav">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Compeny</a>
        <div class="navbar-left">
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav">
                    <div class="">
                        <a class="d-flex nav-link" data-bs-toggle="modal" data-bs-target="#login" href="#">Log In</a>
                    </div>
                    <div>
                        <a class="d-flex nav-link" data-bs-toggle="modal" data-bs-target="#sinUp" href="#">Sign Up</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <h1 class="ms-5">Hello, World!</h1>
    <p class="ms-5">
        How to Use HTML:5 AJAX in PHP and jQuery | Envato Tuts+ - Code
    </p>
    <p class="ms-5"><a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#sinUp" role="button">Learn More</a></p>
</div>

<!-- Login form -->
<div class="modal fade mt-5" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Login to your account</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="">Check me out
                        <input type="checkbox">
                        </label>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary">Log In</button>
                        <p><a data-bs-toggle="modal" data-bs-target="#send-reset-password" href="#">Forgot Your Password</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Sin in form -->
<div class="modal fade mt-5" id="sinUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Signup for a new account</h2>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label>Confarm Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label>Check me out
                        <input type="checkbox">
                    </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Reset password form -->
<div class="modal fade mt-5" id="send-reset-password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Send me reset Password Link</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Send Password Link</button>
            </div>
        </div>
    </div>
</div>

<div class="ms-4 mt-5 me-2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores qui laboriosam culpa ratione corrupti, autem veniam fuga in molestiae, dolor earum! Omnis ipsa incidunt adipisci, explicabo rerum error quam unde.
        Lorem ipsum dolor, sit amet consectetur <b><a href="">webskul.com</a></b> adipisicing elit. Quibusdam provident placeat sunt voluptates delectus atque corporis culpa accusamus odit, soluta expedita inventore deleniti eius dicta et vero totam libero tempora!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Officiis explicabo</b> dolorem libero natus numquam. Sed, cumque cupiditate! Excepturi, a omnis aliquid beatae earum laboriosam, nihil qui cumque, dolorum sunt distinctio.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores qui laboriosam culpa ratione corrupti, autem veniam fuga in molestiae, dolor earum! Omnis ipsa incidunt adipisci, explicabo rerum error quam unde.
        Lorem ipsum dolor, sit amet consectetur <b><a href="">webskul.com</a></b> adipisicing elit. Quibusdam provident placeat sunt voluptates delectus atque corporis culpa accusamus odit, soluta expedita inventore deleniti eius dicta et vero totam libero tempora!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Officiis explicabo</b> dolorem libero natus numquam. Sed, cumque cupiditate! Excepturi, a omnis aliquid beatae earum laboriosam, nihil qui cumque, dolorum sunt distinctio.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores qui laboriosam culpa ratione corrupti, autem veniam fuga in molestiae, dolor earum! Omnis ipsa incidunt adipisci, explicabo rerum error quam unde.
        Lorem ipsum dolor, sit amet consectetur <b><a href="">webskul.com</a></b> adipisicing elit. Quibusdam provident placeat sunt voluptates delectus atque corporis culpa accusamus odit, soluta expedita inventore deleniti eius dicta et vero totam libero tempora!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Officiis explicabo</b> dolorem libero natus numquam. Sed, cumque cupiditate! Excepturi, a omnis aliquid beatae earum laboriosam, nihil qui cumque, dolorum sunt distinctio.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores qui laboriosam culpa ratione corrupti, autem veniam fuga in molestiae, dolor earum! Omnis ipsa incidunt adipisci, explicabo rerum error quam unde.
        Lorem ipsum dolor, sit amet consectetur <b><a href="">webskul.com</a></b> adipisicing elit. Quibusdam provident placeat sunt voluptates delectus atque corporis culpa accusamus odit, soluta expedita inventore deleniti eius dicta et vero totam libero tempora!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Officiis explicabo</b> dolorem libero natus numquam. Sed, cumque cupiditate! Excepturi, a omnis aliquid beatae earum laboriosam, nihil qui cumque, dolorum sunt distinctio.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores qui laboriosam culpa ratione corrupti, autem veniam fuga in molestiae, dolor earum! Omnis ipsa incidunt adipisci, explicabo rerum error quam unde.
        Lorem ipsum dolor, sit amet consectetur <b><a href="">webskul.com</a></b> adipisicing elit. Quibusdam provident placeat sunt voluptates delectus atque corporis culpa accusamus odit, soluta expedita inventore deleniti eius dicta et vero totam libero tempora!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Officiis explicabo</b> dolorem libero natus numquam. Sed, cumque cupiditate! Excepturi, a omnis aliquid beatae earum laboriosam, nihil qui cumque, dolorum sunt distinctio.
    </p>
</div>

<?php
include_once('./them/footer.php')
?>