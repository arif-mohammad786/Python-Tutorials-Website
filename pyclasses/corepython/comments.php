<?php
    define("TITLE",'comments');
    define("DESCRIPTION",'comments in python');
    define("KEYWORD",'comments');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Comments</h3>
        <h6 class="mt-4 ml-5">Comments are used to make code more readable</h6>
        <h6 class="mt-4 ml-5">Comments are uset for testing purpose.</h6>
        <h6 class="mt-4 ml-5">Comments are ignored by python.</h6>
        <h6 class="mt-4 ml-5">In Python single line comments are written using hash(#) at starting of line.</h6>
       
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5"># this is single line comment</h6>
                    <h6  class="pl-5">print("Hello World")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello World</h6>
                    </div>
                </div>
            
                <h6  class="mt-4 ml-5">First line with hash(#) is ignored .It does not come on screen.</h6>

                <h6 class="mt-4 ml-5">Multiline comments are written using """ at the starting and end of comment.</h6>
                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">""" this is example of<br>
                    multiline comment"""</h6>
                    <h6  class="pl-5">print("Hello World")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello World</h6>
                    </div>
                </div>
                
                <!--<div >
                    <form action="">
                        <a href="escapesequence.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                        <a href="escapecharnormaltext.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="escapesequence.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="escapecharnormaltext.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>