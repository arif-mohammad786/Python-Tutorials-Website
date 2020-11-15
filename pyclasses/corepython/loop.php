<?php
    define("TITLE",'loop in python');
    define("DESCRIPTION",'explanation of loops in python');
    define("KEYWORD",'loops');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Loop in python</h3>
            <h6 class="mt-4 ml-5">Python has two primitive loops</h6>
                <ul>
                    <li>for loop</li>
                    <li>while loop</li>
                </ul>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">while loop</h4>
                <h6 class="mt-4 ml-5">It is used to execute set of statements multiple times till the
                condition is true.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class=" ml-5">initialization</h6>
                <h6 class=" ml-5">while condition</h6>
                <pre><h6 class=" ml-5 font-weight-bold ">   set of statements</h6></pre>
                <pre><h6 class=" ml-5 font-weight-bold ">   increment or decrement</h6></pre>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">i=1<span class="ml-5"># initialization</span></h6>
                    <h6  class="pl-5">total=0</h6>
                    <h6  class="pl-5">while i <=10 :<span class="ml-5"># condition</span></h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>total=total+i <span class="ml-5"># set of statements</span></h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>i=i+1 <span class="ml-5"># increment</span></h6>
                    <h6 class="pl-5">print(f"sum={total}")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">sum=55</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">for loop</h4>
                <h6 class="mt-4 ml-5"><span class="text-primary">for</span> loop is used with <span class="text-primary">range()</span> function to execute set of statements
                multiple times (number of iteration depends on value passed in range() function).</h6>
                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">range() function</h5>
                <h6 class="mt-4 ml-5">It returns a sequence of numbers in a range</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">range(statrargument ,end argument ,step srgument)</h6>
                <h6 class="mt-4 ml-5">by default step argument is 1</h6>
                <h6 class="mt-4 ml-5">example</h6>
                <h6 class="mt-4 ml-5">range(1,10)</h6>
                <h6 class="mt-4 ml-5">it will return values in range 1 to 10 excluding 10.</h6>
                <h6 class="mt-4 ml-5">if start argument is not passed it will be 0 .</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">for i in range(6) : </h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>print("Hello world")</h6>
                    <h6 class=" ml-5 "># i will have value 0 in first iteration 1 in second and so on upto 5.</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    <h6  class="pl-5">Hello world</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">break statement</h4>
                <h6 class="mt-4 ml-5"><span class="text-primary">break</span> statement is used to break the loop or to 
                come out of the loop .</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">for i in range(1,6) : </h6>
                    <h6 class=" ml-5 "><span class="ml-4"></span>if i==4 :</h6>
                    <h6 class=" ml-5 "><span class="ml-4"><span class="ml-4"></span></span>break</h6>
                    <h6 class=" ml-5 "><span class="ml-4"></span>print(i)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">1</h6>
                    <h6  class="pl-5">2</h6>
                    <h6  class="pl-5">3</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">continue statement</h4>
                <h6 class="mt-4 ml-5"><span class="text-primary">continue</span> statement is used to skip a iteration and move to next one.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">for i in range(1,6) : </h6>
                    <h6 class=" ml-5 "><span class="ml-4"></span>if i==4 :</h6>
                    <h6 class=" ml-5 "><span class="ml-4"><span class="ml-4"></span></span>continue</h6>
                    <h6 class=" ml-5 "><span class="ml-4"></span>print(i)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">1</h6>
                    <h6  class="pl-5">2</h6>
                    <h6  class="pl-5">3</h6>
                    <h6  class="pl-5">5</h6>
                    <h6  class="pl-5"># iteration for i=4 is skipped.</h6>
                    </div>
                </div>

            <div >


            <!--<div >
                <form action="">
                    <a href="inkeyword.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="function.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                 <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="inkeyword.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="function.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
