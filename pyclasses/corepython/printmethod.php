<?php
    define("TITLE",'print method');
    define("DESCRIPTION",'explanation of print method in python');
    define("KEYWORD",'print method');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">
                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Print Method</h3>

                <h6 class="mt-3 ml-5">To Print any message on screen <span class="text-primary">print()</span> method is used.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">print("Hello world")</h6>
                    <h6  class="pl-5">print('Hello world')</h6>
                    </div>
                </div>

                <h6 class="mt-3 ml-5">Single quote and Double quote both can be used here.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    </div>
                </div>

                <h6 class="mt-3 ml-5">Single quote can be used inside Double quote and double quote inside single quote.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">print("Hello 'Hello' World")</h6>
                    <h6  class="pl-5">print('Hello "Hello" World')</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello 'Hello' world</h6>
                    <h6  class="pl-5">Hello "Hello" world</h6>
                    </div>
                </div>

                <!--<div >
                    <form action="">
                        <a href="escapesequence.php" class="btn btn-primary mb-5"style="margin-left:500px;" >NEXT</a>
                    </form>
                </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="escapesequence.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>

<?php
    include("footer.php");
?>