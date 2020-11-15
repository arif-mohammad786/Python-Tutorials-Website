<?php
    define("TITLE",'python as calci');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary"> Python as calculator</h3>
            <h6 class="mt-4 ml-5">Python can be used as calculator.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                        <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                        <h6 class="pl-5">print(2+3*4)</h6>
                        <h6  class="pl-5">print(2/4)  <span class="pl-3"># Floating point division</span></h6>
                        <h6 class="pl-5">print(4//2)  <span class="pl-3"># integer division</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                        <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                        <h6  class="pl-5">14</h6>
                        <h6  class="pl-5">0.5</h6>
                        <h6  class="pl-5">2</h6>
                    </div>
                </div>

            <h6 class="mt-4 ml-5">To calculate exponent (power) of a number ** is used.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                        <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                        <h6 class="pl-5">print(2**3) <span class="pl-3"># to calculate 2</span><sup>3</sup></h6>
                        <h6 class="pl-5">print(16**0.5) <span class="pl-3"># to calculate 16</span><sup>1/2</sup></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                        <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                        <h6  class="pl-5">8</h6>
                        <h6  class="pl-5">4</h6>
                    </div>
                </div>

                <!--<div >
                    <form action="">
                        <a href="escapecharnormaltext.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                        <a href="variables.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->


        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="escapecharnormaltext.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="variables.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>

<?php
    include("footer.php");
?>