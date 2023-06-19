<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Larablogs</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            border: none;
            outline: none;
            box-sizing: border-box;
            text-decoration: none;
            list-style-type: none;
            transition: 0.2s ease;
        }
        .welcome-content{
            background: url("https://wallpaperboat.com/wp-content/uploads/2019/10/free-website-background-01.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            filter: grayscale(0.4);
            color: black;
        }
        nav{
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: 1.4em 1.25em;
            padding-right: 1.8em;
            align-items: center;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.12);
            background-color: white;
        }
        nav header{
            font-size: 1.8em;
            color: darkblue;
            font-weight: bold;
            text-transform: uppercase;
            -webkit-text-stroke: 0.015em white;
            letter-spacing: 2px;
            margin-right: auto;
        }
        nav header i{
            padding-right: 8px;
        }
        .navbar{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 28%;
        }
        .navbar li{
            font-size: 1.58em;
            color: darkblue;
            -webkit-text-stroke: 0.006em white;
            letter-spacing: 1.05px;
            font-weight: bolder;
            padding: 10px 16px;
        }
        .navbar li.active{
            border: 2.3px solid darkblue;
            border-radius: 6px;
        }
        .navbar li:hover{
            cursor: pointer;
        }
        .welcome-content .welcome-wrapper{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        .welcome-content .welcome-wrapper .heading{
            font-weight: bolder;
            color: darkblue;
            -webkit-text-stroke: 0.028em white;
            font-size: 3vw;
            white-space: nowrap;
            letter-spacing: 1.8px;
        }
        .welcome-content .welcome-wrapper .blog-intro{
            padding: 1.25em;
            margin: 0.5em 0;
            line-height: 2;
            letter-spacing: 1.15px;
            text-align: center;
            font-size: 1.12vw;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 12px;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.05);
        }
        .welcome-content .welcome-wrapper button{
            padding: 16px 0;
            font-size:1.5vw;
            width: 90%;
            margin: 1.6em;
            margin-top: 0.55em;
            background-color: darkblue;
            color: white;
            letter-spacing: 1.5px;
            border-radius: 12px;
        }
        .welcome-content .welcome-wrapper button i{
            margin-left: 12px;
        }
        .welcome-content .welcome-wrapper button:hover{
            cursor: pointer;
            transform: translate(0,-4.5px);
        }

        /* All Blogs */
        .all-blogs,.single-blog{
            background: url('https://wallpaperboat.com/wp-content/uploads/2019/10/free-website-background-01.jpg');
            background-repeat: no-repeat;
            background-position:center;
            background-size: cover;
            background-attachment: fixed;
            height: 100%;
            min-height: 100vh;
            filter: grayscale(0.5);
        }
        .blogs-wrapper{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            max-width: 1200px;
            column-gap: 1.75em;
            row-gap: 2em;
            margin: 2.5em auto;
            padding: 1.5em 1em;
            margin-bottom: 0;
            padding-bottom: 2.5em;
        }
        .blog-item{
            border-radius: 4%;
            box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.12);
            background-color: white;
        }
        .blog-item:hover{
            transform: translate(0,-8px);
        }
        .blog-item img{
            width: 100%;
            height: 260px;
            object-fit: fill;
            border-top-left-radius: 4%;
            border-top-right-radius: 4%;
        }
        .blog-item-content{
            padding: 0.75em 1em;
            line-height: 1.5;
            display: flex;
            flex-direction: column;
            min-height:170px;
            justify-content: space-between;
        }
        .blog-item-content h4{
            font-size: 1.3em;
            margin: 0.5em 0;
            margin-top: 0;
            color: darkblue;
        }
        .blog-item-content .item-flex{
            margin-top: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 0 0.2em;
        }
        .blog-item-content .item-author{
            font-size: 1.15em;
            margin: 0.2em 0;
        }
        .blog-item-content .item-author i{
            margin-right: 8px;
            font-size: 0.9em;
        }
        .blog-item-content .item-date i{
            margin-right: 8px;
            font-size: 1em;
        }

        /* Single Blog */
        .single-blog{
            padding-bottom: 1.5em;
        }
        .single-blog .blog-wrapper{
            max-width: 1200px;
            margin: 2em auto;
            padding: 1em;
            padding-bottom: 0;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
        }
        .single-blog .blog-wrapper .blog{
            padding: 1.5em;
            line-height: 2;
        }
        .blog h2{
            text-align: center;
            color: darkblue;
            letter-spacing: 1.25px;
            font-size: 1.85em;
        }
        .blog-other-info{
            margin: 0.7em 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            font-size: 1.15em;
        }
        .blog-other-info p i{
            margin-right: 8px;
        }
        .blog-description{
            font-size: 1.12em;
            text-align: justify;
            margin-top: 1.5em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>