<?php
    define("TITLE",'filter and zip function');
    define("DESCRIPTION",'filter and zip function in python');
    define("KEYWORD",'filter function,zip function');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">filter() function</h3>
            <h6 class="mt-4 ml-5">It is similar to map() function but here it returns filter object which 
            have items (of iterable) for which function result is true.</h6>
            

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">def fun(a) :</h6>
                    <h6  class="pl-5"><span class="pl-5">return a%2==0</span></h6>
                    <h6  class="pl-5">num=[1,2,3,4,5]</h6>
                    <h6  class="pl-5">even=list(filter(fun,num))</h6>
                    <h6  class="pl-5">print(even)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[2, 4]</h6><span class="pl-5"># function result for 2 and 4 are true .</span>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">zip() function</h3>
                <h6 class="mt-4 ml-5">The zip() function returns a zip object, which is an iterator of tuples 
                where the first item in each passed iterator is paired together, and then the 
                second item in each passed iterator are paired together etc..</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">user=['user1','user2','user3']</h6>
                    <h6  class="pl-5">name=['prem','raj','kumar']</h6>
                    <h6  class="pl-5">res=list(zip(user,name))</h6>
                    <h6  class="pl-5">print(res)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[('user1', 'prem'), ('user2', 'raj'), ('user3', 'kumar')]</h6>
                    </div>
                </div>

                <h5 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Unpacking of iterable of tuples</h5>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">l=[(1,2),(3,4),(5,6),(7,8)]</h6>
                    <h6  class="pl-5">l1,l2=list(zip(*l))</h6>
                    <h6  class="pl-5">print(l1)</h6>
                    <h6  class="pl-5">print(l2)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">(1, 3, 5, 7)</h6>
                    <h6  class="pl-5">(2, 4, 6, 8)</h6>
                    <h6 class="mt-4 ml-5" ># (*) It will unpack the list in two tuples one with first element 
                of each tuple and other with other elements of tuple.</h6>

                    </div>
                </div>

               

            <!--<div>
                <form action="">
                <a href="enumeratemap.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="enumeratemap.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
