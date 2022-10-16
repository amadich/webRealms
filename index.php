<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header>
        <ul>
            <li class="title_header"><h2>WEB</h2></li>
            <li id="search"><input type="text" placeholder="Search" class="searchinput"></li>

            <li class="phtoprofile"></li>
        </ul>
    </header>
    <!-- Fin Header -->
    <!-- Side Bar -->
    <nav>
        <div class="profileui">
            <li class="photoprofile">
                <div class="online"></div>
            </li>
            <div class="ui_name">
                <h5>Jeridi Mohamed</h5> <span id="sep"></span>
                <h6>ID : @12345678</h6>
            </div>
            <hr>

            <div class="libery">
                <p class="title_lib">Libery Online</p>
                <ul class="option">
                    <li>Show News 🔔</li>
                    <li> <span onclick="zoomin()">Zoom In 🔎</span>  | <span onclick="zoomout()">Zoom Out 🔍</span></li>
                    <li><span>Change Text Color : </span><input type="color" id="changecolor" onchange="changetext_color()"></li>
                </ul>
            </div>

        </div>
        <aside>
            <p id="setext" style="color: snow; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin: 1em;">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed laudantium est cum fuga officia eum, iusto iste recusandae veniam repellat similique, perspiciatis culpa labore velit nihil, quam dolorem et a. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque voluptates accusantium similique tenetur rem mollitia, voluptas magnam vero itaque nesciunt modi excepturi pariatur praesentium non quam adipisci ratione sunt? Beatae!
            </p>
        </aside>
    </nav>
    <!-- Fin Side Bar -->
    <script src="js/option.js"></script>
</body>
</html>