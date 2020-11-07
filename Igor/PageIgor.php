<!DOCTYPE html>
<html lang="ru">
<head class="header">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PageStyleIgor.css">
    <img class="profileImage" src="img/Igor.jpg" width="550" height="50" /> 
</head>
<body class="page">
<header>
    <h2 class="sectionHead">Hey, I'm Igor! </h2>
    <h3 class="sectionHead">And I love to make games</h3>
</header>

<section class="about container">
    <div class="about-content">

        <div class="reportDoc">
            <a class="reportDocLink" href="report.html"> Report on laboratory work.</a>
        </div>

        <br><p5 class="aboutP5">Curriculum vitae</p5></br>
        <p6 class="aboutP6 textRes">Personal Details:</p6>
        <section class="skills textRes">
            <li>Igor Kondratev</li>
            <li>GitHub: <a class="githubLink" href="https://github.com/wingsmight">github.com/wingsmight</a></li>
            <li>Date of birth: 7/5/2001 </li>
            <li>Phone: +7-913-480-7883</li>
            <li>E-mail: wingsmight@gmail.com </li>
        </section>
    </div>
    </section>
    <section class="about container">
        <div class="about-content">
            <p6 class="aboutP6 textRes"> Education:</p6>
            <section>
                <li>2018 - 2022 &nbsp; &nbsp; &nbsp; &nbsp; Novosibirsk State Technical University Bachelor’s degree of applied math and computer science </li>
            </section>
            <p6 class="aboutP6 textRes"> Professional experience:</p6>
            <section>
                <li>Spring 2020 – present &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Development of the game “Let’s talk”. GitHub link: <a class="githubLink" href="https://github.com/guleviz/lets-talk">github.com/guleviz/lets-talk</a></li>
                <li>Winter 2020 – spring 2020 &nbsp; &nbsp; &nbsp; &nbsp; Development of the app “Make Day”. GitHub link: <a class="githubLink" href="https://github.com/wingsmight/MakeDay">github.com/wingsmight/MakeDay</a></li>
                <li>Winter 2019 – spring 2020 &nbsp; &nbsp; &nbsp; &nbsp; Development of the game “Swipe warrior”. GitHub link: <a class="githubLink" href="https://github.com/wingsmight/swiperidle">github.com/wingsmight/swiperidle</a></li>
                <li>Winter 2019 – summer 2019 &nbsp; &nbsp; &nbsp;Development of the app “Audio Bible”. GitHub link: <a class="githubLink" href="https://github.com/wingsmight/BibleLoopMain">github.com/wingsmight/BibleLoopMain</a></li>
                <li>Summer 2018 – winter 2018 &nbsp; &nbsp; &nbsp;Development of the game “Jog A cube”. GitHub link: <a class="githubLink" href="https://github.com/wingsmight/jogacube">github.com/wingsmight/jogacube</a></li>
            </section>
            <p6 class="aboutP6 textRes">Skills:</p6>
            <section class="skills textRes">
                <li>Expert in C#</li>
                <li>Proficient in Visual studio, Unity</li>
                <li>Proficient in Visual studio, Unity</li>
                <li>Fluency in Git (console) / GitHub </li>
                <li>Operate terminal on Linux/Windows/Mac</li>
                <li>Write design document</li>
                <li>Fluency in Adobe Photoshop, Adobe Illustrator </li>
                <li>Able to type 120 WPM</li>
                <li>Languages: Russian native, English B1+</li>
            </section>
            <p6 class="aboutP6 textRes">Hobbies:</p6>
            <section class="skills textRes">
                <li>Running, workout</li>
                <li>Gaming</li>
            </section>
        </div>
        
    </section>

    <section class="commenting">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">
                    Comment
                </h2>
        </div>
        <div class="col-lg-6">
            <div id="comment-field"></div>
        </div>
            <div class="col-lg-6">
                <form>
                        <div class="form-group">
                            <label for="comment-name">Name:</label>
                            <input type="email" class="form-control" id="comment-name"  placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="comment-body">Comment:</label>
                            <textarea type="password" class="form-control" id="comment-body" placeholder="Enter your comment"></textarea>
                        </div>
                        <div class="form-group form-check text-right">
                                <button type="submit" id="comment-add" class="btn btn-primary">add Comment</button>
                        </div>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="scipt/sciptForCommentIgor.js"></script>
        
    </section>

</body>
</html>
