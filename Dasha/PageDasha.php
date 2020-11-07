<?php
   
    $dsn = "mysql:host=localhost;port=3307;dbname=myforum;charset=utf8";
    $db_table = "comments";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $connect = new PDO($dsn, 'root', 'root', $options);
    if (isset($_POST['username']))
    {
        //Если нет ошибок
        if (true)
        {
            $_SESSION['flash'] = 'Запись добавлена';
            //return page
            $username = $_POST ['username'];
            $comment = $_POST ['comment'];
            $data = date('d-m-Y H:i:s');
            $query = $connect->query("INSERT INTO".comments."(username,commment,data) VALUES('$username','$comment','$data')");
            header("Location: ".$_SERVER['REQUEST_URI']);
        }

    }
    else{
        if(!empty($_SESSION['flash']))
        {
            print $_SESSION['flash'];
            unset ($_SESSION['flash']);
        }
    }

?>

<head class="header">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <img class="image" src="img/Dasha1.jpg" width="550" height="50" />
   
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body class="page">
    <header>
    <h2 class="sectionHead">Hello, I'm Dasha!</h2>
    <h3 class="sectionHead HeadTwo">And this is my web site.</h3>
    
</header>

<section class="about container">
    <div class="about-content">
        
        <br><p5 class="aboutP5">Curriculum vitae</p5></br>
        <p6 class="aboutP6 textRes">Personal Details</p6>
            <section class="skills textRes">
                <li>Darya Voronkina</li>
                <li>Date of birth: 14/10/2000 </li>
                <li>Phone: 89658219617</li>
                <li>E-mail: voronik1801@yandex.ru </li>
             </section>
        <p6 class="aboutP6 textRes">Objectives:</p6>
             <section class="skills textRes">
                <li>To contribute professional skills to achieving your company's goals.</li>
            </section>
    </div>
    </section>
    <section class="about container">
        <div class="about-content">
        <p6 class="aboutP6 textRes"> Information about education:</p6>
        <section class="skills textRes aboutP6Res">
            <li>Incomplete higher education in the specialty "mathematical support and administration of information systems" at the faculty of applied mathematics and computer science of Novosibirsk State Technical University (year of graduation – 2022, full - Time education)
                </li>
            <li>Incomplete higher education in the specialty "Computer technologies of modeling and data analysis" at the faculty of applied mathematics and computer science of Novosibirsk State Technical University (year of graduation – 2024, form of study - full-time)
                </li>
        </section>
        <p6 class="aboutP6 textRes">Skills:</p6>
        <section class="skills textRes">
            <li>IT: C++, C#, html, css, Windows, Linux </li>
            <li>Languages: Russian, English</li>
            <li>Additional: hard work, fast learning, punctuality</li>
        </section>
        </div>
        
    </section>
    <section class = "line">
        <h1>Let your comment:</h1>
    </section>
    <section class="commenting">
        <style>
              * {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                }
                input, textarea
                {
                    width: 1000px;
                    margin: auto;
                    font-size: 15px;
                }
                label{
                    font-size: 25px;
                }
                form {
                    display: flex;
                    flex-direction: column;
                }
        </style>
        <form action="" method="POST">
                
            <label>Name:</label>
            <input type="text"  name="username" required placeholder="Enter your name">
        
            <label>Comment:</label>
            <textarea type="text" cols= "15" rows="10" name="comment" required placeholder="Enter your comment"></textarea>
            <input type = "submit" name = "but" id="button">
        </form>
<section class = "Comment">

    <form class = "Comment">
        <label>Комментарии:</label>
        <?
                $comments = $connect->query("SELECT * FROM intocomments ORDER BY data DESC");
                $comments = $comments->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($comments as $comment) {
                    ?>
                <p><?="{$comment['data']} {$comment['username']} оставил(а) комментарий: {$comment['commment']}"?></p>
                <? } ?>
            </form>
</section>
</section>
</body>