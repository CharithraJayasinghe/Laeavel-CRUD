<!DOCTYPE html>
<title>Crud Home page</title>
<head>

    <h1>@lang('public.This is Home Page') </h1>
</head>
<body>



    <a href="/products">@lang('public.Go to products') @endlang</a><br>
    <a href="/drivers">@lang('public.Go to drivers')</a>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">@lang('public.My App')</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">@lang('public.Home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">@lang('public.About Us')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">@lang('public.Services')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">@lang('public.Contact Us')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="locale/jp">Japan</a></li>
                        <li><a class="dropdown-item" href="locale/en">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</body>
