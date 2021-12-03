<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .slider {
            margin-left: 3em;
            width: 300px;
            height: 200px;
        }

        .wrapper {
            overflow: hidden;
            position: relative;
            background: #222;
            z-index: 1;
        }

        #items {
            width: 10000px;
            position: relative;
            top: 0;
            left: -300px;
        }

        #items.shifting {
            transition: left .2s ease-out;
        }

        .slide {
            width: 300px;
            height: 200px;
            cursor: pointer;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: all 1s;
            position: relative;
            background: #FFCF47;
        }

    </style>
</head>

<body>
    <div id="slider" class="slider">
        <div class="wrapper">
            <div id="items" class="items">
                <span class="slide">Slide 1</span>
                <span class="slide">Slide 2</span>
                <span class="slide">Slide 3</span>
                <span class="slide">Slide 4</span>
                <span class="slide">Slide 5</span>
                ...
            </div>
        </div>
        <a id="prev" class="control prev"></a>
        <a id="next" class="control next"></a>
    </div>
</body>

</html>
