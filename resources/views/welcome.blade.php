<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Jun Rhy Crodua world!</title>

        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .banner {
                background-color: #F8F8F8;
                background-image: url('/images/banner1.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .profile {
                height: 180px;
                width: 180px;
                background-color: #bbb;
                background-image: url('/images/profile.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                border-radius: 50%;
                border: 2px solid #fff;
                display: inline-block;
                text-align: center;
            }

            .profile-name {
                font-size: 30pt;
                font-weight: bolder;
                text-transform: uppercase;
                text-align: center;
                color: #fff;
                background-color: #000;
            }

            .services {
                color: #fff;
            }

            .projects {
                border: 10px solid #fff;
            }

            .p-img {
                height: 350px;
                background-color: #eee;
                border: 1px solid #ccc;
            }

            .p-title {
                background-color: #fff;
                padding: 2px;
                border: 1px solid #ccc;
                border-top: 0;
                font-size: 18pt;
                font-weight: bold;
            }

            img.nav-item {
                height: 15px;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="container banner">
        <br>
        <div class="d-flex justify-content-center">
             <div class="m-2 p-2 p-t-5 profile"></div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <div class="p-2 profile-name">Jun Rhy Crodua</div>
        </div>
        <div class="d-flex justify-content-center services">
            <div class="m-1 align-self-end">Web Developer <span>/</span></div>
            <div class="m-1 align-self-end">IT Consultant <span>/</span></div>
            <div class="m-1 align-self-end">Music Producer</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="hidden-lg hidden-md hidden-sm">&nbsp;</div>
                <div class="row gx-0">
                    <div class="col-md-12 projects">
                        <div class="row gx-0 p-img"><img src="/images/banner2.jpeg"></div>
                        <div class="row gx-0 p-2 p-title">Web Development</div>
                    </div>
                </div>
            </div>

           <div class="col-md-4">
                <div class="hidden-lg hidden-md hidden-sm">&nbsp;</div>
                <div class="row gx-0">
                    <div class="col-md-12 projects">
                        <div class="row gx-0 p-img"><img src="/images/banner3.jpeg"></div>
                        <div class="row gx-0 p-2 p-title">IT Consultation</div>
                    </div>
                </div>
            </div>
          
            <div class="col-md-4">
                <div class="hidden-lg hidden-md hidden-sm">&nbsp;</div>
                <div class="row gx-0">
                    <div class="col-md-12 projects">
                        <div class="row gx-0 p-img"><img src="/images/banner4.jpeg"></div>
                        <div class="row gx-0 p-2 p-title">Music Production</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row gx-0">
            <div class="d-flex bg-white">
                <div class="p-2" style="margin-right: auto;">Web development projects</div>
                <div class="p-2"><img src="/icons/open-iconic/svg/chevron-left.svg" class="nav-item"></div>
                <div class="p-2"><img src="/icons/open-iconic/svg/chevron-right.svg" class="nav-item"></div>
            </div>   
        </div>
        <br>
    
    </body>
</html>
