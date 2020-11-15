<?php
    define("TITLE",'thread concept');
    define("DESCRIPTION",'explanation of threads in python');
    define("KEYWORD",'threads');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Thread concept</h3>
        <h6 class="mt-4 ml-5">It is a separate part of a program.</h6>
        <h6 class="mt-4 ml-5">When python program starts running one thread begins running immediately
        ,which is called <span class="text-primary"> mainthread</span> of program created by python virtual machine.</h>
        <h6 class="mt-4 ml-5"><span class="text-primary">Thread</span> class of <span class="text-primary">threading </span>module
        is used to create thread . we have to make object of class Thread. </h6>
        <h6 class="mt-4 ml-5 text-primary">Thread class has two main parameters 'target' and 'args' where target 
        points to method to be executed by thread and args is tuple of arguments to that method.
        start() method is used to start thread execution.</h6>
        
        <div class="jumbotron ml-5 mt-5 text-success">
        <div style="background-color:white;">
        <h6 class="mt-4 ml-5">from threading import Thread</h6>
        <h6 class=" ml-5">def disp(a,b) :</h6>
        <h6 class=" ml-5"><span class="pl-5">print("thread running:",a,b)</span></h6>
        <h6 class=" ml-5">t=Thread(target=disp,args=(10,20))</h6>
        <h6 class=" ml-5">t.start()</h6>
        </div>
            </div>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">thread running: 10 20</h6>
                    </div>
                </div>

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">set and get thread name</h3>
            <h6 class="mt-4 ml-5"><span class="text-primary">current_thread()</span> => this function returns the current thread object.</h6>
            <h6 class="mt-4 ml-5"><span class="text-primary">getName()</span>=> this function is used to get thread name.</h6>
            <h6 class="mt-4 ml-5"><span class="text-primary">setName()</span>=> this function is used to set threas name.</h6>
            <h6 class="mt-4 ml-5"><span class="text-primary">name</span> propery can be used to set and get thread name.</h6>


            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >import threading</h6>
                    <h6  class="pl-5" >def disp(a,b) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">print("thread running",a,b)</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">th=threading.currentThread()<span class="pl-2"># current thread object</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">th.setName("rajesh_thread")<span class="pl-2"># setting thread name</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">print(th.getName())<span class="pl-2"># getting thread name</span></span></h6>
                    <h6  class="pl-5" >t=threading.Thread(target=disp,args=(10,20))</h6>
                    <h6  class="pl-5" >t.start()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">thread running 10 20</h6>
                    <h6  class="pl-5">rajesh_thread</h6>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="abstractclass.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="threadcreation.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="abstractclass.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="threadcreation.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>      

</div>
    


<?php
    include("../corepython/footer.php");
?>