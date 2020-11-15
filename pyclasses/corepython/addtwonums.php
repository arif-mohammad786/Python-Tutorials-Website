<?php
    define("TITLE",'Add two numbers');
    define("DESCRIPTION",'python program to add two numbers');
    define("KEYWORD",'Add two numbers in python');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Program to add Two Numbers</h3>

            
            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Program:</h6>
                    <h6 class="pl-5">num1=int(input("Enter first number:"))</h6>
                    <h6 class="pl-5">num2=int(input("Enter second number:"))</h6>
                    <h6  class="pl-5">total=num1+num2</h6>
                    <h6  class="pl-5">print("sum ="+str(total))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter first number:<span style="color:orange;">50</span></h6>
                    <h6  class="pl-5">Enter second number:<span style="color:orange;">30</span></h6>
                    <h6  class="pl-5">sum =80</h6>
                    </div>
                </div>



            <!--<div>
                <form action="">
                <a href="inputfromuser.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="multipleinput.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="inputfromuser.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="multipleinput.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>