<?php
    define("TITLE",'If Else statement');
    define("DESCRIPTION",'if else statement in python');
    define("KEYWORD",'if ,if else');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">If Else statement</h3>
            <h5 class="mt-4 ml-5">Python supports following conditional operators:</h5>
            <div>
                <table class="table border">
                    <thead>
                        <tr>
                            <th>Operators</th>
                            <th>Meaning</th>
                            <th>Example</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>==</td>
                                <td>Equals</td>
                                <td>x==y</td>
                            </tr>
                            <tr>
                                <td>!=</td>
                                <td>Not Equals</td>
                                <td>x!=y</td>
                            </tr>
                            <tr>
                                <td><</td>
                                <td>Less than</td>
                                <td>x<<span>y</span></td>
                            </tr>
                            <tr>
                                <td><=</td>
                                <td>Less than or Equal to</td>
                                <td>x<=y</td>
                            </tr>
                            <tr>
                                <td>></td>
                                <td>Greater than</td>
                                <td>x>y</td>
                            </tr>
                            <tr>
                                <td>>=</td>
                                <td>Greater than or Equal to</td>
                                <td>x>=y</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
            <h6 class="mt-4 ml-5">Above operators can be used with 'if' statements as per a conditional
            to execute a set of statements.</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">if condition :</h6>
            <pre><h6 class=" ml-5 font-weight-bold">     statement 1</h6></pre>
            <pre><h6 class=" ml-5 font-weight-bold">     statement 2</h6></pre>
            <h6 class="mt-4 ml-5">else :</h6>
            <pre><h6 class=" ml-5 font-weight-bold">     statement 1</h6></pre>
            <pre><h6 class=" ml-5 font-weight-bold">     statement 2</h6></pre>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-3" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-3">age=input("Enter your age:")</h6>
                    <h6  class="pl-3">age=int(age)</h6>
                    <h6  class="pl-3">if age>=14 :</h6>
                    <pre><h6 class=" font-weight-bold text-success">   print("you are above 14")</h6></pre>
                    <h6  class="pl-3">else :</h6>
                    <pre><h6 class="font-weight-bold text-success">   print("you are not above 14")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Enter your age:<span style="color:orange;">20</span></h6>
                    <h6  class="pl-5">you are above 14</h6>
                    </div>
                </div>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">pass statement</h4>
                <h6 class="mt-4 ml-5">when we don't want to execute any statement for a true or false
                condition of a <span class="text-primary">if</span> statement the we use <span class="text-primary">pass</span> inside if or else.</h6>
                <h6 class="mt-4 ml-5">x=18</h6>
                <h6 class="mt-4 ml-5">if x>18 :</h6>
                <pre><h6 class=" ml-5 font-weight-bold ">    pass</h6></pre>
                <h6 class="mt-4 ml-5">Here if condition becomes true statement after <span class="text-primary">if</span> will be executed.</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">if elif else statement</h4>
                <h6 class="mt-4 ml-5">When we want to check another codition on fain of a given condition 
                <span class="text-primary">elif</span> is used.</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-3" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-3">age=input("Enter your age:")</h6>
                    <h6  class="pl-3">age=int(age)</h6>
                    <h6  class="pl-3">if age==0 :</h6>
                    <pre><h6 class=" ml-3 font-weight-bold text-success">   print("you can not watch")</h6></pre>
                    <h6  class="pl-3">elif 0<<span>age</span><=3 :</h6>
                    <pre><h6 class=" ml-3 font-weight-bold text-success">   print("price=Free")</h6></pre>
                    <h6  class="pl-3">elif 3<<span>age</span><=10 :</h6>
                    <pre><h6 class=" ml-3 font-weight-bold text-success">   print("price=150")</h6></pre>
                    <h6  class="pl-3">elif 11<<span>age</span><=60 :</h6>
                    <pre><h6 class=" ml-3 font-weight-bold text-success">   print("price=250")</h6></pre>
                    <h6  class="pl-3">else :</h6>
                    <pre><h6 class=" ml-3 font-weight-bold text-success">   print("price=200")</h6></pre>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output 1:</h6>
                    <h6  class="pl-5">Enter your age:<span style="color:orange;">10</span></h6>
                    <h6  class="pl-5">price=150</h6>
                    <h6 class="pl-5" style="text-decoration:underline;">Output 2:</h6>
                    <h6  class="pl-5">Enter your age:<span style="color:orange;">20</span></h6>
                    <h6  class="pl-5">price=250</h6>
                    <h6 class="mt-4 ml-5" style="color:black;text-decoration:underline;">Only that statements
                    will be executed which are inside true condition</h6>
                    </div>
                </div>
                


            <!--<div >
                <form action="">
                    <a href="stringmethods.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="andoroperator.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="stringmethods.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="andoroperator.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
