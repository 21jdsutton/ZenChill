<!DOCTYPE html>
<html lang="en">
<head>
    <title>ZenChill | Home</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: rgb(24, 0, 0);
            font-family: "Comic Relief", sans-serif;
        }

        .slideshow {
            position: relative;
            margin-left: 200px;
            width: calc(100vw - 200px);
            height: 450px;
            max-width: 1920px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
            border-bottom: 4px solid rgba(53, 0, 0, 0.81);
            z-index: 0;
        }

        .slideshow img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: fill;
            opacity: 0;
            animation: fade 49s infinite;
        }

        .slideshow img:nth-child(1) { animation-delay: 0s; }
        .slideshow img:nth-child(2) { animation-delay: 7s; }
        .slideshow img:nth-child(3) { animation-delay: 14s; }
        .slideshow img:nth-child(4) { animation-delay: 21s; }
        .slideshow img:nth-child(5) { animation-delay: 28s; }
        .slideshow img:nth-child(6) { animation-delay: 35s; }
        .slideshow img:nth-child(7) { animation-delay: 42s; }

        @keyframes fade {
            0%   { opacity: 0; }
            8%   { opacity: 1; }  
            20%  { opacity: 1; }
            28%  { opacity: 0; }
            100% { opacity: 0; }
        }

        .movie-slider,
        .show-slider {
            position: relative;
            width: 65%;
            margin-left: 250px;
            margin-top: 60px;
            overflow: hidden;
        }

        .movie-slider h1,
        .show-slider h1 {
            color: rgb(255, 227, 227);
            text-decoration: underline;
        }

        .slider {
            display: flex;
            transition: transform 0.4s ease;
        }

        .slider img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 5px;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 40px;
            color: white;
            background: rgba(0, 0, 0, 0.4);
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 2;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        .comic-relief-regular {
            font-family: "Comic Relief", system-ui;
            font-weight: 400;
            font-style: normal;
            }

            .comic-relief-bold {
            font-family: "Comic Relief", system-ui;
            font-weight: 700;
            font-style: normal;
            }

    </style>
</head>
<body>

    <!-- Movie Slideshow Images -->
    <div class="slideshow">
        <img src="images/banners/handmaids_tale.jpg" alt="Handmaids Tale">
        <img src="images/banners/ghosts.jpg" alt="Ghosts">
        <img src="images/banners/Yellowstone.jpg" alt="Yellowstone">
        <img src="images/banners/This_Is_Us.jpg" alt="This Is Us">
        <img src="images/banners/Schitts_Creek.jpg" alt="Schitts Creek">
        <img src="images/banners/Criminal_Minds.jpg" alt="Criminal Minds">
        <img src="images/banners/The_Gorge.jpg" alt="The Gorge">
    </div>

    <!-- Featured Movies -->
    <div class="movie-slider">
        <h1>FEATURED MOVIES:</h1>
        <button class="arrow left" onclick="slide('movie', -1)">&#10094;</button>
        <div class="slider" id="movie-slider">
            <a href="https://www.youtube.com/watch?v=7Dlo-VB0-HI"><img src="images/thumbnails/iRobot.jpg"></a>
            <a href="https://www.youtube.com/watch?v=wJO_vIDZn-I"><img src="images/thumbnails/MinecraftMovie.jpg"></a>
            <a href="https://www.youtube.com/watch?v=LNlrGhBpYjc"><img src="images/thumbnails/TheSubstance.jpg"></a>
            <a href="https://www.youtube.com/watch?v=rUSdnuOLebE"><img src="images/thumbnails/The_Gorge.jpg"></a>
            <a href="https://www.youtube.com/watch?v=t3PzUo4P21c"><img src="images/thumbnails/SawX.jpg"></a>
            <a href="https://www.youtube.com/watch?v=sFNPNT_4Qww"><img src="images/thumbnails/I_Am_Legend.jpg"></a>
            <a href="https://www.youtube.com/watch?v=BC4cyYRxjFk"><img src="images/thumbnails/The_Prodigy.jpg"></a>
            <a href="https://www.youtube.com/watch?v=K0SKf0K3bxg"><img src="images/thumbnails/Juno.jpg"></a>
            <a href="https://www.youtube.com/watch?v=q0a72wkqlqU"><img src="images/thumbnails/Hurricane_Bianca.jpg"></a>
            <img src="images/PLACEHOLDER.jpg"></a>
        </div>
        <button class="arrow right" onclick="slide('movie', 1)">&#10095;</button>
    </div>

    <!-- Featured Shows -->
    <div class="show-slider">
        <h1>FEATURED SHOWS:</h1>
        <button class="arrow left" onclick="slide('show', -1)">&#10094;</button>
        <div class="slider" id="show-slider">
            <a href="https://www.youtube.com/watch?v=81PyH5TH-NQ"><img src="images/thumbnails/handmaids_tale.jpg" alt="Handmaids Tale"></a>
            <a href="https://www.youtube.com/watch?v=q1pcpgREQ5c"><img src="images/thumbnails/Greys_Anatomy.jpg"></a>
            <a href="https://www.youtube.com/watch?v=8BPlx6eK1vc"><img src="images/thumbnails/The_Rookie.jpg"></a>
            <a href="https://www.youtube.com/watch?v=OkTEQwsE8l4"><img src="images/thumbnails/This_Is_Us.jpg"></a>
            <a href="https://www.youtube.com/watch?v=R1C8ygebkng"><img src="images/thumbnails/Revenge.jpg"></a>
            <a href="https://www.youtube.com/watch?v=NTYxiJBbEZk"><img src="images/thumbnails/Criminal_Minds.jpg"></a>
            <a href="https://www.youtube.com/watch?v=jMlJ7FTk35c"><img src="images/thumbnails/Riverdale.jpg"></a>
            <a href="https://www.youtube.com/watch?v=Es3B24z8fdA"><img src="images/thumbnails/Hannibal.jpg"></a>
            <img src="images/PLACEHOLDER.jpg">
        </div>
        <button class="arrow right" onclick="slide('show', 1)">&#10095;</button>
        &nbsp;
    </div>

    <script>
        const sliders = {
            movie: {
                element: document.getElementById("movie-slider"),
                position: 0
            },
            show: {
                element: document.getElementById("show-slider"),
                position: 0
            }
        };

        const slideAmount = 210;

        function slide(type, direction) {
            const slider = sliders[type];
            slider.position -= direction * slideAmount;
            const maxOffset = -((slider.element.children.length - 4) * slideAmount);
            slider.position = Math.max(Math.min(slider.position, 0), maxOffset);
            slider.element.style.transform = `translateX(${slider.position}px)`;
        }
    </script>

    <?php 
        include('navigation.html'); 
    ?>
</body>
</html>
