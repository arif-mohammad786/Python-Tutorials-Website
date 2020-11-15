<?php
    define("TITLE",'list in python');
    define("DESCRIPTION",'list data structure in python');
    define("KEYWORD",'list');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div  >
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">List in python</h3>
            <ul>
                <li>It is a data structure</li>
                <li>It is a ordered collection of items</li>
                <li>Any data type value can be stored in it</li>
                <li>it is created using  <spna class="text-primary">[ ]</span></li> 
                <li>Indexing and slicing can be done with list variable</li>
                <li>It is mutable (i.e elements in list can be modified)</li>
                <li>Duplicates are allowed.</li>
            </ul>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">numbers=[1 ,2 ,3 ,4]</h6>
                    <h6  class="pl-5">words=['word1', 'word2','word3']</h6>
                    <h6  class="pl-5">mixed=[1,2,4,'word1','word2']</h6>
                    <h6  class="pl-5">print(numbers)</h6>
                    <h6  class="pl-5">print(words)</h6>
                    <h6  class="pl-5">print(mixed)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[1, 2, 3, 4]</h6>
                    <h6  class="pl-5">['word1', 'word2', 'word3']</h6>
                    <h6  class="pl-5">[1, 2, 4, 'word1', 'word2']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Add data to list</h4>
                <h6 class="mt-4 ml-5">Using <span class="text-primary">append(item)</span> method.</h6>
                <h6 class="mt-4 ml-5">It adds the item as the last of list.</h6>
                <h6 class="mt-4 ml-5">syntax: list_name.append(item)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=[ ]<span class="ml-4"># empty list</span></h6>
                    <h6  class="pl-5">fruits.append('apple')</h6>
                    <h6  class="pl-5">fruits.append('mango')</h6>
                    <h6  class="pl-5">fruits.append('banana')</h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['apple', 'mango', 'banana']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">More methods to add data in list</h4>
                <h6 class="mt-4 ml-5">using <span class="text-primary">insert(index ,item)</span> method data can be 
                inserted at any index of list.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=[ ]<span class="ml-4"># empty list</span></h6>
                    <h6  class="pl-5">fruits.append('apple')</h6>
                    <h6  class="pl-5">fruits.append('mango')</h6>
                    <h6  class="pl-5">fruits.insert(1,'banana')<span class="ml-4"># banana at index 1</span></h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['apple', 'banana', 'mango']</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">Two lists can be merged to form a single list using 
                <span class="text-primary">extend()</span> method.</h6>
                <h6 class="mt-4 ml-5">list1.extend(list2)<br>
                items of both lists after merging are stored in list1.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">l1=[1,2,3,4]</h6>
                    <h6  class="pl-5">l2=[5,6]</h6>
                    <h6  class="pl-5">l1.extend(l2)</h6>
                    <h6  class="pl-5">print(l1)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[1, 2, 3, 4, 5, 6]</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Delete data from list</h4>
                <ul>
                    <li>Using <span class="text-primary">pop(index of item)</span> method</li>
                </ul>
                <h6 class="mt-4 ml-5">If index is not passed, by default it deletes last item of list and returns it. </h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">frt1=fruits.pop()</h6>
                    <h6  class="pl-5">print(frt1)</h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">banana</h6>
                    <h6  class="pl-5">['apple', 'mango']</h6>
                    </div>
                </div>

                <ul>
                    <li>Using <span class="text-primary">remove(item name)</span> method</li>
                </ul>
                <h6 class="mt-4 ml-5">It is used to delete item using its name. </h6>
                <h6 class="mt-4 ml-5">fruits.remove('banana')<br><br>
                It will delete banana from list.</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Some methods of list</h4>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">len() method</h4>
                <h6 class="mt-4 ml-5">It is used to count and return the number of items in list.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">len(list_name)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">len=len(fruits)</h6>
                    <h6  class="pl-5">print(len)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">3</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">sort() method</h4>
                <h6 class="mt-4 ml-5">It is used to sort the elements of list in ascending or alphabetical order .</h6>
                <h6 class="mt-4 ml-5">It affects original list.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">list_name.sort()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">fruits.sort()</h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['apple', 'banana', 'mango']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">sorted() method</h4>
                <h6 class="mt-4 ml-5">It is used to only print sorted list does not affects original list.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">print(sorted(list_name))</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">print(sorted(fruits))</h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['apple', 'banana', 'mango']</h6>
                    <h6  class="pl-5">['apple', 'mango', 'banana']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">copy() method</h4>
                <h6 class="mt-4 ml-5">It makes a copy of original list and returns it.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">list2=list1.copy()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">copy_list=fruits.copy()</h6>
                    <h6  class="pl-5">print(copy_list)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['apple', 'mango', 'banana']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">clear() method</h4>
                <h6 class="mt-4 ml-5">It is used to clear the list .</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">list.clear()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">fruits=['apple','mango','banana']</h6>
                    <h6  class="pl-5">fruits.clear()</h6>
                    <h6  class="pl-5">print(fruits)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[ ]</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">count() method</h4>
                <h6 class="mt-4 ml-5">It is used to count and return the number of occerence of an element in the list .</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">list.count(element)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6  style="text-decoration:underline;">Example:</h6>
                    <h6 >fruits=['apple','mango','banana','apple','apple']</h6>
                    <h6  >cnt=fruits.count('apple')</h6>
                    <h6  >print(cnt)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">3</h6>
                    </div>
                </div>

                
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">loop in list</h4>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">while loop</h4>
               
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="mt-4 ml-5">fruits=['orange','apple','pear','banana']</h6>
                    <h6 class=" ml-5">i=0</h6>
                    <h6 class="ml-5">while i<<span>len(fruits)</span> :</h6>
                    <h6 class="ml-5"><span class="ml-4"></span >print(fruits[i])</h6>
                    <h6 class="ml-5"><span class="ml-4"></span >i=i+1</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">orange</h6>
                    <h6  class="pl-5">apple</h6>
                    <h6  class="pl-5">pear</h6>
                    <h6  class="pl-5">banana</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">for loop</h4>
               
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="mt-4 ml-5">fruits=['orange','apple','pear','banana']</h6>
                    <h6 class=" ml-5">for i in fruits :</h6>
                    <h6 class="ml-5"><span class="ml-4"></span >print(i)</h6>
                    <h6 class="ml-5 " > # i will acquire next list item in every iteration.</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">orange</h6>
                    <h6  class="pl-5">apple</h6>
                    <h6  class="pl-5">pear</h6>
                    <h6  class="pl-5">banana</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">max() and min() function</h4>
                <h6 class=" ml-5">It is used to find and return the maximum and minimum element of list .</h6>
                <h6 class=" ml-5">syntax:</h6>
                <h6 class="ml-5">max(list)</h6>
                <h6 class="ml-5">min(list)</h6>

                <h4 class="ml-5 text-secondary" style="text-decoration:underline;">List inside list(2-D list)</h4>
                

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="ml-5">matrix=[[1,2,3],[4,5,6],[7,8,9]]</h6>
                    <h6 class="ml-5">for sublist in matrix :</h6>
                    <h6 class="ml-5"><span class="ml-4">for i in sublist :</span></h6>
                    <h6 class="ml-5"><span class="ml-4"><span class="ml-4">print(i)</span></span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">1</h6>
                    <h6  class="pl-5">2</h6>
                    <h6  class="pl-5">3</h6>
                    <h6  class="pl-5">4</h6>
                    <h6  class="pl-5">5</h6>
                    <h6  class="pl-5">6</h6>
                    <h6  class="pl-5">7</h6>
                    <h6  class="pl-5">8</h6>
                    <h6  class="pl-5">9</h6>
                
                    </div>
                </div>

                <h5 class=" ml-5">Accessing data in 2-d list</h5>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="ml-5">matrix=[[1,2,3],[4,5,6],[7,8,9]]</h6>
                    <h6 class="ml-5">print(matrix[1][1])</h6>
                    <h6 class="ml-5">print(matrix[2][0])</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">5</h6>
                    <h6  class="pl-5">7</h6>
                    </div>
                </div>


            <!--<div >
                <form action="">
                    <a href="loop.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="tuple.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="loop.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="tuple.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
