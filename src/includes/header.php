<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>
<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Main</a></li>
                <li><a href="#">My Profile</a></li>
                <?php if(isset($_SESSION['user_id'])) { ?>
                    <li><a href="#" onclick="logout()">Logout</a></li>
                <?php } else { ?>
                    <li><a href="#" onclick="login()">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>

<script>
    // console.log(123);
</script>