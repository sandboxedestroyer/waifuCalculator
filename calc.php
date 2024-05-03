<!DOCTYPE html>
<html lang="en">
<head>

    <!-- 
        https://fastupload.io/KXvTQcSQEMNCid0/preview
        https://fastupload.io/KXvTQcSQEMNCid0/file
     -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/calc.js"></script>
    <link rel="stylesheet" href=".//assets/css/style.css">
    <title>CALC</title>
</head>
<body>

    <br>

    <div class="container">

        <div class="row">

            <!-- WAIFU 0 -->
            <div class="col-sm-4" style="padding-left: 11%;">
                <div class="container waifu" id="waifubtn0">

                    <img src=".//assets/img/girl.gif" alt="waifu" srcset="">
            
                </div>
            </div>

            <!-- WAIFU CALCULATOR -->
            <div class="col-sm-4">
                <div class="container calcContainer" >

                    <div class="container">
                        <h5 class="text-center calcTitle" >Waifu Calculator</h5>
                    </div>
            
                    <div class="d-block ">
            
                        <div class="result d-block bg-dark border calcScreen ">
                            <input type="text" value="0" readonly>
                        </div>
            
                        <div class="bg-dark">
            
                            <div class="d-flex">
            
                                <!-- LEFT SIDE -->
                                <div class="border calcNumbers">
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="container">
            
                                                <div class="row">
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert('/')" id="div" ><p>/</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert('*')" id="multi"><p>*</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert('-')" id="rest"><p>-</p></div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
            
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(7)" id="seven"><p>7</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(8)" id="eight"><p>8</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(9)" id="nine"><p>9</p></div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(4)" id="four"><p>4</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(5)" id="five"><p>5</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(6)" id="six"><p>6</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(1)" id="one"><p>1</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(2)" id="two"><p>2</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" onclick="insert(3)" id="three"><p>3</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8 d-flex justify-content-center align-items-center box zero" onclick="insert(0)" id="zero"><p class="zeroP">0</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box btnClear" id="btnClear"><p class="" >[C]</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                
                                </div>
                
                                <!-- RIGHT SIDE -->
                                <div class="border calcButtons">
                                    <div class="row">
                                        <div class="col-sm-12">
            
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" style="height: 60px;" onclick="insert('.')" id="point"><p style="margin-bottom: 10%;">°</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" style="height: 120px;" onclick="insert('+')" id="sum"><p>+</p></div>
                                                    <div class="col-sm-4 d-flex justify-content-center align-items-center box" style="height: 120px;" onclick="op()" id="result"><p>=</p></div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
            
                            </div>
            
                        </div>
            
                    </div>

                    <div class="d-block justify-content-center footerCalc">
                        <div class=" footerTitle">
                            <p class="" style="color: #fff;">dev with <img src=".//assets/img/fun.png" height="20" width="20" alt="pentest4fun"> <a class="linkFooter" href="https://pentest4.fun" target="_blank">by Pentest4.<img src=".//assets/img/fun.png" height="20" width="20" alt="pentest4fun"></a></p>
                        </div>
                        <div class="d-block justify-content-center footerCalcRights">
                            <div class="footerCalcRightsI">
                                <p class="text-center footerCalcRightsIi" style="font-size: 8px; color: #fff;">All right are not reserved</p>
                            </div>
                            <div class="footerCalcDragon justify-content-center">
                                <img src=".//assets/img/dragonFooter0.png" width="100" height="30" id="testme" alt="footerDragon">
                            </div>
                        </div>
                    </div>
            
                </div>

            </div>

            <!-- WAIFU 1 -->
            <div class="col-sm-4">
                <div class="container waifu" id="waifubtn1">

                    <img src=".//assets/img/girl.gif" alt="waifu" srcset="">
            
                </div>
            </div>

        </div>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>