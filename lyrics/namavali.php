<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
    }

    div {
        display: block;
        unicode-bidi: isolate;
    }

    body {
        color: #581e00;
        background: #d57e2f;
    }

    .dptitlecon {
        margin-left: auto;
        margin-right: auto;
        font-size: 1.6rem;
        margin: 6px auto;
        line-height: 1.3;
        font-weight: 600;
        padding: 6px 6px 0;
    }

    .separatorline {
        height: 1px;
        margin-bottom: 15px;
        background: linear-gradient(to right, #eaac5b, #781e00, #eaac5b);
    }

    .main {
        padding-top: 15px;
        padding-bottom: 15px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .block {
        color: #781e00;
        background: #efb86f;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
        width: 170px;
        border-radius: 5px;
        text-align: center;
        margin: 3px;
        line-height: 1.3;
    }

    .singleblock {
        cursor: pointer;
        transition: transform .2s ease-in-out;
    }

    a {
        text-decoration: none;
        color: #581e00;
    }

    .blockimg {
        margin: 0 auto;
        padding: 20px 30px;
        border-radius: 4px 4px 0 0;
    }

    .dpcontainer {
        height: 0;
        overflow: hidden;
        position: relative;
    }

    .dpratio {
        padding-bottom: 100%;
    }

    .dpcontainerimg {
        border-radius: 4px 4px 0 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .blocktitle {
        border-top: 1px solid rgba(0, 0, 0, .1);
        font-weight: 500;
        padding: 10px 6px;
        position: relative;
        font-size: 1rem;
    }
</style>

<body>

    <h1 class="dptitlecon" style="text-align:center;">Namavali</h1>

    <div class="separatorline"></div>

    <div class="main">

        <div class="block singleblock">
            <a href="108names.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\108names.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">108 Names</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="32names.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\32names.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">32 Names</div>
            </a>
        </div>
</body>

</html>