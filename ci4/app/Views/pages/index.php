<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="tab.png" type="png/tab.png">
    <title>King of Curses</title>
    <link rel="icon" href="https://printler.com/media/photo/132923.jpg" type="png/tab.png">
</head>
<body>
    <div class="loading-screen" id="loadingScreen">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>
    <header>
        
        <h1><b>My Profile Page</b></h1>
    </header>
    
    <div class="content" id="content">
        
    </div>
  <main>
    <section>
            <img src="profilepic.jpg" alt="profile">
            <h2><b>Who am I?</b></h2>
            <ul id="whoAmI"></ul>
			<button onclick="showDateTime()" style="background-color: #8B0000; color: #FFFFFF; border: 2px solid #FFFFFF;">Time and Date Check</button>
            <div id="dateTime"></div>
        </section>
    <section>
            <h2>Question?</h2>
            <button id="infoButton" onclick="showMyInfo()">Question About Me?</button>
            <div id="questionPart" style="display: none;">
            <?php
                echo "Bachelor of Science in Information in Technology";
                echo "Scholarship: Yes, Government Scholarship";
                echo "Transferee / Second Course?: None";
                echo "Did you choose this course?: Yes, because I love about computer and want to learn more in coding.";
                echo "What do you want to learn for your Major?: To learn more about programming languages.";
                echo "Goals in life:To be a successful person.";
                echo "Dream to fulfill?: The only dream that I want to fulfill is just to be a successful person and to repay my parents hardwork";
                echo "Hobbies / Interests: My interest for now is that I love to collect and buy some shoes that are attracted by my eyes because of the design and color combination, going to the gym, playing video game, watching anime and playing basketball.";
?>
            </div>
        </section>
    <section>
            <img src="mypic.jpg" alt="Things I like">
            <button type="button" onclick="showSocialLinks()">Show My Social Links</button>
            <div id="socialLinks" style="display: none;">
                <p><b>Links to my social:</b></p>
                <ul>
                    <li><a href="https://www.facebook.com/manlapaz.marcoantonio" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/600px-Facebook_Logo_%282019%29.png" alt="Facebook"></a></i>
                    <li><a href="https://github.com/mmmanlapaz" target="_blank"><img src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png" alt="Github"></a></li>
					<li><a href="https://www.instagram.com/ocraaam_z/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png" alt="Instagram"><a></li>
                </ul>
            </div>
        </section>
  </main>
    
    <?php
    <script src="script.js"></script>
    ?>