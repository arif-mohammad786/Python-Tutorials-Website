<?php
    define("TITLE",'thread creation');
    define("DESCRIPTION",'explanation of thread creation in python');
    define("KEYWORD",'thread creation');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Thread Creation</h3>
        <h4 style="text-decoration:underline;" class="mt-3  text-secondary">creating thread using child class
        of class Thread</h4>
        <h6 class="mt-4 ml-5">By creating object of a class which inherits Thread class we can create thread.></h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class=" ml-5 text-primary">class classname(Thread) :</h6>
        <h6 class=" ml-5 text-primary"><span class="pl-5">body of class</span></h6>
        <h6 class=" ml-5 text-primary">t=classname()</h6>
        <h6 class="mt-4 ml-5">There is a <span class="text-primary">run() </span>method in Thread class
        which runs whenever thread starts.We can override it.</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >from threading import Thread</h6>
                    <h6  class="pl-5" >class mythread(Thread) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def run(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("run method overridden")</span></span></h6>
                    <h6  class="pl-5" >t=mythread()</h6>
                    <h6  class="pl-5" >t.start()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">run method overridden</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">child class of Thread class</h4>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >from threading import Thread</h6>
                    <h6  class="pl-5" >class mythread(Thread) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">super().__init__()</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("child class constructor called")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def run(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("run method called")</span></span></h6>
                    <h6  class="pl-5" >t=mythread()<span class="pl-5 text-primary">#  __init__() function called</span></h6>
                    <h6  class="pl-5" >t.start()<span class="pl-5 text-primary">#  run() function called</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">child class constructor called</h6>
                    <h6  class="pl-5">run method called</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Creating thread without creating 
                child class of Thread class</h4>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >from threading import Thread</h6>
                    <h6  class="pl-5" >class mythread(Thread) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def disp(self,n,m) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("values are:",n,m)</span></span></h6>
                    <h6  class="pl-5" >m=mythread()</h6>
                    <h6  class="pl-5" >t=Thread(target=m.disp,args=(20,50))</h6>
                    <h6  class="pl-5" >t.start()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">values are: 20 50</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">target to the thread is assigned using object of class whose method we want 
                to assign to the thread.</h6>

            <!--<div >
                <form action="">
                    <a href="thread.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="racecondition.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="thread.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="racecondition.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>