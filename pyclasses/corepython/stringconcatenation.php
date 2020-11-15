<?php
    define("TITLE",'string concatenation');
    define("DESCRIPTION",'explanation of string concatination in python');
    define("KEYWORD",'string concatination');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">String Concatenation</h3>
            <h6 class="mt-4 ml-5">Combining two or more strings to make a single string is string concatenation.</h6>
            <h6 class="mt-4 ml-5">Concatenation is done using plus(+) operator.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">first_name="mohit"</h6>
                    <h6  class="pl-5">last_name="yadav"</h6>
                    <h6  class="pl-5">full_name=first_name + " " + last_name</h6>
                    <h6  class="pl-5">print(full_name)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">mohit yadav</h6>
                    </div>
                </div>
            <h6 class="mt-4 ml-5">Concatenation of string and integer.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">first_name="mohit"</h6>
                    <h6  class="pl-5">print(first_name + 3)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-danger">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Error</h6>
                    <h6  class="pl-5">String can be concatenated with a string only.</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">first_name="mohit"</h6>
                    <h6  class="pl-5">print(first_name + "3")</h6>
                    <h6 class="pl-5 " style="color:black;">OR</h6>
                    <h6  class="pl-5">print(first_name + str(3))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">mohit3</h6>
                    </div>
                </div>
            
                <h6 class="mt-4 ml-5">To print same string number of times.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name="apple"</h6>
                    <h6  class="pl-5">print(name*3)<span class="pl-4">#  It will print string apple three times</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">appleappleapple</h6>
                    </div>
                </div>

                <!--<div >
                    <form action="">
                        <a href="variables.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                        <a href="inputfromuser.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->
            

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="variables.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="inputfromuser.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>

<?php
    include("footer.php");
?>