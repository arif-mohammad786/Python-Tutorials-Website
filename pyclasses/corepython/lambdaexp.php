<?php
    define("TITLE",'lambda expression');
    define("DESCRIPTION",'lambda function in python');
    define("KEYWORD",'lambda function');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Lambda Expression or (Anonymous function)</h3>
            <h6 class="mt-4 ml-5">This function does not have any name so it is called anonymous function.
            but it can be assigned to a variable .</h6>
            <h6 class="mt-4 ml-5">It is a good way to define a function in one line .</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="ml-5 text-primary">lambda arguments : returning value</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5" style="text-decoration:underline;"># program to add two numbers using lambda function</h6>
                    <h6  class="pl-5">add=lambda a  ,b : a + b</h6>
                    <h6  class="pl-5">print(add(5,10))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">15</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3 text-secondary">lambda with if-else</h4>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5" style="text-decoration:underline;"># program to return true if length 
                    of passed string is more than 5 using lambda function</h6>
                    <h6  class="pl-5">fun=lambda s : True if len(s) > 5 else False</h6>
                    <h6  class="pl-5">print(fun('london'))</h6>
                    <h6  class="pl-5">print(fun('ajay'))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">True</h6>
                    <h6  class="pl-5">False</h6>
                    </div>
                </div>


            <!--<div>
                <form action="">
                <a href="kwargs.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="enumeratemap.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="kwargs.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="enumeratemap.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
