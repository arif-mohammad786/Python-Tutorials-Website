<?php
    define("TITLE",'functions');
    define("DESCRIPTION",'functions  in python');
    define("KEYWORD",'functions');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Functions in python</h3>
            <h6 class="mt-4 ml-5">Function is a block of statements which is executed only when it is called.</h6>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">function definition</h4>
            <h6 class="mt-4 ml-5">function is defined using <span class="text-primary">def</span> keyword.</h6>
            <h6 class="mt-4 ml-5">Functions can return results also.</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5 text-success">def function_name(parameters if any) :</h6>
            <h6 class="mt-4 ml-5 text-success"><span class="ml-4">set of statements</span></h6>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">function call</h4>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5 text-success">function_name(arguments if any)</h6>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">arguments vs parameters</h4>
            <h6 class="mt-4 ml-5">Parameters are the values written in the parenthesis with function name 
            while defining a function .</h6>
            <h6 class="mt-4 ml-5">Arguments are the values passed while calling a function .</h6>

            <h6 class="mt-4 ml-5" style="text-decoration:underline;">Function to check palindrom of a word</h6>
            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">def is_palindrome(ch) :<span class="pl-4"># ch is paramener</span><br>
                    <span class="ml-4">
                    c=ch[-1 : :-1]<br>if c==ch :
                    </span><br>
                    <span class="ml-4">return "palindrome"
                    </span><br>
                    <span>return "not palindrome"</span>
                    </h6>
                    <h6 class="pl-5">pal=is_palindrome("apple")<span class="pl-4"># apple is argument</span></h6>
                    <h6 class="pl-5">print(pal)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">not palindrome</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">default parameters</h4>
                <h6 class="mt-4 ml-5">The parameters for which values are passed while function definition 
                are called as default parameters</h6>
                <h6 class="mt-4 ml-5">Generally same number of arguments must be passed in function call statement 
                as number of parameters are there in function definition.</h6>
                <h6 class="mt-4 ml-5">argument value for a default parameter can be skipped ,in that case 
                default value is considered for that parameter.</h6>
                <h6 class="mt-4 ml-5">Parameters right to a default parameter must be default.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">def fun(fname ,lname ,age=21) :</h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>print(f"your first name is {fname}")</h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>print(f"your last name is {lname}")</h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>print(f"your age is {age}")</h6>
                    <h6 class=" ml-5 ">fun("monish","yadav")<span class="ml-4"> # argument for age skipped</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">your first name is monish</h6>
                    <h6  class="pl-5">your last name is yadav</h6>
                    <h6  class="pl-5">your age is 21</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Variable scope</h4>
                <h6 class="mt-4 ml-5">Variable scope means accessibility of variable i.e where it can be 
                accessed where not .</h6>
                <h6 class="mt-4 ml-5">There are two scopes of a variable</h6>
                <ul>
                    <li>global</li>
                    <li>local</li>
                </ul>
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Global variables</h4>
                <h6 class="mt-4 ml-5">The variables which are declared outside function are called global variables.</h6>
                <h6 class="mt-4 ml-5"></h6>
                <h6 class="mt-4 ml-5">Global variables can be accessec inside and outside of functions(everywhere).</h6>
                <h6 class="mt-4 ml-5">A global variable can be created and used inside a function using
                <span class="text-primary">global</span> keyword.</h6>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Local variables</h4>
                <h6 class="mt-4 ml-5">The variables which are declared inside a function are called local variables.</h6>
                <h6 class="mt-4 ml-5">Local variables can only be used inside that function only.</h6>

                <h6 class="mt-4 ml-5">i.e<br>
                x=5<span class="ml-4"> # global variable</span></h6>
                <h6 class="ml-5">def fun() :</h6>
                <h6 class="ml-5"><span class="ml-4">x=7</span> <span class="ml-4"> # local variable</span></h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">x=5</h6>
                    <h6 class=" ml-5 ">def fun() :</h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>global x<span class="ml-4"># accessing global x</span></h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>x=7</h6>
                    <h6 class=" ml-5 "><span class="ml-5"></span>return x</h6>
                    <h6 class=" ml-5 ">print(fun())</h6>
                    <h6 class=" ml-5 ">print(x)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">7</h6>
                    <h6  class="pl-5">7</h6><span class="ml-4"># function call changed value of x</span>
                    </div>
                </div>

            <!--<div >
                <form action="">
                    <a href="loop.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="list.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="loop.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="list.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>