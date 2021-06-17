Skip to content
Why GitHub? 
Team
Enterprise
Explore 
Marketplace
Pricing 
Search

Sign in
Sign up
abdeldjalilhachimi
/
login-page-boostrap4
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
login-page-boostrap4/index.html
@abdeldjalilhachimi
abdeldjalilhachimi login page with bootstrap 4
Latest commit 0141e05 on Aug 17, 2020
 History
 1 contributor
114 lines (94 sloc)  4.21 KB
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,200;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>inthrma</title>
    <style>

    </style>
</head>

<body>
    <!-- Start Container  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="sign-up ">
                    <div class="sign-up-title ">
                        <h1>
                            EASY<span>AD</span>
                        </h1>
                        <p>
                            Create sponsorship campaings just got a whole lot easier
                        </p>
                    </div>
                    <div class="sign-up-image ">

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="sing-up-info text-center">
                    <h2>Sign up for a new account</h2>
                    <p>It's a free and only takes 30 seconds</p>
                    <a href="#" class="sign-up-with-facebook"> <i class="fa fa-facebook mr-3 "></i> Sign up
                        using
                        facebook </a>
                    <p>we will never post without your premession </p>
                    <p> ------------------------ OR -----------------------</p>
                </div>
                <form class="form-group text-center">
                    <div class="form-group">

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="First Name...">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="Last Name...">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="Email Address...">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="Confirm Email Address...">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="Password...">

                    </div>
                    <a href="#" class="sign-up-with-email"> Sign up With Email </a>
                    <p>By clicking the button above you agre to our <br>
                        <a href=""> Terms of Use Privacy Policy </a> and <a href=""> Fees</a> </p>
                </form>
                <hr>
                <div class="creat-newaccount text-center">
                    <p> Are you a non-profit?</p>
                    <a href=""> Click Here to Create Account</a>
                </div>
                <hr>
                <div class="signup-with-account text-cente">
                    <p class="signup-with-account text-center"> Already have an account? <br>
                        <a href="#" class="sign-up-with-account"> Log in to your Account </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Container -->



    <!-- jquery -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <!-- popper js  -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- main js -->
    <script src="/js/main.js">

    </script>
</body>

</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete