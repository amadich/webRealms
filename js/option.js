function changetext_color() {
    let mycolor = document.getElementById("changecolor");


    let mytext = document.getElementById("setext");

    document.getElementById("setext").style.color = mycolor.value;
}

function zoomin() {
    nb = 20;
    document.getElementById("setext").style.fontSize = nb+"px";
}

function zoomout() {
    nb = 15;
    document.getElementById("setext").style.fontSize = nb+"px";   
}