<?php
    define("TITLE",'**kwargs in python');
    define("DESCRIPTION",'**kwargs parameter in python');
    define("KEYWORD",'**kwargs parameter');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">**kwargs in python</h3>
            <h6 class="mt-4 ml-5">**kwargs is used as a parameter in a function when we want to pass key value pair
            a parameter.</h6>
            <h6 class=" ml-5"><span class="text-primary">type of kwargs is dictionary</span> .It first converts 
            the passed key value pairs into dictionary and then accepts it .</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def fun(**kwargs) :</h6>
                    <h6  class="pl-5"><span class="pl-5">print(kwargs)</span></h6>
                    <h6  class="pl-5">fun(fname='anuj' ,lname='kumar')</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{'fname': 'anuj', 'lname': 'kumar'}</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="text-secondary">Order of parameters in a function</h4>
                <h6 class="mt-4 ml-5">order must be :<span class="text-primary">PADK</span></h6>
                <h6 class="ml-5">P => Parameter(normal)</h6>
                <h6 class="ml-5">A => *args</h6>
                <h6 class="ml-5">D => Default parameters</h6>
                <h6 class="ml-5">k => **kwargs</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def fun(name ,*args ,lname='kumar' ,**kwargs) :</h6>
                    <h6  class="pl-5"><span class="pl-5">print(name)</span></h6>
                    <h6  class="pl-5"><span class="pl-5">print(args)</span></h6>
                    <h6  class="pl-5"><span class="pl-5">print(lname)</span></h6>
                    <h6  class="pl-5"><span class="pl-5">print(kwargs)</span></h6>
                    <h6  class="pl-5">fun('harsh',1,2,3,4,5,a=10,b=20)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">harsh</h6>
                    <h6  class="pl-5">(1, 2, 3, 4, 5)</h6>
                    <h6  class="pl-5">kumar</h6>
                    <h6  class="pl-5">{'a': 10, 'b': 20}</h6>
                    </div>
                </div>


            <!--<div>
                <form action="">
                <a href="args.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="lambdaexp.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                 <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="args.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="lambdaexp.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
