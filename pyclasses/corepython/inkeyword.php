<?php
    define("TITLE",'in keyword');
    define("DESCRIPTION",'in keyword in python');
    define("KEYWORD",'in');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">in keyword with string</h3>

            <h6 class="mt-4 ml-5">With string, in keyword can be used to check the presence of a character in 
            it and taking it as a condition with 'if' some statements can be executed. </h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name="rohit"</h6>
                    <h6  class="pl-5">if 'h' in name :<span class="pl-5"> # checking the presence of character h in "rohit"</span></h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("'h' is present in the string")</h6></pre>
                    <h6  class="pl-5">else :</h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("'h' is not present in the string")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">'h' is present in the string</h6>
                    </div>
                </div>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Emptyness of a variable</h4>
                <h6 class="mt-4 ml-5"> a variable is empty or not can be taken as condition with 'if' statement 
                to execute some statements</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">age=16</h6>
                    <h6  class="pl-5">if age :</h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("variable is not empty")</h6></pre>
                    <h6  class="pl-5">else :</h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("variable is empty")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">variable is not empty</h6>
                    <h6  class="pl-5" style="color:black;text-decoration:underline;"> If variable age has anything other than 0 and "" the condition is true</h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="andoroperator.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="loop.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="andoroperator.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="loop.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
