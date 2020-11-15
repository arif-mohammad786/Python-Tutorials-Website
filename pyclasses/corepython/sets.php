<?php
    define("TITLE",'sets in python');
    define("DESCRIPTION",'set data structure in python');
    define("KEYWORD",'set');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Sets in python</h3>

            <ul>
                <li>It is a data structure</li>
                <li>It is a unordered collection of items</li>
                <li>Any data type value can be stored in it</li>
                <li>it is created using  <spna class="text-primary">{ }</span></li> 
                <li>Indexing and slicing can not be done with set variable</li>
                <li>It is mutable (i.e elements in sets can be modified)</li>
                <li>Duplicates are not allowed</li>
            </ul>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Creation of set</h4>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="ml-5">s={1,2,3,4,5.0,'apple'}</h6>
            <h6 class="ml-5 text-primary"style="text-decoration:underline;">sets can be used to remove duplicate elements from a list or tuple by changing it to 
            set</h6>
            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">st=[1,2,2,4,5,6,7,7,7,3,4]<span class="pl-5"># list with duplicates</span></h6>
                    <h6  class="pl-5">st=set(st)<span class="pl-5"># changing into set</span></h6>
                    <h6  class="pl-5">print(st)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{1, 2, 3, 4, 5, 6, 7}</h6>
                    </div>
                </div>


                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Add item in set using
                <span class="text-primary">add()</span> method.</h4>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5">set.add(item)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">s={1,2,3,4,5}</h6>
                    <h6  class="pl-5">s.add(10)</h6>
                    <h6  class="pl-5">print(s)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{1, 2, 3, 4, 5, 10}</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">some more methods</h4>
                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">remove() method</h5>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5">set.remove(item)</h6>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">copy() method</h5>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5">set.copy()</h6>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">clear() method</h5>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5">set.clear()</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">loop in set</h4>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">s={10,20,30,40,50}</h6>
                    <h6  class="pl-5">for i in s :</h6>
                    <h6  class="pl-4"><span class="pl-5">print(i)</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">40</h6>
                    <h6  class="pl-5">10</h6>
                    <h6  class="pl-5">50</h6>
                    <h6  class="pl-5">20</h6>
                    <h6  class="pl-5">30</h6>
                    <h6  class="pl-5"style="color:black;text-decoration:underline;"># since set is unordered 
                    items can printed in any order.</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">union and intersection of sets</h4>
                <h6 class="mt-4 ml-5"><span class="text-primary">union </span>means all the items that are in 
                any of the sets undergoing for union.</h6>
                <h6 class="mt-4 ml-5"><span class="text-primary">intersection </span>means all the items that are 
                common in the sets undergoing for intersection.</h6>
                <h6 class="mt-4 ml-5">For union <span class="text-primary">| </span> symbol is used.</h6>
                <h6 class="mt-4 ml-5">For intersection <span class="text-primary">&</span> symbol is used.

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">s1={10,20,30}</h6>
                    <h6  class="pl-5">s2={20,30,40,50}</h6>
                    <h6  class="pl-5">s3=s1 | s2</h6>
                    <h6  class="pl-5">s4=s1 & s2</h6>
                    <h6  class="pl-5">print(s3)</h6>
                    <h6  class="pl-5">print(s4)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{50, 20, 40, 10, 30}</h6>
                    <h6  class="pl-5">{20, 30}</h6>
                    </div>
                </div>

            <!--<div>
                <form action="">
                <a href="dictionary.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="comprehension.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="dictionary.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="comprehension.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>