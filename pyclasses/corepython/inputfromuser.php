<?php
    define("TITLE",'input from user');
    define("DESCRIPTION",'taking input from user');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Input From user</h3>
            <h6 class="mt-4 ml-5"><span class="text-primary">input()</span> function is used to take input from user.</h6>
            <h6 class="mt-4 ml-5" style="text-decoration:underline;">Syntax:</h6>
            <h6 class="mt-4 ml-5">variable=input("message to be printed on screen")</h6>
            
            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name=input("Enter your name:")</h6>
                    <h6  class="pl-5">print("Hello" + " " + name)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter your name:<span style="color:orange;">ajay<span class="ml-4 text-success">#  ajay is input from user</span></span></h6>
                    <h6  class="pl-5">Hello ajay</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">num1=input("Enter first number:")</h6>
                    <h6 class="pl-5">num2=input("Enter second number:")</h6>
                    <h6  class="pl-5">print(num1 + num2)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter first number:<span style="color:orange;">10</span></h6>
                    <h6  class="pl-5">Enter second number:<span style="color:orange;">20</span></h6>
                    <h6  class="pl-5">1020</h6>
                    <h6 class="mt-4 ml-5" style="color:black;text-decoration:underline;">Output is 1020 because <span>input() functin always returns entered data in string formate
                    and here string is concatenating</span>.</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">To get proper output that is sum of numbers.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">num1=int(input("Enter first number:"))</h6>
                    <h6 class="pl-5">num2=int(input("Enter second number:"))</h6>
                    <h6  class="pl-5">print(num1 + num2)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter first number:<span style="color:orange;">10</span></h6>
                    <h6  class="pl-5">Enter second number:<span style="color:orange;">20</span></h6>
                    <h6  class="pl-5">30</h6>
                    <h6 class="mt-4 ml-5" style="color:black;text-decoration:underline;"> <span>Here returned value is first converted into integer type using 
                    <span class="text-primary">int()</span> method</span>.</h6>
                    </div>
                </div>


            <!--<div>
                <form action="">
                    <a href="stringconcatenation.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="addtwonums.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="stringconcatenation.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="addtwonums.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>