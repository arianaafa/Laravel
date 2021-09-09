<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
<header>
    <div class="px-3 py-5 bg-dark text-white">
        <h1 style="text-align: center">Example Laravel</h1>
    </div>

</header>
    <div class="container">
            @yield('content')
    </div>



<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted" id="ano"></span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><img src="https://img.icons8.com/ios-glyphs/40/000000/twitter--v1.png"/></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="https://img.icons8.com/ios-filled/40/000000/instagram--v2.png"/></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="https://img.icons8.com/material-rounded/40/000000/facebook.png"/></a></li>
        </ul>
    </footer>
</div>
<script src="https://kit.fontawesome.com/4e03e01ede.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>

    const ano = document.getElementById("ano");
    const anoAtual = new Date();

    ano.innerHTML = "© " + anoAtual.getFullYear() + " Company, Inc";

</script>
</body>
</html>
