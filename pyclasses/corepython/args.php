<?php
    define("TITLE",'*args in python');
    define("DESCRIPTION",'*args parameter in python');
    define("KEYWORD",'*args');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">*args in python</h3>
            <h6 class="mt-4 ml-5">*args is used as a parameter in a function when we want to pass multiple arguments for a 
            single parameter.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def add(a,b) :</h6>
                    <h6  class="pl-5"><span class="pl-5">return a+b</span></h6>
                    <h6  class="pl-5">print(add(2,3,4,5))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-danger">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">error</h6>
                    <h6  class="pl-5">add() takes 2 positional arguments but 4 were given</h6>
                    </div>
                </div>
                <h6 class="mt-4 ml-5">By using *args at the place of 'b' it can be resolved</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def add(*args) :</h6>
                    <h6  class="pl-5"><span class="pl-5">total=0</span></h6>
                    <h6  class="pl-5"><span class="pl-5">for num in args :</span></h6>
                    <h6  class="pl-5"><span class="pl-5"><span class="pl-5">total=total+num</span></span></h6>
                    <h6  class="pl-5"><span class="pl-5">return total</span></h6>
                    <h6  class="pl-5">print(add(1,2,3,4,5))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">15</h6>
                    </div>
                </div>
                <h6  class="pl-5">type of args is tuple so it first converts the passed values for *args into
                tuple and then accepts it.</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">*args with normal parameters</h4>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def fun(num,*args) :</h6>
                    <h6  class="pl-5"><span class="pl-5">mul=1</span></h6>
                    <h6  class="pl-5"><span class="pl-5">for i in args :</span></h6>
                    <h6  class="pl-5"><span class="pl-5"><span class="pl-5">mul=mul*i</span></span></h6>
                    <h6  class="pl-5"><span class="pl-5">return mul</span></h6>
                    <h6  class="pl-5">print(fun(2,3,4))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">12</h6>
                    <h6  class="pl-5" style="color:black;text-decoration:underline;"># product is 12 because parameter
                    num has got value 2 and args is a tuple (3,4).</h6>
                    </div>
                </div>

                <h6  class="pl-5 text-primary"style="text-decoration:underline;">If we will write *args left to normal parameters then all the arguments
                passed during function call will be taken as arguments for args and no value for normal parameters and 
                it will cause error</h6>


            <!--<div>
                <form action="">
                <a href="comprehension.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="kwargs.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="comprehension.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="kwargs.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
