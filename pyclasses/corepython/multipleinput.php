<?php
    define("TITLE",'multiple inputs');
    define("DESCRIPTION",'taking multiple inputs from user in single line');
    define("KEYWORD",'multiple inputs');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Multiple inputs from user in single line</h3>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name,age=input("Enter your name and age:").split()</h6>
                    <h6  class="pl-5">print(name)</h6>
                    <h6  class="pl-5">print(age)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter your name and age:<span style="color:orange;">raj 20</span></h6>
                    <h6  class="pl-5">raj</h6>
                    <h6  class="pl-5">20</h6>
                    <h6  class="pl-5"><span style="color:black;text-decoration:underline;">Here split()
                    method is used to separate the two inputs by a space . Any oter separating value can also be passed 
                    in <span class="text-primary">split()</span> method (e.g comma ',') then user has to enter comma between two inputs</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name,age=input("Enter your name and age:").split(',')</h6>
                    <h6  class="pl-5">print(name)</h6>
                    <h6  class="pl-5">print(age)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter your name and age:<span style="color:orange;">raj,20</span></h6>
                    <h6  class="pl-5">raj</h6>
                    <h6  class="pl-5">20</h6>
                    <h6  class="pl-5"><span style="color:black;text-decoration:underline;">Inputs separated by a comma</span></h6>
                    </div>
                </div>


            <!--<div >
                <form action="">
                    <a href="addtwonums.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="stringformatting.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="addtwonums.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="stringformatting.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>