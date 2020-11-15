<?php
    define("TITLE",'String Formatting');
    define("DESCRIPTION",'explanation of string formatting in python');
    define("KEYWORD",'string formatting');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7 mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">String Formatting</h3>
        <h6 class="mt-4 ml-5">String formatting is used to avoid using plus(+) operator when we need to concatenate 
        a string and a variable in print() method.</h6>
        <h6 class="mt-4 ml-5"> Without String formatting we have to convert the variable into string using str() to 
        concatenate with a string.</h6>

        <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name,age=input("Enter your name and age:").split()</h6>
                    <h6  class="pl-5">print(f"Hello {name} your age is {age}")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter your name age:<span style="color:orange;">rahul 21</span></h6>
                    <h6  class="pl-5">Hello rahul your age is 21</h6>
                    <h6  class="pl-5"><span style="color:black;text-decoration:underline;">
                    Here the variables are kept in curly braces.</span></h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="multipleinput.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="pgmtogetavg.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="multipleinput.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="pgmtogetavg.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>

<?php
    include("footer.php");
?>