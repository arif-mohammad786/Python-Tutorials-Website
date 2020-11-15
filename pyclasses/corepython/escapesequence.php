<?php
    define("TITLE",'EscapeSequences');
    define("DESCRIPTION",'escape sequences in python');
    define("KEYWORD",'escape sequences');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Escape Sequences</h3>
            <h6 class="mt-4 ml-5">To Insert illegal Characters in a String Escape sequence is used.</h6>
            <h6 class="mt-3 ml-5">A character followed by backslash \ is Escape Sequence Character.</h6>
            <h6 class="mt-3 ml-5">Example of illegal character is single quote in single quote.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">print("Hello \"World\" World")</h6>
                    </div>
                </div>


            <div class="jumbotron ml-5 mt-5 text-success">
                <div style="background-color:white;">
                <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                <h6  class="pl-5">Hello "World" World</h6>
                </div>
            </div>

            <div class="jumbotron" >
                <h3 style="text-decoration:underline;">Escape sequence Table</h3>
                <table class="table border mt-3" style="background-color:white;">
                    <thead>
                        <tr>
                            <th>Escape Sequence</th>
                            <th>Meaning</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\'</td>
                            <td>Single Quote</td>
                        </tr>
                        <tr>
                            <td>\"</td>
                            <td>Double Quote</td>
                        </tr>
                        <tr>
                            <td>\\</td>
                            <td>Backslash</td>
                        </tr>
                        <tr>
                            <td>\n</td>
                            <td>New Line</td>
                        </tr>
                        <tr>
                            <td>\t</td>
                            <td>Tab</td>
                        </tr>
                        <tr>
                            <td>\b</td>
                            <td>Backspace</td>
                        </tr>
                    </tbody>
                </table>
            </div>

                <!--<div >
                    <form action="">
                        <a href="printmethod.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                        <a href="comments.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                    </form>
                </div>-->

        </div>
    </div> 
                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="printmethod.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="comments.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>
</div>
               

<?php
    include("footer.php");
?>