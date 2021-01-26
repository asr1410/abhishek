<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Parenthesis Checking Using Stack in C Language - Code With Harry</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="/static/videoSeries/css/prism.css" rel="stylesheet">
    <style>
        code[class*="language-"],
        pre[class*="language-"] {
            max-height: 614px;
        }

        .commentContainer {
            overflow-x: auto;
        }
    </style>
    <style>
        .content-holder {
            list-style: none;
            padding: 0;
        }


        .content-holder a {
            color: black;
            text-decoration: none;
        }

        .content-holder li:hover {
            background-color: rgb(239, 239, 240)
        }

        .content-holder-item {
            padding: 23px 12px;
            font-size: 16px;
        }

        li.active {
            background-color: rgb(214, 214, 214);
        }

        .bg-black {
            background-color: black;
        }

        #video-box {
            /* overflow-y: scroll; */
        }

        #content-box {
            max-height: 85vh;
            overflow-y: scroll;

        }

        #course-content-box {
            align-self: flex-start;
            height: 20px;
            position: sticky;
            top: 0;
        }

        .bg-lgrey {
            background-color: rgb(231, 231, 233);
        }
    </style>

    <style>
        .tab-pane {
            min-height: 344px;
        }

        .nav-link {
            font-weight: bold;
            color: black
        }
    </style>

    <style>
        .commentReplies {
            background-color: rgb(231, 231, 233);
            margin: 18px 3px;
        }

        .commentReplies img {
            margin: 8px 14px;
        }
    </style>
    <style>
        #toggleCourse {
            display: none;
        }

        .openCourseHeight {
            height: 76vh !important;
        }

        @media only screen and (max-width: 400px) {
            .nav-link {
                font-size: 16px;
                padding: 9px 6px;
            }

            #course-content-box {
                height: 57px;
            }
        }

        @media only screen and (max-width: 560px) {
            img.rounded-circle {
                height: 0px;
                visibility: hidden;
            }
        }

        @media only screen and (max-width: 768px) {
            #course-content-box {
                height: 46px;
                transition: height 0.4s;
                position: static;
            }

            #content-box {
                height: 70vh;
                visibility: hidden;
            }

            #toggle-button {
                visibility: visible;
            }

            #video-box {
                z-index: 1;
            }

            #sticky-d {
                position: sticky;
                top: 0;
                z-index: 1;
            }

            #toggleCourse {
                display: inline;
            }

            .other {
                margin-left: -15px;
                margin-right: -15px;
            }
        }
    </style>
    <style>
        #video-box2 {
            font-size: 14pt;
            font-family: helvetica;
        }

        #video-box2 img {
            cursor: pointer;
        }

        #video-box2 pre code {
            font-size: 16px;
        }

        .commentContainer pre {
            font-size: 14pt;
            font-family: helvetica;

        }

        #video-box2 h6,
        h5,
        h4,
        h2,
        h3,
        h1 {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .tab-pane {
            min-height: 100vh;
        }

        div.toolbar-item button {
            color: white !important;
            border: 2px solid white !important;
            margin-right: 23px;
        }

        @media screen and (max-width: 768px) {
            div.toolbar-item button {
                margin-right: 0px;
            }
        }

        #previewModal .modal-dialog {
            max-width: 80%;
        }
    </style>



    <link rel="stylesheet" href="/static/home/css/navbar.css">
    <link rel="icon" type="image/png" href="/static/home/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60726752-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-60726752-3');
    </script>

    <!-- Google Ads Auto -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9655830461045889",
            enable_page_level_ads: true
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img class="brandLogo" src="/static/home/img/photo.png" alt="My image"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item font-weight-bold">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item font-weight-bold">
                    <a class="nav-link" href="/videos">Videos</a>
                </li>

                <li class="nav-item font-weight-bold">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>

                <li class="nav-item font-weight-bold">
                    <a class="nav-link" href="/contact">Contact Me</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 mr-3" method="get" action="/search/">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>

            </form>

            <div>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Login</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>
            </div>

        </div>

    </nav>


    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="loginModal">Login using your credentials</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="/profile/login" method='post'><input type="hidden" name="csrfmiddlewaretoken" value="I4nxpaYgNKlvVYBTWvXLnFYwhTkOZfbM7HaV0L6GHuxpvX00Da2oBTXwNlXXLLPU">
                        <div class="form-group">
                            <label for="lusername">Username</label>
                            <input type="name" class="form-control" id="luname" placeholder="Enter your username" name="uname">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdvcqwUAAAAACmPYNVoiJA7D84xLSQQt5g9p10m"></div>
                        <input type="hidden" name="path" value="/videos/data-structures-and-algorithms-in-hindi-33">

                        <button type="submit" class="btn btn-danger mt-2" id="loginsubmit">Login</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- SignUp Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModal">SignUp for an account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form name="contact" method="post" action="/profile/signup"><input type="hidden" name="csrfmiddlewaretoken" value="I4nxpaYgNKlvVYBTWvXLnFYwhTkOZfbM7HaV0L6GHuxpvX00Da2oBTXwNlXXLLPU">

                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter your Name" name="uname">
                            <small id="unamehelp" class="form-text text-muted px-1">
                                Your unique username must be less than 10 characters (only lowecase letters, numbers & underscores
                                allowed) with no spaces
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter your First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter your Last Name" name="lname">
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <div class="mx-0">
                                <div class="col-md-8 px-0">
                                    <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
                                    <small id="otpMessage" class="form-text"></small>
                                </div>
                                <div class="col-md-4 my-1 px-0">
                                    <button class="btn btn-danger btn-sm mt-2" id="otpbtn">Send OTP</button>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="otp">Enter OTP</label>
                            <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="otp">
                        </div>

                        <div class="form-group">
                            <label for="password">Choose a password</label>
                            <input type="password" class="form-control" id="password" placeholder="Choose a password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password2">Retype a password</label>
                            <input type="password" class="form-control" id="password2" placeholder="Retype your password" name="password2">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdvcqwUAAAAACmPYNVoiJA7D84xLSQQt5g9p10m"></div>
                        <input type="hidden" name="path" value="/videos/data-structures-and-algorithms-in-hindi-33">
                        <button type="submit" class="btn btn-danger mt-2">SignUp</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Image modal -->
    <!-- Button trigger modal -->


    <!-- Image Preview Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-auto">
                    <img src="" alt="" class="img-fluid" id="modalImage">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row" id="sticky-d">
            <!-- Video Holder -->
            <div class="col-md-9 bg-black px-0" id="video-box">
                <div class="container videoContainer embed-responsive embed-responsive-16by9 px-3">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Wj_Xtj6so3U" allowfullscreen></iframe>
                </div>
                <hr>
            </div>

            <!-- Course content holder -->
            <div class="col-md-3 px-0" id="course-content-box">
                <div class="row mx-0 py-2 px-3 bg-lgrey">
                    <h5> Course Content<i class="mx-2 fas fa-plus" id="toggleCourse"></i></h5>
                    <button id="togglePlayer" class="btn btn-sm btn-danger mx-3">Hide Player</button>
                </div>
                <div id="content-box">
                    <ul class="content-holder">

                        <a href="/videos/data-structures-and-algorithms-in-hindi-1">
                            <li class="content-holder-item  ">
                                1. Introduction to Data Structures &amp; Algorithms
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-2">
                            <li class="content-holder-item  ">
                                2. Time Complexity and Big O Notation (with notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-3">
                            <li class="content-holder-item  ">
                                3. Asymptotic Notations: Big O, Big Omega and Big Theta Explained (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-4">
                            <li class="content-holder-item  ">
                                4. Best Case, Worst Case and Average Case Analysis of an Algorithm (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-5">
                            <li class="content-holder-item  ">
                                5. How to Calculate Time Complexity of an Algorithm + Solved Questions (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-6">
                            <li class="content-holder-item  ">
                                6. Arrays and Abstract Data Type in Data Structure (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-7">
                            <li class="content-holder-item  ">
                                7. Array as An Abstract Data Type in Data Structures(With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-8">
                            <li class="content-holder-item  ">
                                8. Implementing Array as an Abstract Data Type in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-9">
                            <li class="content-holder-item  ">
                                9. Operations on Arrays in Data Structures: Traversal, Insertion, Deletion and Searching
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-10">
                            <li class="content-holder-item  ">
                                10. Coding Insertion Operation in Array in Data Structures in C language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-11">
                            <li class="content-holder-item  ">
                                11. Coding Deletion Operation in Array Using C Language (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-12">
                            <li class="content-holder-item  ">
                                12. Linear Vs Binary Search + Code in C Language (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-13">
                            <li class="content-holder-item  ">
                                13. Introduction to Linked List in Data Structures (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-14">
                            <li class="content-holder-item  ">
                                14. Linked List Data Structure: Creation and Traversal in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-15">
                            <li class="content-holder-item  ">
                                15. Insertion of a Node in a Linked List Data Structure
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-16">
                            <li class="content-holder-item  ">
                                16. Insertion in a Linked List in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-17">
                            <li class="content-holder-item  ">
                                17. Deletion in a Linked List | Deleting a node from Linked List Data Structure
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-18">
                            <li class="content-holder-item  ">
                                18. Delete a Node from Linked List (C Code For Deletion From Beginning, End, Specified Position &amp; Key)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-19">
                            <li class="content-holder-item  ">
                                19. Circular Linked List and Operations in Data Structures (With Notes)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-20">
                            <li class="content-holder-item  ">
                                20. Circular Linked Lists: Operations in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-21">
                            <li class="content-holder-item  ">
                                21. Doubly Linked Lists Explained With Code in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-22">
                            <li class="content-holder-item  ">
                                22. Introduction to Stack in Data Structures
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-23">
                            <li class="content-holder-item  ">
                                23. Implementing Stack Using Array in Data Structures
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-24">
                            <li class="content-holder-item  ">
                                24. C Code For Implementing Stack Using Array in Data Structures
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-25">
                            <li class="content-holder-item  ">
                                25. Push, Pop and Other Operations in Stack Implemented Using an Array
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-26">
                            <li class="content-holder-item  ">
                                26. Coding Push(), Pop(), isEmpty() and isFull() Operations in Stack Using an Array| C Code For Stack
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-27">
                            <li class="content-holder-item  ">
                                27. Peek Operation in Stack Using Arrays (With C Code &amp; Explanation)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-28">
                            <li class="content-holder-item  ">
                                28. stackTop, stackBottom &amp; Time Complexity of Operations in Stack Using Arrays
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-29">
                            <li class="content-holder-item  ">
                                29. How to Implement Stack Using Linked List?
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-30">
                            <li class="content-holder-item  ">
                                30. Implementing all the Stack Operations using Linked List (With Code in C)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-31">
                            <li class="content-holder-item  ">
                                31. peek(), stackTop() and Other Operations on Stack Using Linked List (with C Code)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-32">
                            <li class="content-holder-item  ">
                                32. Parenthesis Matching Problem Using Stack Data Structure (Applications of Stack)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-33">
                            <li class="content-holder-item  active
                                                ">
                                33. Parenthesis Checking Using Stack in C Language
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-34">
                            <li class="content-holder-item  ">
                                34. Multiple Parenthesis Matching Using Stack with C Code
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-35">
                            <li class="content-holder-item  ">
                                35. Infix, Prefix and Postfix Expressions
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-36">
                            <li class="content-holder-item  ">
                                36. Infix To Postfix Using Stack
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-37">
                            <li class="content-holder-item  ">
                                37. Coding Infix to Postfix in C using Stack
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-38">
                            <li class="content-holder-item  ">
                                38. Queue Data Structure in Hindi
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-39">
                            <li class="content-holder-item  ">
                                39. Queue Implementation: Array Implementation of Queue in Data Structure
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-40">
                            <li class="content-holder-item  ">
                                40. Array implementation of Queue and its Operations in Data Structure
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-41">
                            <li class="content-holder-item  ">
                                41. C Code For Queue and its Operations Using Arrays in Data Structure
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-42">
                            <li class="content-holder-item  ">
                                42. Introduction to Circular Queue in Data Structures
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-43">
                            <li class="content-holder-item  ">
                                43. enqueue(), dequeue() &amp; other Operations on Circular Queue
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-44">
                            <li class="content-holder-item  ">
                                44. C Code For Circular Queue &amp; Operations on Circular Queue in Hindi
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-45">
                            <li class="content-holder-item  ">
                                45. Queue Using Linked Lists
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-46">
                            <li class="content-holder-item  ">
                                46. Implementing Queue Using Linked List in C Language (With Code)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-47">
                            <li class="content-holder-item  ">
                                47. Double-Ended Queue in Data Structure (DE-Queue Explained)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-48">
                            <li class="content-holder-item  ">
                                48. Introduction to Sorting Algorithms
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-49">
                            <li class="content-holder-item  ">
                                49. Criteria For Analysis of Sorting Algorithms
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-50">
                            <li class="content-holder-item  ">
                                50. Bubble Sort Algorithm in Hindi
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-51">
                            <li class="content-holder-item  ">
                                51. Bubble Sort Program in C
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-52">
                            <li class="content-holder-item  ">
                                52. Insertion Sort Algorithm in Hindi
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-53">
                            <li class="content-holder-item  ">
                                53. Insertion Sort in C Language (With Explanation)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-54">
                            <li class="content-holder-item  ">
                                54. Selection Sort Algorithm
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-55">
                            <li class="content-holder-item  ">
                                55. Selection Sort Program in C
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-56">
                            <li class="content-holder-item  ">
                                56. QuickSort Algorithm in Hindi (With Code in C)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-57">
                            <li class="content-holder-item  ">
                                57. Analysis of QuickSort Sorting Algorithm
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-58">
                            <li class="content-holder-item  ">
                                58. MergeSort Sorting Algorithm in Hindi
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-59">
                            <li class="content-holder-item  ">
                                59. MergeSort Source Code in C (Helpful Explanation)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-60">
                            <li class="content-holder-item  ">
                                60. Count Sort Algorithm
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-61">
                            <li class="content-holder-item  ">
                                61. Introduction to Trees
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-62">
                            <li class="content-holder-item  ">
                                62. What is a Binary Tree?
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-63">
                            <li class="content-holder-item  ">
                                63. Types of Binary Trees
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-64">
                            <li class="content-holder-item  ">
                                64. Representation of a Binary Tree
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-65">
                            <li class="content-holder-item  ">
                                65. Linked Representation Of Binary Tree in C
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-66">
                            <li class="content-holder-item  ">
                                66. Traversal in Binary Tree (InOrder, PostOrder and PreOrder Traversals)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-67">
                            <li class="content-holder-item  ">
                                67. Preorder Traversal in a Binary Tree (With C Code)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-68">
                            <li class="content-holder-item  ">
                                68. PostOrder Traversal in a Binary Tree (With C Code)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-69">
                            <li class="content-holder-item  ">
                                69. InOrder Traversal in a Binary Tree (With C Code)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-70">
                            <li class="content-holder-item  ">
                                70. *Best* Trick To Find PreOrder, InOrder &amp; PostOrder Traversal
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-71">
                            <li class="content-holder-item  ">
                                71. Binary Search Trees: Introduction &amp; Properties
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-72">
                            <li class="content-holder-item  ">
                                72. Checking if a binary tree is a binary search tree or not!
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-73">
                            <li class="content-holder-item  ">
                                73. Searching in a Binary Search Trees (Search Operation)
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-74">
                            <li class="content-holder-item  ">
                                74. C Code For Searching in a BST
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-75">
                            <li class="content-holder-item  ">
                                75. Iterative Search in a Binary Search Tree
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>

                        <a href="/videos/data-structures-and-algorithms-in-hindi-76">
                            <li class="content-holder-item  ">
                                76. Insertion in a Binary Search Tree
                                <div class="mx-3">
                                    <i class="far fa-play-circle"></i> Free YouTube Video
                                </div>
                            </li>
                        </a>


                    </ul>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-md-9 bg-black px-0" id="video-box2">
            <div class="other bg-light">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="qna-tab" data-toggle="tab" href="#qna" role="tab" aria-controls="qna" aria-selected="false">Q&A</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="resources-tab" data-toggle="tab" href="#resources" role="tab" aria-controls="resources" aria-selected="false">Files</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">Announcements</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show mx-4 mt-3 active" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                        <div class="container clearfix py-2 px-0">
                            <h3 class="mb-3">

                                Parenthesis Checking Using Stack in C Language
                            </h3>
                            <h4>Source code as described in the video:</h4>
                            <pre class="language-c"><code>#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

struct stack
{
    int size;
    int top;
    char *arr;
};

int isEmpty(struct stack *ptr)
{
    if (ptr-&gt;top == -1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

int isFull(struct stack *ptr)
{
    if (ptr-&gt;top == ptr-&gt;size - 1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

void push(struct stack* ptr, char val){
    if(isFull(ptr)){
        printf("Stack Overflow! Cannot push %d to the stack\n", val);
    }
    else{
        ptr-&gt;top++;
        ptr-&gt;arr[ptr-&gt;top] = val;
    }
}

char pop(struct stack* ptr){
    if(isEmpty(ptr)){
        printf("Stack Underflow! Cannot pop from the stack\n");
        return -1;
    }
    else{
        char val = ptr-&gt;arr[ptr-&gt;top];
        ptr-&gt;top--;
        return val;
    }
}

int parenthesisMatch(char * exp){
    // Create and initialize the stack
    struct stack* sp;
    sp-&gt;size = 100;
    sp-&gt;top = -1;
    sp-&gt;arr = (char *)malloc(sp-&gt;size * sizeof(char));


    for (int i = 0; exp[i]!='\0'; i++)
    {
        if(exp[i]=='('){
            push(sp, '(');
        }
        else if(exp[i]==')'){
            if(isEmpty(sp)){
                return 0;
            }
            pop(sp); 
        }
    }

    if(isEmpty(sp)){
        return 1;
    }
    else{
        return 0;
    }
    
}
int main()
{
    char * exp = "((8)(*--$$9))";
    // Check if stack is empty
    if(parenthesisMatch(exp)){
        printf("The parenthesis is matching");
    }
    else{
        printf("The parenthesis is not matching");
    }
    return 0;
}</code></pre>

                            <div class="my-4 d-flex justify-content-between">

                                <a class="btn btn-danger" href="/videos/data-structures-and-algorithms-in-hindi-32">&larr; Previous </a>



                                <a class="btn btn-danger" href="/videos/data-structures-and-algorithms-in-hindi-34">Next &rarr;</a>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade mx-4 mt-3" id="qna" role="tabpanel" aria-labelledby="qna-tab">
                        <div id="comments" class="container px-0">


                            <div class="my-4">
                                <h2><label for="inputAddress">You must be logged in to post a comment!</label></h2>
                                <button type="submit" class="btn btn-danger my-2 my-sm-0 ml-2" data-toggle="modal" data-target="#loginModal">Login Here</button>
                                <button type="submit" class="btn btn-danger my-2 my-sm-0 ml-2" data-toggle="modal" data-target="#signupModal">Signup Here</button>
                            </div>




                            <div class="my-2">
                                <h2>Be the first person to comment! </h2>
                            </div>

                        </div>

                        <div class="container mt-4 mb-0 px-0">
                            <h3>Comments(0)</h3>


                        </div>




                    </div>
                    <div class="tab-pane fade mx-4 mt-3" id="resources" role="tabpanel" aria-labelledby="resources-tab">
                        <div class="container px-0">

                            <h4>Resources</h4>

                            <p>No downloadable resources for this video. If you think you need anything, please post it
                                in the QnA!</p>

                            <ol>

                            </ol>
                        </div>

                    </div>
                    <div class="tab-pane fade mx-4 mt-3" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                        <div class="container">

                            <h4>Course Announcements</h4>
                            <p>
                                Any Course related announcements will be posted here


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- FOOTER -->
    <footer class="container-fluid bg-dark my-0 py-3 text-light">
        <p class="mb-0 text-center">&copy; 2020-2021 CodeWithHarry.com</p>
        <p class="mb-0 text-center">
            <a href="#">Back to top |</a>
            <a href="#">Privacy |</a>
            <a href="#">Terms</a>
        </p>

    </footer>
    <!-- Custom JavaScript -->
    <script src="https://apis.google.com/js/platform.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/433888fe69.js" crossorigin="anonymous" defer></script>
    <script>
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }
        let otpbtn = document.getElementById('otpbtn');
        if (otpbtn != undefined) {
            otpbtn.addEventListener('click', (e) => {
                otpbtn.innerText = 'Sending...';
                e.preventDefault();
                if (!otpbtn.classList.contains('disabled')) {
                    otpbtn.classList.add('disabled');
                    otpbtn.disabled = true;
                    csrf_token = getCookie('csrftoken');
                    let formData = new FormData();
                    formData.append('email', document.getElementById('email').value);
                    formData.append('csrfmiddlewaretoken', csrf_token);
                    fetch('/utils/sendotp', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);
                            if (data.startsWith("Error")) {
                                otpMessage.classList.add('text-danger');
                                otpbtn.innerText = 'Error';
                            } else {
                                otpMessage.classList.add('text-success');
                                otpbtn.innerText = 'OTP Sent';
                            }
                            otpMessage.innerText = data;
                        })
                        .catch(error => {
                            console.error(error)
                        })
                } else {
                    // Otp has already been sent
                }

            });
        }
    </script>

    <script defer src="/static/videoSeries/js/prism.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
    <!-- Font Awesome JS -->
    <!-- <script defer src="https://kit.fontawesome.com/433888fe69.js" crossorigin="anonymous"></script> -->

    <!-- jQuery Custom Scroller CDN
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <!-- <script type="text/javascript">
    // Sidebar toggle
    $(document).ready(function () {
        $('#sidebarCollapse').add('#dismiss').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script> -->

    <script>
        function disableScrolling() {
            console.log("Disable scrolling");
            let x = window.scrollX;
            let y = window.scrollY;
            window.onscroll = function() {
                window.scrollTo(x, y);
            };
        }

        function enableScrolling() {
            console.log("Enable scrolling");
            window.onscroll = function() {};
        }

        // Add copy button
        // let pres = document.getElementsByTagName('pre');
        // Array.from(pres).forEach((element2) => {
        //     let element = document.createElement('button');
        //     element.setAttribute('class', 'btn btn-sm btn-danger');
        //     element.innerHTML = 'Copy';
        //     element.style.float = 'right';

        //     element.addEventListener('click', (e) => {
        //         e.preventDefault();
        //         disableScrolling();
        //         console.log(e)
        //         let x = window.screenX;
        //         let y = window.screenY;

        //         element.innerHTML = 'Copied!';
        //         let tarea = document.createElement('textarea');
        //         tarea.innerHTML = element.parentElement.children[1].innerText;
        //         document.body.append(tarea);
        //         tarea.focus();
        //         tarea.select();
        //         document.execCommand('copy');
        //         tarea.style.display = 'none';
        //         setTimeout(() => {
        //             element.innerHTML = 'Copy';
        //         }, 2000);
        //         setTimeout(() => {
        //             enableScrolling();
        //         }, 20);
        //     })
        //     element2.insertBefore(element, element2.children[0]);
        // })
    </script>

    <script>
        courseContainer = document.querySelector('#content-box');
        stickyD = document.getElementById('sticky-d')
        toggleCourse.addEventListener('click', () => {
            console.log('click');
            box = document.querySelector('#course-content-box');
            // Opening the container
            if (!box.classList.contains('openCourseHeight')) {
                courseContainer.style.visibility = 'visible';
                box.classList.add('openCourseHeight');
                toggleCourse.classList.add('fa-minus');
                toggleCourse.classList.remove('fa-plus');
                stickyD.classList.remove('position-sticky')
                stickyD.classList.add('position-static')
                stickyD.scrollIntoView();
            } else {
                courseContainer.style.visibility = 'hidden';
                box.classList.remove('openCourseHeight');
                toggleCourse.classList.remove('fa-minus');
                toggleCourse.classList.add('fa-plus');
                stickyD.classList.remove('position-static')
                stickyD.classList.add('position-sticky')

            }
        })
    </script>

    <script>
        // Making all images inside main box responsive and adding border
        let mainVidBox = document.getElementById('video-box2');
        Array.from(mainVidBox.getElementsByTagName('img')).forEach((element, ind) => {
            element.classList.add('img-fluid')
            element.classList.add('border');
            element.classList.add('border-dark');
            element.classList.add('rounded')
        });

        // Hide/Show Player
        togglePlayer.addEventListener('click', () => {
            sd = document.getElementById("sticky-d");
            vbox = document.getElementById("video-box");
            if (window.screen.width > 768) {
                if (sd.style.height == "") {
                    sd.style.height = 0;
                    vbox.style.visibility = "hidden";
                    sd.style.display = ""
                    togglePlayer.innerText = "Show Player";
                } else {
                    sd.style.height = "";
                    vbox.style.visibility = "visible";
                    togglePlayer.innerText = "Hide Player";
                }
            }
            // Write the mobile logic for player
            else {
                if (vbox.style.display != "none") {
                    vbox.style.display = "none";
                    togglePlayer.innerText = "Show Player";
                } else {
                    vbox.style.display = "block";
                    togglePlayer.innerText = "Hide Player";
                }
            }

        })

        // Preview image by clicking logic:
        imgs = document.getElementsByTagName('img');
        Array.from(imgs).forEach((element) => {
            element.addEventListener('click', (e) => {
                console.log("clicked", e.target.src);
                modalImage.src = e.target.src;
                $('#previewModal').modal('show')
            })
        })
    </script>

</body>

</html>