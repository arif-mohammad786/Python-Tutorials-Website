<?php
    define("TITLE",'daemon thread in python');
    define("DESCRIPTION",'explanation of daemon thread in python');
    define("KEYWORD",'daemon thread');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Daemon Thread</h3>

        <h6 class="mt-4 ml-5">Daemon thread are the low priority threads. when main thread is terminating it 
        does not cares about the daemon thread is running or not, it just terminates all the daemon threads.</h6>
        <h6 class="mt-4 ml-5">Any thread can be made daemon thread by <span class="text-primary">setDaemon()</span>
         method.</h6>
         <h6 class="mt-4 ml-5">syntax:</h6>
         <h6 class=" ml-5 text-primary">threadobject.setDaemon(True)</h6>
         <h6 class="mt-4 ml-5">main thread is a non-daemon thread.</h6>


         
         <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >from threading import *<span class="pl-5"># * represents all</span></h6>
                    <h6  class="pl-5" >from time import sleep</h6>
                    <h6  class="pl-5" >def teacher() :</h6>
                    <h6  class="pl-5" ><span class="pl-5">for i in range(1,7) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("session:",i)</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">sleep(1)
                    <h6  class="pl-5" >t1=Thread(target=teacher)</h6>
                    <h6  class="pl-5" >t1.setDaemon(True)</h6>
                    <h6  class="pl-5" >t1.start()</h6>
                    <h6  class="pl-5" >sleep(6)</h6>
                    <h6  class="pl-5" >print("session end")<span class="pl-5"># main thread end</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">session: 1</h6>
                    <h6  class="pl-5">session: 2</h6>
                    <h6  class="pl-5">session: 3</h6>
                    <h6  class="pl-5">session: 4</h6>
                    <h6  class="pl-5">session: 5</h6>
                    <h6  class="pl-5">session: 6</h6>
                    <h6  class="pl-5">session end</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">thread t1 is daemon thread and also child thread of main thread
                so acts as supporting thread for main thread.</h6>
                <h6 class="mt-4 ml-5">After the end of non-daemon thread its supporting daemon threads terminates itself.</h6>
                <h6 class="mt-4 ml-5 mb-5">Here after the end of main thread thread t1 also terminates.</h6>


            <!--<div >
                <form action="">
                    <a href="racecondition.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="filehandling.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="racecondition.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="filehandling.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>