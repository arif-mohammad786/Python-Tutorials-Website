<?php
    define("TITLE",'Exception Handling');
    define("DESCRIPTION",'explanation of exception handling in python');
    define("KEYWORD",'exception handling');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Exception Handling</h3>

        <h6 class="mt-4 ml-5">An exception is an event during execution of a program which terminates the normal 
        execution of program .It is a run time error.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class=" ml-5 text-primary">try :</h6>
        <h6 class=" ml-5 "><span class="pl-5">block of statements</span></h6>
        <h6 class=" ml-5 text-primary">except :</h6>
        <h6 class=" ml-5 "><span class="pl-5">block of statements</span></h6>
        <h6 class=" ml-5 text-primary">else :</h6>
        <h6 class=" ml-5 "><span class="pl-5">block of statements</span></h6>
        <h6 class=" ml-5 text-primary">finally :</h6>
        <h6 class=" ml-5 "><span class="pl-5">block of statements</span></h6>

        <h6 class="mt-4 ml-5"><span class="text-primary">try :</span> => It contains the code which 
        may cause exception.</h6>
        <h6 class="mt-4 ml-5"><span class="text-primary">except :</span> => It contains the code to handle the exception.</h6>
        <h6 class="mt-4 ml-5"><span class="text-primary">else :</span> => It contains the code which is executed when
        the exception is not raised.</h6>
        <h6 class="mt-4 ml-5"><span class="text-primary">finally :</span> => It contains the code which 
        will be executed irrespective of whether exception is raised or not.</h6>



                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class=" ml-5">a,b=input("enter the two numbers:).split(',')</h6>
                    <h6 class=" ml-5 ">try :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">res=int(a)/int(b)</span></h6>
                    <h6 class=" ml-5 ">except :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">print("divide by zero")</span></h6>
                    <h6 class=" ml-5 ">else :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">print("result=",res)</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output1:</h6>
                    <h6  class="pl-5">enter the two numbers:<span style="color:orange;">10,5</span></h6>
                    <h6  class="pl-5">result= 2.0</h6>
                    <h6 class="pl-5" style="text-decoration:underline;">Output2:</h6>
                    <h6  class="pl-5">enter the two numbers:<span style="color:orange;">10,0</span></h6>
                    <h6  class="pl-5">divide by zero</h6>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">User defined Exception</h3>
                <h6 class="mt-4 ml-5">We can define our own exception for that we have to create a child class of 
                class Exception.</h6>
                <h6 class="mt-4 ml-5">To raise exception <span class="text-primary">raise</span> keyword is used.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class=" ml-5">class myexception(Exception) :</h6>
                    <h6 class=" ml-5"><span class="pl-5">pass</span></h6>
                    <h6 class=" ml-5">def fun() :</h6>
                    <h6 class=" ml-5"><span class="pl-5">num1,num2=input("enter the two numbers:).split(',')</h6></h6>
                    <h6 class=" ml-5 ">try :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">res=int(num1)-int(num2)</span></h6>
                    <h6 class=" ml-5 "><span class="pl-5">if(res == 0) :</span></h6>
                    <h6 class=" ml-5 "><span class="pl-5"><span class="pl-5">raise myexception()</span></span></h6>
                    <h6 class=" ml-5 ">except :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">print("Enter two distinct numbers")</span></h6>
                    <h6 class=" ml-5 ">else :</h6>
                    <h6 class=" ml-5 "><span class="pl-5">print("result=",res)</span></h6>
                    <h6  class="pl-5">fun()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output1:</h6>
                    <h6  class="pl-5">enter the two numbers:<span style="color:orange;">10,40</span></h6>
                    <h6  class="pl-5">result= -30</h6>
                    <h6 class="pl-5" style="text-decoration:underline;">Output2:</h6>
                    <h6  class="pl-5">enter the two numbers:<span style="color:orange;">20,20</span></h6>
                    <h6  class="pl-5">Enter two distinct numbers</h6>
                    </div>
                </div>

            <!--<div >
                <form action="" class="mt-5">
                    <a href="writefile.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="database.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="writefile.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="database.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>