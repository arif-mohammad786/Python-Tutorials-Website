<?php
    define("TITLE",'and or operators');
    define("DESCRIPTION",'and or operator in python');
    define("KEYWORD",'and or operator');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">and or operators</h3>
            <h4 style="text-decoration:underline;" class="mt-3  text-secondary">and operator</h4>
            <table class="table border">
                <thead>
                    <tr>
                        <th>x</th>
                        <th>y</th>
                        <th>x and y</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>true</td>
                            <td>true</td>
                            <td>true</td>
                        </tr>
                        <tr>
                            <td>true</td>
                            <td>false</td>
                            <td>false</td>
                        </tr>
                        <tr>
                            <td>false</td>
                            <td>false</td>
                            <td>false</td>
                        </tr>
                        <tr>
                            <td>false</td>
                            <td>true</td>
                            <td>false</td>
                        </tr>
                    </tbody>
                </thead>
            </table>

            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">if condition1 and condition2 :</h6>
            <pre><h6 class=" ml-5 font-weight-bold">     statements</h6></pre>
            <h6 class="mt-4 ml-5">With <span class="text-primary">and</span> operator if both conditions are true then only statements
            inside if are executed.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-2" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-2">name="vinay"</h6>
                    <h6  class="pl-2">age=20</h6>
                    <h6  class="pl-2">if name == 'vinay' and age == 20 :</h6>
                    <pre><h6 class=" ml-2 font-weight-bold text-success"> print("both condition are true")</h6></pre>
                    <h6  class="pl-2">else :</h6>
                    <pre><h6 class=" ml-2 font-weight-bold text-success"> print("atleast one condition is false")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">both condition are true</h6>
                    </div>
                </div>

            <h4 style="text-decoration:underline;" class="mt-3  text-secondary">or operator</h4>
            <table class="table border">
                <thead>
                    <tr>
                        <th>x</th>
                        <th>y</th>
                        <th>x and y</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>true</td>
                            <td>true</td>
                            <td>true</td>
                        </tr>
                        <tr>
                            <td>true</td>
                            <td>false</td>
                            <td>true</td>
                        </tr>
                        <tr>
                            <td>false</td>
                            <td>false</td>
                            <td>false</td>
                        </tr>
                        <tr>
                            <td>false</td>
                            <td>true</td>
                            <td>true</td>
                        </tr>
                    </tbody>
                </thead>
            </table>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">if condition1 and condition2 :</h6>
            <pre><h6 class=" ml-5 font-weight-bold">     statements</h6></pre>
            <h6 class="mt-4 ml-5">With <span class="text-primary">or</span> operator if atleast one conditions is true then only statements
            inside if are executed.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name="vinay"</h6>
                    <h6  class="pl-5">age=20</h6>
                    <h6  class="pl-5">if name == 'vinay' or age == 18 :</h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("true")</h6></pre>
                    <h6  class="pl-5">else :</h6>
                    <pre><h6 class=" ml-5 font-weight-bold text-success">     print("false")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">true</h6>
                    <h6  class="pl-5" style="color:black;text-decoration:underline;">Output is true because one condition is true(i.e name ='vinay').</h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="ifelse.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                    <a href="inkeyword.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="ifelse.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="inkeyword.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>