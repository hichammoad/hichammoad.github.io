<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hicham Moad's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

/* Global Layout Set-up */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    text-align: center;
    font-family: 'Lucida Console', sans-serif;
    color: #222;
    background: #f7f5f0;
}

/* Link Styles */

a {
    text-decoration: none;
    color: #999;
}

a:hover {
    color: #6633ff;
}

/* Section Styles */

.main-nav {
    width: 100%;
    background: #205081;
    min-height: 30px;
    padding: 10px;
    position: fixed;
    text-align: center;
}

.nav {
    display: inline-flex;
    justify-content: space-around;
    font-weight: 700;
    list-style-type: none;
    margin: 0 auto;
    padding: 0;
}

.nav .name {
    color: #ff9904;
}

.nav li {
    padding: 5px 10px 10px 10px;
    display: inline-block;
}

.nav a {
    transition: all .5s;
}

.nav a:hover {
    color: white
}

.nav .selected {
    color: white;
}

header {
    text-align: center;
    background: url('images/marrakech_menara.jpg') no-repeat top center;
    background-size: cover;
    overflow: hidden;
    padding-top: 60px;
}

header {
    line-height: 1.5;
}

header .profile-image {
    margin-top: 50px;
    width: 150px;
    height: 150px;
    border-radius: 60%;
    border: 3px solid #54c1e2;
    transition: all .5s;
}

header .profile-image:hover {
    transform: scale(1.5) rotate(-7deg);
    border-radius: 20%;
}

.header-little {
    min-height: 200px;
}

.tag {
    background-color: #d9edf7;
    color: #000;
    padding: 10px;
    border-radius: 5px;
    display: table;
    margin: 10px auto;

}

.welcome-msg {
    background-color: #222;
    color: #fff;
}

.card, .card-long {
    margin: 0px auto;
    padding: 20px 40px 40px;
    text-align: left;
    background: #fff;
    border-bottom: 4px solid #ccc;
    border-radius: 6px;
    transition: all .5s;
}

.card {
    max-width: 500px;
}

.card:hover, .card-long:hover {
    border-color: #ff9904;
}

.card-long {
    margin: 0 50px;
}

footer {
    width: 100%;
    min-height: 30px;
    padding: 20px 0 40px 20px;
}

footer .copyright {
    top: -8px;
    font-size: .75em;
}

footer ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

footer ul li {
    display: inline-block;
}

a.social {
    background-size: 30px 30px;
    opacity: .4;
}

a.social:hover {
    opacity: 1;
}

.clearfix {
    clear: both;
}

footer p {
    margin-top: 10px;
}

/* Styles for larger screens */
@media screen and (min-width: 720px) {

    .flex {
        display: -ms-flexbox; /* TWEENER - IE 10 */
        display: flex;
        /* flexbox for working in Safari*/
        display: -webkit-flex;
        max-width: 1200px;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        margin: 0 auto;

    }

    .wrap {
        margin: 20px auto;
        max-width: 1200px;
    }

    header {
        min-height: 470px;
    }

    .nav {
        max-width: 1200px;
        padding: 0 30px;
    }

    main {
        padding-top: 20px;
    }

    main p {
        line-height: 1.6em;
    }

    footer {
        font-size: 1.3em;
        max-width: 1200px;
        margin: 40px auto;
    }

}



</style>
</head>
<body>
<!--
    I don't know what you're looking for...!
    here is my email if you need something :
    hmsafhi@gmail.com
-->
<div class="main-nav">
    <ul class="nav">
        <li><a href="." class="selected">Home</a></li>
    </ul>
</div>

<header>
    <img src="images/hichammoad.png" id="my_img" alt="My picture" class="profile-image">
    <h1 class="tag name ">Hey! I'm Hicham Moad</h1>
    <p class="tag welcome-msg">Welcome to my personal website<br>
        I hope you find what you came for & more ^^) </p>
</header>


<div class="wrap">
    <div class="card-long" style="line-height: 150%; ">
        <h2>About me</h2>
        <p>
            Hi ! my name is <b>Hicham Moad Safhi</b>. I was born in Marrkech, a wonderful city in
            Morocco.
            & I live in Fez.
            <br/>
            I am studying computer sciences.
        </p>
        <p> Please feel free to contact me if you have any feedback.</p>
    </div>
</div>


<footer>
    <p class="copyright">Safhi Hicham Moad</p>
    <ul class="soc" style="padding: 1%">
        <li><a target="_blank" class="social soc-twitter" href="https://twitter.com/hichammoad"></a></li>
        <li><a target="_blank" class="social soc-facebook" href="https://www.facebook.com/hichammoadsafhi"></a></li>
        <li><a target="_blank" class="social soc-google" href="https://plus.google.com/+HichamMoadSAFHI"></a></li>
        <li><a target="_blank" class="social soc-linkedin" href="https://fr.linkedin.com/in/hichammoadsafhi"></a></li>
        <li><a target="_blank" class="social soc-youtube"
               href="https://www.youtube.com/channel/UCSRQ2nW1Cu1ZFrvqPqiqqXw/featured"></a></li>
        <li><a target="_blank" class="social soc-email1" href="mailto:h.m.safhi@gmail.com"></a></li>
        <li><a target="_blank" class="social soc-github soc-icon-last" href="https://github.com/hichammoad"></a></li>
    </ul>


</footer>
</body>
</html>
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <link rel="stylesheet" href="css/social-icons.css">
