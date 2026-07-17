<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAPH Security Portal - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="style.css">
    <style>
        .login-container {
            max-width: 450px;
            margin: -2rem auto 3rem auto;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body>

    <header class="profile-header text-center">
        <div class="container">
            <h1 class="display-5 fw-bold text-white">WAPH Security Gateway</h1>
            <p class="lead text-white-50 mb-0">Academic Academic Portfolio Module Output</p>
        </div>
    </header>

    <main class="container">
        <div class="login-container">
            <div class="card p-4 shadow-lg">
                <h3 class="card-title text-center mb-4">Secure Log In</h3>
                
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold small text-muted">Username (or Email)</label>
                        <input type="text" 
                               id="username" 
                               name="username" 
                               class="form-control" 
                               required 
                               placeholder="e.g. caoch.uc@gmail.com">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold small text-muted">Your Password</label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               class="form-control" 
                               required 
                               placeholder="Enter your security credentials">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2 shadow-sm">
                        AUTHENTICATE
                    </button>
                </form>

                <hr class="text-muted my-4">

                <div class="text-center small">
                    <span class="text-muted">Not a member yet?</span> 
                    <a href="registrationform.php" class="text-primary fw-bold text-decoration-underline">Join us</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white-50 text-center py-4 fixed-bottom">
        <div class="container small">
            <p class="mb-1">&copy; 2026 Chi Ngoc Hoang Cao. All Rights Reserved.</p>
            <p class="small text-muted mb-0">Designed for WAPH Program Framework Integration</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
