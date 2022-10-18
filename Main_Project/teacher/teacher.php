<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="../css/master.css" rel="stylesheet">
    <link href="../css/maincontent.css" rel="stylesheet">
    <link href="../css/teacher_maincontent.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,200;1,700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/72c32f013b.js" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Header -->
    <?php include('assets../header.view.php') ?>

    <!--Body content -->

    <div class="container-fluid " id="content">

        <div class="row overflow-hidden">

            <!-- Left Side Nav -->
            <div class="col-md-2 " id="sideNav">
                <?php include('assets../sidebar.view.php') ?>
            </div>

            <!-- Main Content -->
            <div class="col-md-8 py-4 main-content" id="mainContent">
                <div class="row mx-0">

                    <!-- Announcement -->
                   
                    <div class="custom-border">
                        <div class="card mb-2">
                            <div class="card-header">
                                <h3>Announcement</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-header">Dear Charo,</p>
                                <p class="card-text text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Illo
                                    aperiam
                                    distinctio eius quidem maiores, hic
                                    tempore. Atque quaerat maiores quae at illo dolore in accusamus pariatur, mollitia
                                    nisi
                                    eos blanditiis
                                    deleniti harum neque incidunt debitis doloribus temporibus earum nostrum deserunt
                                    impedit reiciendis
                                    distinctio. Quibusdam fugiat culpa nostrum unde, qui dolores?</p>

                                <div class="text-closing d-flex flex-column align-items-end">
                                    <p class="card-text text-remarks mb-0">I'm yours,</p>
                                    <p class="card-text text-author">Admin Addones</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Subjects List -->
                <div class="row mx-0 mt-3 subject-list" id="mainPageSubject">
                    <div class="container-fluid custom-border">

                        <h3>Subjects</h3>
                        <div class="row ">

                            <!-- Subjects Display -->
                            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">

                                    <div class="card-body">

                                        <div class="progress-bar me-3">
                                            <div class="circular-progress">
                                                <div class="value-container"></div>
                                            </div>
                                        </div>

                                        <h3 class="card-title">Tsismiss Algorithm</h3>
                                        <p class="card-text">BSIT 4.1B</p>
                                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                                        <div class="text-center my-3">
                                            <a href="teacher.subject.php" class="btn startBtn">Start</a>
                                            <!-- <button class="btn startBtn">Start</button> -->
                                        </div>

                                        <div class="card-menus mt-4 d-flex justify-content-between ">


                                            <button type="button" class="btn position-relative p-0">
                                                <i class="fa-regular fa-clipboard"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    3
                                                </span>
                                            </button>
                                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">

                                    <div class="card-body">

                                        <div class="progress-bar me-3">
                                            <div class="circular-progress">
                                                <div class="value-container"></div>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Tsismiss Algorithm</h3>
                                        <p class="card-text">BSIT 4.1B</p>
                                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                                        <div class="text-center my-3">
                                            <button class="btn startBtn">Start</button>
                                        </div>

                                        <div class="card-menus mt-4 d-flex justify-content-between ">

                                            <button type="button" class="btn position-relative p-0">
                                                <i class="fa-regular fa-clipboard"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    3
                                                </span>
                                            </button>
                                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">

                                    <div class="card-body">

                                        <div class="progress-bar me-3">
                                            <div class="circular-progress">
                                                <div class="value-container"></div>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Tsismiss Algorithm</h3>
                                        <p class="card-text">BSIT 4.1B</p>
                                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                                        <div class="text-center my-3">
                                            <button class="btn startBtn">Start</button>
                                        </div>

                                        <div class="card-menus mt-4 d-flex justify-content-between ">

                                            <button type="button" class="btn position-relative p-0">
                                                <i class="fa-regular fa-clipboard"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    3
                                                </span>
                                            </button>
                                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">

                                    <div class="card-body">

                                        <div class="progress-bar me-3">
                                            <div class="circular-progress">
                                                <div class="value-container"></div>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Tsismiss Algorithm</h3>
                                        <p class="card-text">BSIT 4.1B</p>
                                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                                        <div class="text-center my-3">
                                            <button class="btn startBtn">Start</button>
                                        </div>

                                        <div class="card-menus mt-4 d-flex justify-content-between ">

                                            <button type="button" class="btn position-relative p-0">
                                                <i class="fa-regular fa-clipboard"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    3
                                                </span>
                                            </button>
                                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Banner -->
            <div class="custom-border col-md-2 mt-4" id="rightBanner">
               <?php include('assets/banner.view.php')?>
            </div>

        </div>
    </div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- J-query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Javascrpit Files -->
    <script src="js/main.js"></script>


    <script>
    let totalModule = 10;
    let speed = 10;

    // List of progress bar --
    var progressList = document.querySelectorAll('.circular-progress');

    // Calculate the subject progress --
    let subjectProgressEndValue = progressEndValue(6, totalModule);

    // Loop through each progress bar
    for (i = 0; i < progressList.length; i++) {
        progressList[i];
        progressDisplay(progressList[i], subjectProgressEndValue);
    }

    function progressDisplay(progressIndicator, endValue) {
        let progressValue = 0;
        let progress = setInterval(() => {
            progressValue++;
            if (endValue == 0) {
                progressValue = 0;
            }

            progressIndicator.style.background = `conic-gradient(
        #FFD61E ${progressValue * 3.6}deg,
        #fff ${progressValue * 3.6}deg
    )`;
            if (progressValue == endValue) {
                clearInterval(progress);
            }
        }, speed);
    }

    function progressEndValue(count, total) {
        let result = Math.round((count / total) * 100);
        if (result == 0) {
            return 100;
        }
        return result;
    }
    </script>
</body>

</html>