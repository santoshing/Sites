<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($title)) {
            echo ($title);
        } else {
            echo 'Blog Page';
        }  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <header class="d-flex  py-3 mb-4 border-bottom">
            <a href="http://blogs.test" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                </svg><img src="https://www.thetolet.com/images/svg/header-logo.svg" alt="The Tolet" class="navbar-brand-image" height="32px" width="100%">
            </a>

            <ul class="nav text-center">
                <li class="nav-item"><a href="faq.html" class="nav-link active" aria-current="page">FAQ</a>
                </li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="form.html" class="nav-link">Form</a></li>

            </ul>
        </header>