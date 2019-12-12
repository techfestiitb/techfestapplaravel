<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
        html{
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-81222017-1');
    </script>
    <style>
        .row{
            width: 100%;
            margin: 0px;
        }
    </style>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,700|Great+Vibes:400);
        @import url(//weloveiconfonts.com/api/?family=fontawesome);
        *, *:after, *:before {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        * {padding:0;margin:0;border: 0 none;}
        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
            z-index:2;
        }
        html {
            width: 100%;
            height: 100%;
            background: url(http://noob.hu/2011/09/24/Blured_Dream_by_Jul05.jpg) no-repeat fixed 50%;
            background-size: cover;
            font-family: open sans;
        }
        body {
            height: inherit;
        }
        h1 {
            color: rgba(0,0,0,.2);
            text-align: center;
            font-weight: 300;
            font-size: 3rem;
        }
        input {display: none;}
        nav2 {
            position: absolute;
            top:0;left:0;right:0;bottom:0;
            margin: auto;
            width:60vw;
            height: 40vw;
            min-width: 300px;
            max-width: 600px;
            box-shadow: 0 0 5px rgba(0,0,0,.5);
            overflow: hidden;
        }
        nav2 label {
            display: inline-block;
            width: calc(100% / 3);
            height: 50%;
            color: rgba(0,0,0,.4);
            font-size: 10vw;
            line-height: 20vw;
            text-align: center;
            cursor: pointer;
            opacity: .9;
        }
        nav2 label:hover {
            color: rgba(255,255,255,.8);
        }
        nav2 label:after {
            content: '';
            position: absolute;
            top:0;left:0;right:0;bottom:0;
            margin:auto;
            width:0;
            height:0;
            background: rgba(0,0,0,.2);
            transition: .5s;
            border-radius: 50%;
            z-index:1;
        }
        label:hover:after {
            width:100%;
            height:100%;
            border-radius: 0;
        }
        [for='profile'],
        .profile:before {background: #5D9CEC;}
        [for='settings'],
        .settings:before  {background: #0D757D;}
        [for='posts'],
        .posts:before {background: #2980B9;}
        [for='books'],
        .books:before  {background: #9B59B6;}
        [for='news'],
        .news:before  {background:#C0392B;}
        [for='features'],
        .features:before  {background: #F6BB42;}
        [for='cierre'] {
            position: fixed;
            top: 7%;
            right: 4%;
            color: rgba(255,255,255,.5);
            font-weight: 400;
            font-size: 4rem;
            line-height: 0;
            opacity:0;
            z-index: 100;
            cursor: pointer;
            transition: 1s;
            pointer-events: none;
        }
        input:not(#cierre):checked ~ [for='cierre'] {
            opacity:1;
            font-size: 2rem;
            transition-delay: 1s;
            pointer-events: auto;
        }
        article {
            position: absolute;
            display: table;
            top:0;
            left:-100%;
            height: 100%;
            width: 100%;
            padding: 5%;
            transition: .5s .2s;
            overflow: hidden;
        }
        article:before {
            content:'';
            position: fixed;
            top:0;left:0;bottom:0;right:0;
            width:0;
            height:100%;
            opacity: .9;
            transition: .7s .5s;
        }

        #profile:checked ~ .profile:before,
        #settings:checked ~ .settings:before,
        #posts:checked ~ .posts:before,
        #books:checked ~ .books:before,
        #news:checked ~ .news:before,
        #features:checked ~ .features:before {
            width:100%;
            height:100%;
            transition-delay: .1s;
        }
        #profile:checked ~ .profile,
        #settings:checked ~ .settings,
        #posts:checked ~ .posts,
        #books:checked ~ .books,
        #news:checked ~ .news,
        #features:checked ~ .features {
            left: 0;
            transition-delay: 0s;
        }
        section {
            display: table-cell;
            width: 50%;
            height: 100%;
            vertical-align: middle;
            padding: 5%;
            color: #fff;
            opacity: 0;
            pointer-events: none;
            transition: .5s;
            transform-origin: center center;
        }

        section:nth-child(odd) {
            background: rgba(255,255,255,.3);
            font-size: 2rem;
            transition-delay: .1s;
            transform: scale(0);
        }
        section:nth-child(even) {
            background: rgba(0,0,0,.3);
            font-size: 1.5rem;
            transition-delay: .3s;
            transform: scale(4);
        }

        #profile:checked ~ .profile section,
        #settings:checked ~ .settings section,
        #posts:checked ~ .posts section,
        #books:checked ~ .books section,
        #news:checked ~ .news section,
        #features:checked ~ .features section {
            opacity: 1;
            pointer-events: auto;
            transition-delay: .5s;
            transform: scale(1);
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 300;
            text-align: center;
            color: rgba(0,0,0,.7);
        }
        h2 img {
            width: 100px;
            height: auto;
            background: rgba(0,0,0,.4);
            border-radius: 50%;
            padding: 7px;
            display: block;
            margin: 0 auto;
        }
        h2 span, .news p {
            font-family: Great Vibes;
            font-weight: 400;
            display: block;
        }
        ol, ul {
            list-style-position: inside;
        }
        .news p {font-size: 2rem;}
        .news p:first-letter {
            position: absolute;
            margin-left: -6rem;
            color: rgba(0,0,0,.5);
            font-size: 10rem;
            line-height: 0;
        }
    </style>
</head>
<body>
@include('layouts.preloader')
@include('2019.header.header')
<div>
    <input type="radio" id="profile" name="tractor" />
    <input type="radio" id="settings" name="tractor" />
    <input type="radio" id="posts" name="tractor" />
    <input type="radio" id="profile" name="tractor" />
    <input type="radio" id="settings" name="tractor" />
    <input type="radio" id="posts" name="tractor" />
    <input type="radio" id="books" name="tractor" />
    <input type="radio" id="news" name="tractor" />
    <input type="radio" id="features" name="tractor" />
    <input type='radio' id='cierre' name='tractor' />
    <label for='cierre' class='fontawesome-remove-circle'></label>

    <nav2>
        <label for="profile" class='fontawesome-group'></label><!--
  --><label for="settings" class='fontawesome-cogs'></label><!--
  --><label for="settings" class='fontawesome-cogs'></label><!--
  --><label for="posts" class='fontawesome-edit'></label><!--
  --><label for="books" class='fontawesome-book'></label><!--
  --><label for="news" class='fontawesome-bullhorn'></label><!--
  --><label for="features" class='fontawesome-print'></label>
    </nav2>

    <article class='profile'>
        <section>
            <h2><img alt=''  src='https://lh3.googleusercontent.com/-wy4VbKjl-28/UXVqrCC_cCI/AAAAAAAAGi0/JZZvb9IaLCc/s550-no/K-bg-2.jpg' />KsesoCss
                <span>Spanish Css blog</span></h2>
        </section><!--
  --><section>
            <p>Ramajero Argonauta, Enredique amanuense de Css.<br/>
                Por una web con mucho estilo, para argonautas con estilo.</p>
        </section>
    </article>

    <article class='settings'>
        <section>
            <ol>
                <li>Usuario</li>
                <li>Contraseña</li>
                <li>Correo</li>
                <li>Fondo</li>
            </ol>
        </section><!--
  --><section>
            <p>Ramajero Argonauta, Enredique amanuense de Css.<br/>
                Por una web con mucho estilo, para argonautas con estilo.</p>
        </section>
    </article>

    <article class='posts'>
        <section>
            <ul>
                <li>Ítem 1</li>
                <li>Ítem 2</li>
                <li>Ítem 3</li>
                <li>Ítem 4</li>
                <li>Ítem 5</li>
                <li>Ítem 6</li>
            </ul>
        </section><!--
  --><section>
            <p>Ramajero Argonauta, Enredique amanuense de Css.<br/>
                Por una web con mucho estilo, para argonautas con estilo.</p>
        </section>
    </article>

    <article class='books'>
        <section>
            <h2>:hover guillotinado. Jugando con falsas diagonales</h2>
        </section><!--
  --><section>
            <p>De esto que llegas a una galería fotográfica y piensas que tienes que compartirla, que algunas imágenes merecen la pena su disfrute. Pero claro, hacerlo en un tuit, vía g+ o cualquier otra red lo hace cualquiera y eso no garantiza que nadie pinche el enlace.</p>
        </section>
    </article>

    <article class='news'>
        <section>
            <h2><img alt=''  src='https://2.bp.blogspot.com/-4GLiRoa0iTY/UsmMjO0fNrI/AAAAAAAAIYQ/Np04LMYH7aY/s1600/cayena.jpg' />KsesoCss
                <span>Diamantes Css</span></h2>
        </section><!--
  --><section>
            <p>Venga, va. Yo también dejo en esta noche de reyes regalos para los niños y niñas (y no tanto) del blog. Y ya que me pongo lo hago a lo grande. </p>
        </section>
    </article>

    <article class='features'>
        <section>
            <h3>Se finí</h3>
            <h4>Más demos</h4>
            <h5>Igual de chulas o</h5>
            <h6>Más o menos o igual</h6>
        </section><!--
  --><section>
            <h2><img alt=''  src='https://lh3.googleusercontent.com/-1gooLebfPlo/Udxs2JrqGQI/AAAAAAAAHKU/Usc73WgaBpY/s150-no/comment-annon.jpg' />KsesoCss
                <span>Spanish Css blog</span></h2>
        </section>
    </article>

</div>

</body>
</html>
