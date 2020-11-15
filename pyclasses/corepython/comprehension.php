<?php
    define("TITLE",'comprehension');
    define("DESCRIPTION",'comprehension in python');
    define("KEYWORD",'comprehension');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">comprehension</h3>
            <h6 class="mt-4 ml-5">Comprehension is short way to create a sequence (list,tuple,dictionary)
            from a existing sequence.</h6>
            <h3 style="text-decoration:underline;" class="mt-3  text-secondary">List Comprehension</h3>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="text-primary ml-5">new_list=[output_exp for var in input_list if(var satisfying condition)]</h6>
            <h6 class="ml-5">There may or may not be for loop in the expression.</h6>
            <h4 class="mt-4 ml-5" style="text-decoration:underline;">List comprehension using <span class="text-primary"> range()</span> method</h4>
            

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" style="color:black;"> #To make list of square of numbers from 1 to 10.</h6>
                    <h6  class="pl-5">num=[i*i for i in range(1,11)]</h6>
                    <h6  class="pl-5">print(type(num))</h6>
                    <h6  class="pl-5">print(num)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">class 'list'</h6>
                    <h6  class="pl-5">[1, 4, 9, 16, 25, 36, 49, 64, 81, 100]</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5" style="text-decoration:underline;">List comprehension with <span class="text-primary"> if </span> statement </h4>
                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >l=['a',1,2,4.0,'apple']</h6>
                    <h6  class="pl-5" > def fun(l) :</h6>
                    <h6  class="pl-5"><span class="pl-4">return [str(i) for i in l if type(i)==int or type(i)==float]</span></h6>
                    <h6  class="pl-5">new_list=fun(l)</h6>
                    <h6  class="pl-5">print(new_list)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">['1', '2', '4.0']</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5" style="text-decoration:underline;">List comprehension with <span class="text-primary"> if-else </span> statement </h4>
                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >num=[1,2,3,4,5,6,7]</h6>
                    <h6  class="pl-5" >new_list=[i*2 if(i%2==0) else -i for i in num]</h6>
                    <h6  class="pl-5">print(new_list)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[-1, 4, -3, 8, -5, 12, -7]</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5" style="text-decoration:underline;">Nested list comprehension</h4>
                <h6 class="mt-4 ml-5">List comprehension inside list comprehension.</h6>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >l=[[i for i in range(1,4)] for j in range(0,3)]</h6>
                    <h6  class="pl-5" >print(l)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">[[1, 2, 3], [1, 2, 3], [1, 2, 3]]</h6>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3  text-secondary">Dictionary Comprehension</h3>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="text-primary ml-5">output_dict={output_exp as key : output_exp as value for var in iterable if(condition)}</h6>
                <h6 class=" mt-4 ml-5" style="text-decoration:underline;"> To print square of number from 1 to 5 using dictionary comprehension</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >square={num : num**2 for num in range(1,6)}</h6>
                    <h6  class="pl-5" >for key ,value in square.items() :</h6>
                    <h6  class="pl-5" ><span class="pl-4">print(f"square of {key} is {value}"")</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">square of 1 is 1</h6>
                    <h6  class="pl-5">square of 2 is 4</h6>
                    <h6  class="pl-5">square of 3 is 9</h6>
                    <h6  class="pl-5">square of 4 is 16</h6>
                    <h6  class="pl-5">square of 5 is 25</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5" style="text-decoration:underline;">Dictionary comprehension with <span class="text-primary"> if-else </span> statement </h4>
                <h6 class="mt-4 ml-5" style="text-decoration:underline;">To check the number in range 1 to 10 are odd or even</h6>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >odd_even={i : ('even' if i%2==0 else 'odd') for i in range(1,11)}</h6>
                    <h6  class="pl-5" >print(odd_even)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{1: 'odd', 2: 'even', 3: 'odd', 4: 'even', 5: 'odd', 6: 'even', 7: 'odd', 8: 'even', 9: 'odd', 10: 'even'}</h6>
                    </div>
                </div>


                <h3 style="text-decoration:underline;" class="mt-3  text-secondary">Set Comprehension</h3>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="text-primary ml-5">output_set={output_exp  for var in iterable if(condition)}</h6>
                <h6 class=" mt-4 ml-5" style="text-decoration:underline;"> To print cube of number from 1 to 10 using dictionary comprehension</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >s={k**2 for k in range(1,11)}</h6>
                    <h6  class="pl-5" >print(s)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{64, 1, 4, 36, 100, 9, 16, 49, 81, 25}</h6>
                    <h6 class="pl-5" style="text-decoration:underline;color:black;"> #  Since set is unordered datastructure 
                it can be in any order.</h6>
                    </div>
                </div>
                


            <!--<div>
                <form action="">
                <a href="sets.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="args.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="sets.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="args.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>
