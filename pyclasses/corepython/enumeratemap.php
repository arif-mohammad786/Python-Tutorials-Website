<?php
    define("TITLE",'enumerate and map function');
    define("DESCRIPTION",'enumerate and map functions in python');
    define("KEYWORD",'enumerate function,map function');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">enumerate() function</h3>
            <h6 class="mt-4 ml-5">enumerate() function is used with for loop to track the position of items in iterable</h6>
            <h6 class="mt-4 ml-5">example:</h6>
            <h6 class="ml-5">names=['prem','rajesh','rohan']</h6>
            <h6 class="ml-5 text-primary">to print :</h6>
            <h6 class="ml-5 text-primary">0 ---> prem</h6>
            <h6 class="ml-5 text-primary">1 ---> rajesh</h6>
            <h6 class="ml-5 text-primary">2---> rohan</h6>
            
            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="ml-5"style="color:black;text-decoration:underline;">without enumerate() function</h6>
                    <h6  class="pl-5">names=['prem','rajesh','rohan']</h6>
                    <h6  class="pl-5">pos=0</h6>
                    <h6  class="pl-5">for name in names :</h6>
                    <h6  class="pl-5"><span class="pl-5">print(f"{pos} ---> {name}")</span></h6>
                    <h6  class="pl-5"><span class="pl-5">pos=pos+1</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="ml-5"style="color:black;text-decoration:underline;">with enumerate() function</h6>
                    <h6  class="pl-5">names=['prem','rajesh','rohan']</h6>
                    <h6  class="pl-5">for pos , name in enumerate(names) :</h6>
                    <h6  class="pl-5"><span class="pl-5">print(f"{pos} ---> {name}")</span></h6>
                    <h6  class="pl-5"># pos will point next index and name to next item in every iteration.</h6>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">map() function</h3>
                <h6 class="mt-4 ml-5">In map() function result is generated for every item in the iterable passed to map()
                according to function passed to map() and returns a map object which can be converted into list or tuple .</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">numbers=[1,2,3,4]</h6>
                    <h6  class="pl-5">def square(a) :</h6>
                    <h6  class="pl-5"><span class="pl-5">return a**2</span></h6>
                    <h6  class="pl-5">sqr=list(map(square ,numbers))</h6>
                    <h6  class="pl-5">print(sqr)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[1, 4, 9, 16]</h6>
                    </div>
                </div>

                <h5 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Above program using 
                lambda and map functions.</h5>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">numbers=[1,2,3,4]</h6>
                    <h6  class="pl-5">square=list(map(lambda s: s**2 ,numbers))</h6>
                    <h6  class="pl-5">print(square)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[1, 4, 9, 16]</h6>
                    </div>
                </div>

            <!--<div>
                <form action="">
                <a href="lambdaexp.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="filterzip.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="lambdaexp.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="filterzip.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
