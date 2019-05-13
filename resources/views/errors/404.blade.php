<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Không tìm thấy trang này</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
    <style>
        /* 404 Error Page */
    #oopss {
        background: linear-gradient(-45deg, rgba(255, 243, 0, 1), rgba(239, 228, 0, 1));
        position: fixed;
        left: 0px;
        top: 0;
        width: 100%;
        height: 100%;
        line-height: 1.5em;
        z-index: 9999;
    }
    #oopss #error-text {
        font-size: 35px;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #000;
        font-family: 'Ubuntu', sans-serif;
    }
    #oopss #error-text img {
        margin: 0px auto 20px;
        height: 342px;
    }
    #oopss #error-text span {
        position: relative;
        font-size: 1.5em;
        font-weight: 900;
        margin-bottom: 50px;
    }
    #oopss #error-text .back {
        background: #fff;
        color: #000;
        font-size: 30px;
        text-decoration: none;
        margin: 2em auto 0;
        padding: 0.7em 2em;
        border-radius: 500px;
        box-shadow: 0 20px 70px 4px rgba(0, 0, 0, 0.1), inset 7px 33px 0 0px #fff300;
        font-weight: 900;
        transition: all 300ms ease;
    }
    #oopss #error-text .back:hover {
        transform: translateY(-13px);
        box-shadow: 0 35px 90px 4px rgba(0, 0, 0, .3), inset 0px 0 0 3px #000;
    }
    </style>
</head>
<body>
        <div id='oopss'>
                <div id='error-text'>
                    <img src="https://cdn.rawgit.com/ahmedhosna95/upload/1731955f/sad404.svg" alt="404">
                <span> Sorry, something wrong !!!</span>
                    <a href='/' class="back">Back to Home</a>
                </div>
        </div>
</body>
</html>