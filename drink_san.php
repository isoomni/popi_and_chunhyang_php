<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
                <meta name = "viewport" content= "width=device-width, initial-scale=1.0" />
                <title>eat</title>
<style>
div#box {
        position: absolute;
        width: 50%;
        height: 50%;
        /* width: 300px;
           height: 160px; */
        margin-left: 400px;
        margin-top: 70px;
}
div#box1 {
        width: 500px;
        height: 100px;
        margin-top: 50px;
}
divi#box2 {
        width: 500px;
        height: 100px;
        margin-top: 50px;
}
div.small_box {
        padding: 12px;
}

</style>
        </head>
        <body>
                <div id = "box">
                        <form>
                                음수량: <input type= "text" />
                                <input type= "button" value = "제출" />
                        </form>

                        <div id = "box1">
                                <div>입력한 음수량 보여주는 곳</div>
                                <div
                                        class="small_box"
                                        style="border:1px solid; float: left; width: 13%"
                                        >
                                        첫번째 영역
                                </div>
                                        <div
                                                class="small_box"
                                                style="border: 1px solid; float: left; width:13%"
                                                >
                                                두번쨰 영역
                                        </div>
                                                <div
                                                        class="small_box"
                                                        style="border: 1px solid; float: left; width: 13%"
                                                        >
                                                        세번째 영역
                                                </div>
                                                        <div
                                                                class="small_box"
                                                                style="border: 1px solid; float: left; width: 13%"
                                                        >
                                                        네번째 영역
                                                        </div>
                                                                <div
                                                                        class="small_box"
                                                                        style="border: 1px solid; float: left; width: 13%"
                                                                        >
                                                                        다섯번째 영역
                                                                </div>
                        </div>

                        <div>
                                평균
                        </div>
                        <div id = "#box2" style= "border: 1px solid; float:left; width: 65%">
                                평균 영역
                        </div>
                </div>
        </body>
</html>
