<?php
    define("TITLE",'variables');
    define("DESCRIPTION",'variables in python explaines very easily');
    define("KEYWORD",'variables');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Variables</h3>
            <h6 class="mt-4 ml-5">Variables are named locations used to store data.</h6>
            <h6 class="mt-4 ml-5">Variables are created when value is assigned to it.</h6>
            <h6 class="mt-4 ml-5">In python type of variable is defined at execution time.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">x=10</h6>
                    <h6  class="pl-5">y=5</h6>
                    <h6  class="pl-5">print(x)</h6>
                    <h6  class="pl-5">print(y)</h6>
                    <h6  class="pl-5">print(x*y)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">10</h6>
                    <h6  class="pl-5">5</h6>
                    <h6  class="pl-5">50</h6>
                    </div>
                </div>

            <h6 class="mt-4 ml-5">String variables can be created by single quote or double quote.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fname="ram"<span class="pl-4"> #  Double quote</span></h6>
                    <h6  class="pl-5">lname='singh'<span class="pl-4"> #  Single quote</span></h6>
                    <h6  class="pl-5">print(fname)</h6>
                    <h6  class="pl-5">print(lname)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">ram</h6>
                    <h6  class="pl-5">singh</h6>
                    </div>
                </div>

                <div class=" ml-5 mt-5 mb-5">
                    <div style="background-color:white;">
                    <h4 class="pl-5 mb-3" style="text-decoration:underline;">Rules to create a variable</h4>
                    <h6  class="pl-5">1.  Variable name must start with a alphabet or underscore.</h6>
                    <h6  class="pl-5">2.  Variable name can not start with a number.</h6>
                    <h6  class="pl-5">3.  Variable are case sensitive.</h6>
                    <h6  class="pl-5">4.  Reserved words can not be taken as variables(e.g for,else,break).</h6>
                    <h6  class="pl-5">5.  Variable name must have only alphnumeric characters no special character except underscore.</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5">Declaration of multiple variables in the same line</h4>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name,age="raj",20</h6>
                    <h6  class="pl-5">print("Hello " +name+" your age is "+str(age))</h6>
                    <h6 class="pl-5">x=y=z=10</h6>
                    <h6 class="pl-5">print(x)</h6>
                    <h6 class="pl-5">print(y)</h6>
                    <h6 class="pl-5">print(z)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello raj your age is 20</h6>
                    <h6 class="pl-5">10</h6>
                    <h6 class="pl-5">10</h6>
                    <h6 class="pl-5">10</h6>
                    </div>
                </div>

                <!--<div >
                    <form action="" >
                        <a href="pythonascalci.php" class="btn btn-primary mb-3"style="margin-left:280px ;" >PREV</a>
                        <a href="stringconcatenation.php"class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->

        </div>
               
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="pythonascalci.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="stringconcatenation.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>       

</div>



<?php
    include("footer.php");
?>