<?php
    define("TITLE",'tuple in python');
    define("DESCRIPTION",'tuple data structure in python');
    define("KEYWORD",'tuple');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div  >
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Tuple in python</h3>
            <ul>
                <li>It is a data structure</li>
                <li>It is a ordered collection of items</li>
                <li>Any data type value can be stored in it</li>
                <li>it is created using  <spna class="text-primary">( )</span></li> 
                <li>Indexing and slicing can be done with tuple variable</li>
                <li>It is immutable (i.e elements in tuple can not be modified)</li>
                <li>Duplicates are allowed.</li>
            </ul>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Loops with tuple</h4>
            <h6 class="mt-4 ml-5">Looping works same way as it works for list.</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">mixed=(1 ,2.5 ,3 ,4.0)</h6>
                    <h6  class="pl-5">for i in mixed :</h6>
                    <h6  class="pl-5"><span class="ml-4">print(i)</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">1</h6>
                    <h6  class="pl-5">2.5</h6>
                    <h6  class="pl-5">3</h6>
                    <h6  class="pl-5">4.0</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Tuple with one element</h4>
                <h6 class="mt-4 ml-5">To make a tuple of one element we need to placea comma afetr the element 
                between the parenthesis.</h6>
                <h6 class=" ml-5">nums=(1)<span class="ml-4 text-danger"># error :not a tuple</span></h6>
                <h6 class=" ml-5">nums=(1 ,)<span class="ml-4 text-success">#  a tuple</span></h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Tuple without parenthesis</h4>
                <h6 class="mt-4 ml-5">drive="bike","car","truck"</h6>
                <h6 class=" ml-5 text-success"># drive is a tuple</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Tuple Unpacking</h4>
                <h6 class="mt-4 ml-5">Tuple unpacking means assigning tuple element to seperate variables.</h6>
                <h6 class=" ml-5">Number of assigning variables must be same as number of elelments 
                in the tuple.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">sch=("apple","mango","orange")</h6>
                    <h6  class="pl-5">a,b,c=(sch)</h6>
                    <h6  class="pl-5">print(a)</h6>
                    <h6  class="pl-5">print(b)</h6>
                    <h6  class="pl-5">print(c)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">apple</h6>
                    <h6  class="pl-5">mango</h6>
                    <h6  class="pl-5">orange</h6>
                 
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">List inside Tuple</h4>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fav=('south',['tokyo','landscape'])</h6>
                    <h6  class="pl-5">p=fav[1].pop()</h6>
                    <h6  class="pl-5">print(p)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">landscape</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Function returning two values</h4>
                <h6 class="mt-4 ml-5">Values are returned in tuple form.</h6>
                <h6 class=" ml-5">To get values we need to store result in two separate variables.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">def fun(int1 ,int2) :</h6>
                    <h6  class="pl-5"><span class="ml-4">add=int1 + int2</span></h6>
                    <h6  class="pl-5"><span class="ml-4">mul=int1 * int2</span></h6>
                    <h6  class="pl-5"><span class="ml-4">return add ,mul</span></h6>
                    <h6  class="pl-5">add,mul=(fun(5,6))<span class="ml-4"> # tuple unpacking</span></h6>
                    <h6  class="pl-5">print(add)</h6>
                    <h6  class="pl-5">print(mul)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">11</h6>
                    <h6  class="pl-5">30</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Tuple using range() function</h4>
                <h6 class=" ml-5"><span class="text-primary">type()</span> method is used to check the data type
                 of variable</h6>

                 <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">nums=tuple(range(1,11))</h6>
                    <h6  class="pl-5">print(type(nums))</h6>
                    <h6  class="pl-5">print(nums)</h6>
                    <h6  class="pl-5">nums=list(nums)</h6>
                    <h6  class="pl-5">print(type(nums))</h6>
                    <h6  class="pl-5">print(nums)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">class 'tuple'</h6>
                    <h6  class="pl-5">(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)</h6>
                    <h6  class="pl-5">class 'list'</h6>
                    <h6  class="pl-5">[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]</h6>
                    </div>
                </div>



            <!--<div >
                <form action="">
                    <a href="list.php" class="btn btn-primary mb-3 "style="margin-left:280px;" >PREV</a>
                    <a href="dictionary.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="list.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="dictionary.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
