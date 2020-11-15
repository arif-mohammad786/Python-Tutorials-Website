<?php
    define("TITLE",'duck typing in python');
    define("DESCRIPTION",'explanation of duck typing in python');
    define("KEYWORD",'duck typing');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Duck Typing in python</h3>
        <h6 class="mt-4 ml-5">When a function is called with an object as argument and a class method is
        called in the function then the function will not care about type of object.It just finds the class
        of that object ,if the method called is present it will execute it else cause an error.</h6>


        <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class duck :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def walk(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("duck is walking")</span></span></h6>
                    <h6  class="pl-5" >class cow :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def walk(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("cow is walking")</span></span></h6>
                    <h6  class="pl-5" >def myfun(obj) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">obj.walk()</span></h6>
                    <h6  class="pl-5" >d=duck()</h6>
                    <h6  class="pl-5" >myfun(d)</h6>
                    <h6  class="pl-5" >h=cow()</h6>
                    <h6  class="pl-5" >myfun(h)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">duck is walking</h6>
                    <h6  class="pl-5">cow is walking</h6>
                    </div>
                </div>


            <!--<div >
                <form action="">
                    <a href="inheritance.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="strongtyping.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="inheritance.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="strongtyping.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>