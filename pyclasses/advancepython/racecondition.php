<?php
    define("TITLE",'race condition in threading');
    define("DESCRIPTION",'explanation of race condition of threads in python');
    define("KEYWORD",'race condition');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Race condition in threading</h3>

        <h6 class="mt-4 ml-5">Race condition is a situation that occurs when threads are acting in an unexpected
        sequence thus leading to unreliable output.</h6>
        <h6 class="mt-4 ml-5">This can be eliminated by thread synchronization .</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-1" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-1" >from threading import *<span class="pl-2"># * represents all</span></h6>
                    <h6  class="pl-1" >class flight :</h6>
                    <h6  class="pl-1" ><span class="pl-2">def __init__(self,avl_seat) :</span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-5">self.available_seat=available_seat</span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2">def reserve(self,need_seat) :</span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2">print("\n availabe seats:",self.available_seat)</span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2">if(self.available_seat>=need_seat) :</span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2"><span class="pl-2">name=current_thread().name</span></span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2"><span class="pl-2">print(f"\n {need_seat} seat is alloted for {name})</span></span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2"><span class="pl-2">self.available_seat-=need_seat</span></span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2">else :</span></span></h6>
                    <h6  class="pl-1" ><span class="pl-2"><span class="pl-2"><span class="pl-2">print("seat not available")</span></span></span></h6>
                    <h6  class="pl-1" >f=flight(1)</h6>
                    <h6  class="pl-1" >t1=Thread(target=f.reserve,args=(1,),name='rahul')</h6>
                    <h6  class="pl-1" >t2=Thread(target=f.reserve,args=(1,),name='prem')</h6>
                    <h6  class="pl-1" >t1.start()</h6>
                    <h6  class="pl-1" >t2.start()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">availabe seats:</h6>
                    <h6  class="pl-5">availabe seats:  11</h6>
                    <h6  class="pl-5">1 seat is alloted for rahul</h6>
                    <h6  class="pl-5">1 seat is alloted for prem</h6>
                    <h6  class="pl-5 text-primary">#  It is giving unreliable output because both thread are trying to 
                    access the reserve() method at the same time.</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">Race condition can be removed by synchronization which means when one 
                thread is accssing an object other will be blocked to access thar object.</h6>
                <h4 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Synchronization using Locks</h4>
                <h6 class="mt-4 ml-5">Shared object is locked for a thread when other is accessing.</h6>
                <h6 class="mt-4 ml-5">It has two states Locked and Unlocked.</h6>
                <h6 class="mt-4 ml-5"><span class="text-primary">acquire() </span>=> It is used to lock the object for
                a thread . </h6>
                <h6 class="mt-4 ml-5"><span class="text-primary">release()</span>=> This method is used to release 
                a lock .It can be called by any thread not only the thread that has locked.


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-2" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-2" >from threading import *<span class="pl-2"># * represents all</span></h6>
                    <h6  class="pl-2" >class flight :</h6>
                    <h6  class="pl-2" ><span class="pl-2">def __init__(self,avl_seat) :</span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2">self.available_seat=available_seat</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2 text-primary">self.l=Lock()</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2">def reserve(self,need_seat) :</span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2 text-primary">self.l.acquire()</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2">print("\n availabe seats:",self.available_seat)</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-1">if(self.available_seat>=need_seat) :</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2"><span class="pl-2">name=current_thread().name</span></span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2"><span class="pl-2">print(f"\n {need_seat} seat is alloted for {name})</span></span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2"><span class="pl-2">self.available_seat-=need_seat</span></span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2">else :</span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2"><span class="pl-2">print("seat not available")</span></span></span></h6>
                    <h6  class="pl-2" ><span class="pl-2"><span class="pl-2 text-primary">self.l.release()</span></span></h6>
                    <h6  class="pl-2" >f=flight(1)</h6>
                    <h6  class="pl-2" >t1=Thread(target=f.reserve,args=(1,),name='rahul')</h6>
                    <h6  class="pl-2" >t2=Thread(target=f.reserve,args=(1,),name='prem')</h6>
                    <h6  class="pl-2" >t1.start()</h6>
                    <h6  class="pl-2" >t2.start()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">availabe seats: 1</h6>
                    <h6  class="pl-5">1 seat is alloted for rahul</h6>
                    <h6  class="pl-5">availabe seats: 0</h6>
                    <h6  class="pl-5">seat not available</h6>
                    <h6  class="pl-5 text-primary">#  It is giving reliable output because both thread are synchronized not trying to 
                    access the reserve() method at the same time.</h6>
                    </div>
                </div>



            <!--<div >
                <form action="">
                    <a href="threadcreation.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="daemonthread.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="threadcreation.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="daemonthread.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>