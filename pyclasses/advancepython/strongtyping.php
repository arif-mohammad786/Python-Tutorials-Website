<?php
    define("TITLE",'strong typing in python');
    define("DESCRIPTION",'explanation of strong typing in python');
    define("KEYWORD",'strong typing');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Strong Typing in python</h3>
        <h6 class="mt-4 ml-5">When a function is called with an object as argument and a class method is
        called in the function then we can check whether that object has called class method or not by using
        <span class="text-primary">hasattr()</span> function .If it has then call the method else not.It will
        not give any error in absence of method.</h6>

        <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class duck :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def walk(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("duck is walking")</span></span></h6>
                    <h6  class="pl-5" >class horse :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def walk(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("horse is walking")</span></span></h6>
                    <h6  class="pl-5" >def myfun(obj) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">if hasattr(obj,'walk') :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">obj.walk()</span></span></h6>
                    <h6  class="pl-5" >d=duck()</h6>
                    <h6  class="pl-5" >myfun(d)</h6>
                    <h6  class="pl-5" >h=horse()</h6>
                    <h6  class="pl-5" >myfun(h)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">duck is walking</h6>
                    <h6  class="pl-5">horse is walking</h6>
                    </div>
                </div>



            <!--<div >
                <form action="">
                    <a href="ducktyping.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="overloadingriding.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="ducktyping.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="overloadingriding.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>