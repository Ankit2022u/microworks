<?php
    session_start();
    $userdata = $_SESSION['userdata'];

    if (!$_SESSION['login']) {
        header("location: ../");    
    }
?>

<!-- HTML begins here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Microworks</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div>
        <img src="../logo-2.jpg" class="img-fluid logox"/>
    </div>
    <div class="mytabs">
        <input type="radio" id="hometab" name="mytabs" checked="checked">
        <label for="hometab">Home</label>
        <section class="tab">
            <div class="row task">
                <div class="col-sm-6">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../resources/carwash.jpg" class="img-fluid cardimage"/>
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Car Washing</h5>
                            <p class="category">Cleaning</p>
                            <p class="card-text">I am going to a vacation tomorrow but I have a lot of work by the end of the day. I want someone who take care of my car wash and cleaning from inside.</p>
                            <a href="" class="btn btn-primary">Show Details</a>
                            <a href="" class="btn btn-success">Chat</a>
                            <a href="" class="btn btn-danger">Accept</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h6 class="distance">0.9km</h6>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2">
                                    <h6 class="price">&#8377; 150</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../resources/ppt.png" class="img-fluid cardimage"/>
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Create Presentation</h5>
                            <p class="category">Technical</p>
                            <p class="card-text">I am a software developer. I am trying to find a skilled person who can create a simple project report for me. Actually I am very tried today.</p>
                            <a href="" class="btn btn-primary">Show Details</a>
                            <a href="" class="btn btn-success">Chat</a>
                            <a href="" class="btn btn-danger">Accept</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h6 class="distance">Work From Home</h6>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2">
                                    <h6 class="price">&#8377; 175</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row task">
                <div class="col-sm-6">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../resources/maths.jpeg" class="img-fluid cardimage"/>
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tuition</h5>
                            <p class="category">Education</p>
                            <p class="card-text">My son is in 6th standard, he is weak in maths and his semester exam are going to start after some days. I want someone who can teach my son and make his maths strong enough to score good marks.</p>
                            <a href="" class="btn btn-primary">Show Details</a>
                            <a href="" class="btn btn-success">Chat</a>
                            <a href="" class="btn btn-danger">Accept</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h6 class="distance">1.4km</h6>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2">
                                    <h6 class="price">&#8377; 250</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../resources/bride.jpg" class="img-fluid cardimage"/>
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bridal Makeover</h5>
                            <p class="category">Beauty</p>
                            <p class="card-text">I am going to get married  tomorrow . I want a perfect bridal look, that's why I need someone who can do my makeover and make me look more beautiful.</p>
                            <a href="" class="btn btn-primary">Show Details</a>
                            <a href="" class="btn btn-success">Chat</a>
                            <a href="" class="btn btn-danger">Accept</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h6 class="distance">3.7km</h6>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2">
                                    <h6 class="price">&#8377; 1250</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <input type="radio" id="chatstab" name="mytabs">
        <label for="chatstab">Chats</label>
        <section class="tab">
            <h2>Chats</h2>
        </section>
    
        <input type="radio" id="profiletab" name="mytabs">
        <label for="profiletab">Profile</label>
        <section class="tab">
            <h2>Profile</h2>
        </section>
    
    </div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
    ></script>
</body>
</html>