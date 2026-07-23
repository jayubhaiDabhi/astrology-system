<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangoli Collection</title>
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
        margin-left: 300px;
        margin-right: 300px;
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

    
    .block:hover {
        border: 3px solid #781e00;
        /* transform: scale(1.1); */
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
        font-size: 1.2rem;
    }
</style>

<body>
    <h2 class="dptitlecon" style="text-align:center;">Art Gallery</h2>

    <div class="separatorline"></div>

    <div class="main">
        <div class="block singleblock">
            <a href="rangolis.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\rangoli.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Rangoli Collection</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="greeting.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\greeting.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Greeting Card</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="mehandi.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\mehandi.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Mehandi Collection</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hindufest.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\hindu.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Hindu Festival</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="indian.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\indian.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Indian Festival</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="krishna.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\krishna.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">krishna Miniature</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="balhanuman.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\hanuman.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Bal Hanuman</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="balganesha.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\ganesha.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Bal Ganesha</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="symbols.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\symbols.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Hindu Symbols</div>
            </a>
        </div>

    </div>
</body>

</html>