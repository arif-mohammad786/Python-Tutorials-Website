<?php
    define("TITLE",'String Slicing');
    define("DESCRIPTION",'explanation of string slicing in python');
    define("KEYWORD",'string slicing');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">String Slicing</h3>
            <h6 class="mt-4 ml-5">To get a range of characters of a given string string slicing is used.</h6>
            <h6 class="mt-4 ml-5">starting and ending index is needed to get the string .</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">variable[start index : stop index]</h6>
            <h6 class="mt-4 ml-5">Ending index is taken one less than passed as stop index.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">lang="python"</h6>
                    <h6  class="pl-5">print(lang[3:6])</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">hon</h6>
                    <h6  class="pl-5"><span style="color:black;">h->3 ,o->4 ,n->5</span></h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">If any argument is not passed and only colon is written the it will return whole string.</h6>
                <h6 class="mt-4 ml-5">If only starting index is passed with colon whole string from that index will be returned.</h6>
                <h6 class="mt-4 ml-5">If only ending index is passed with colon then string from starting upto that index-1 will be returned.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">lang="python"</h6>
                    <h6  class="pl-5">print(lang[:])</h6>
                    <h6  class="pl-5">print(lang[2:])</h6>
                    <h6  class="pl-5">print(lang[:4])</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">python</h6>
                    <h6  class="pl-5">thon</h6>
                    <h6  class="pl-5">pyth</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5">Step Argument</h4>
                <h6 class="mt-4 ml-5">In string slicing syntax there is one more arguments i.e step argument
                that tells number of steps to jump after each character</h6>
                <h6 class="mt-4 ml-5">By default step argument is 1.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable[start argument : end argument : step argument]</h6>
                <h6 class="mt-4 ml-5">To move backward negative steps can be used</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">lang="python"</h6>
                    <h6  class="pl-5">print(lang[0:6:2])</h6>
                    <h6  class="pl-5">print(lang[2:5:3])</h6>
                    <h6  class="pl-5">print(lang[5::-1])<span class="pl-4"> # reverse of the string</span></h6>
                    <h6  class="pl-5">print(lang[-1::-1])<span class="pl-4"> # reverse of the string</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">pto</h6>
                    <h6  class="pl-5">t</h6>
                    <h6  class="pl-5">nohtyp</h6>
                    <h6  class="pl-5">nohtyp</h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="stringindexing.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="stringmethods.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="stringindexing.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="stringmethods.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
