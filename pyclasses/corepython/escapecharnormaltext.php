<?php
    define("TITLE",'Escape character as normal text');
    define("DESCRIPTION",'escape characters as normal text in python');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Escape characters as normal text.</h3>
                <h6 class="mt-4 ml-5">To print escape sequence characters as normal text backslash is used before them.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">print("line A \\n line B")</h6>
                    <h6  class="pl-5">print("line A \\t line B")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">line A \n line B</h6>
                    <h6  class="pl-5">line A \t line B</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">Here \n and \t are printed as normal text.</h6>
                <h6 class="mt-4 ml-5">Another way of doing this is using <span class="text-primary">r</span> in print() method.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">print(r"line A \n line B")</h6>
                    <h6  class="pl-5">print(r"line A \t line B")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">line A \n line B</h6>
                    <h6  class="pl-5">line A \t line B</h6>
                    </div>
                </div>

                <!--<div >
                    <form action="">
                        <a href="comments.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                        <a href="pythonascalci.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->
    
        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="comments.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="pythonascalci.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>

<?php
    include("footer.php");
?>