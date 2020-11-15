<?php
    define("TITLE",'average of three numbers');
    define("DESCRIPTION",'program to calculate average of three numbers in python');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Program to calculate average of three numbers</h3>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-1" style="text-decoration:underline;">Program:</h6>
                    <h6 >num1,num2,num3=input("Enter the three numbers:").split()</h6>
                    <h6  >total=int(num1)+int(num2)+int(num3)</h6>
                    <h6  >avg=total/3</h6>
                    <h6  >print(f"Average is:{avg}")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter the three numbers:<span style="color:orange;">10 20 30</span></h6>
                    <h6  class="pl-5">Average is:20.0</h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="stringformatting.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="stringindexing.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="stringformatting.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="stringindexing.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>