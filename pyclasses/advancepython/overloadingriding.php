<?php
    define("TITLE",'method overloading and overriding');
    define("DESCRIPTION",'explanation of method overloading and overriding in python');
    define("KEYWORD",'method overloading,method overriding');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Method overloading and overriding</h3>
        <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Method overloading</h4>
        <h6 class="mt-4 ml-5">In python method overloading means same method is performing different tasks for
        different inputs .</h6>


        <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class myclass :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def sum(self,a=None,b=None,c=None) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">if a!=None and b!=None and c!=None :</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5"><span class="pl-5">s=a+b+c</span></span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">elif a!=None and b!=None :</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5"><span class="pl-5">s=a+b</span></span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">else :</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5"><span class="pl-5">s="provide atleast two numbers"</span></span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">return s</span></span></h6>
                    <h6  class="pl-5" >obj=myclass()</h6>
                    <h6  class="pl-5" >print(obj.sum())</h6>
                    <h6  class="pl-5" >print(obj.sum(10,20))</h6>
                    <h6  class="pl-5" >print(obj.sum(10,20,30))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">provide atleast two numbers</h6>
                    <h6  class="pl-5">30</h6>
                    <h6  class="pl-5">60</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Method overriding</h4>
                <h6 class="mt-4 ml-5">If we write methods in parent class and child class having same signature
                then the parent class's method is not available to the child it is replaced by child class method
                ,this is called method overriding .</h6>  


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class parent :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("parent class instance method")</span></span></h6>
                    <h6  class="pl-5" >class child(parent) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("child class instance method")</span></span></h6>
                    <h6  class="pl-5" >s=child()<span class="pl-5 text-primary"># child class object.</span></h6>
                    <h6  class="pl-5" >s.show()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">child class instance method</h6>
                    <span class="pl-5 text-primary"># child class method inherited show() from 
                    parent but replaced by show() of  #  child</span>
                    </div>
                </div>


            <!--<div >
                <form action="">
                    <a href="strongtyping.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="abstractclass.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                 <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="strongtyping.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="abstractclass.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>