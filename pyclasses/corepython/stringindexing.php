<?php
    define("TITLE",'String indexing');
    define("DESCRIPTION",'string indexing explained in python');
    define("KEYWORD",'string indexing');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">String Indexing</h3>
            <h6 class="mt-4 ml-5">Every character in a string has a particular index using which characters can 
            can be accessed.</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">variable[index of character]</h6>
            <h6 class="mt-4 ml-5">First character has index 0 second character has 1 and so on.</h6>
            <h6 class="mt-4 ml-5">language ="java"</h6>
            <h6 class="mt-4 ml-5">j has index 0,-4</h6>
            <h6 class="mt-4 ml-5">a has index 1,-3</h6>
            <h6 class="mt-4 ml-5">v has index 2,-2</h6>
            <h6 class="mt-4 ml-5">a has index 3,-1</h6>
            <h6 class="mt-4 ml-5">To print 'v' from variable language we can write</h6>
            <h6 class="mt-4 ml-5">print(language[2]) OR</h6>
            <h6 class="mt-4 ml-5">print(language[-2])</h6>
            <h6 class="mt-4 ml-5">To print last character of string we can write</h6>
            <h6 class="mt-4 ml-5 mb-5">print(variable[-1])</h6>
            <!--<div >
                <form action="">
                    <a href="pgmtogetavg.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="stringslicing.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="pgmtogetavg.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="stringslicing.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
