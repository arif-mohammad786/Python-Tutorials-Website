<?php
    define("TITLE",'String Methods');
    define("DESCRIPTION",'important and useful string methods in python');
    define("KEYWORD",'string method');
    include("header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div>
        <div class="mr-5">

            
            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">String Methods</h3>
            <h6 class="mt-4 ml-5" style="text-decoration:underline;">In python strings are immutable means any string method will not 
            modify original string. It will just return modified string that can be stored in another 
            variable. </h6>
            <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">len() Method</h4>
            <h6 class="mt-4 ml-5">It returns the length (number of characters) of any string.</h6>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="mt-4 ml-5">len(string or variable)</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">print(len("london"))</h6>
                    <h6  class="pl-5">name="ajay singh"</h6>
                    <h6  class="pl-5">print(len(name))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">6</h6>
                    <h6  class="pl-5">10<span style="color:black;" class="pl-4">spaces are also taken as characters</span></h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">lower() & upper() Methods</h4>
                <h6 class="mt-4 ml-5">It returns the lower case and upper case of given string in the method.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable.lower()</h6>
                <h6 class="mt-4 ml-5">variable.upper()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name="LonDon"</h6>
                    <h6  class="pl-5">print(name.lower())</h6>
                    <h6  class="pl-5">print(name.upper())</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">london</h6>
                    <h6  class="pl-5">LONDON</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">title() Method</h4>
                <h6 class="mt-4 ml-5">It returns the given string with first character in uppercase and rest in lower case.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable.title()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">name="london"</h6>
                    <h6  class="pl-5">print(name.title())</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">London</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">count() Method</h4>
                <h6 class="mt-4 ml-5">It returns the count of passed character in the string.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable.count(string or character)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">ch="success"</h6>
                    <h6  class="pl-5">print(ch.count('c'))</h6>
                    <h6  class="pl-5">print(ch.count('cc'))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">2</h6>
                    <h6  class="pl-5">1</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">strip() Method</h4>
                <h6 class="mt-4 ml-5">It is used to remove spaces to the left and right of string.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable.strip()</h6>
                <h6 class="mt-4 ml-5">lstrip() and rstrip() methods are used to remove left and right spaces of 
                the string respectively.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <pre><h6 class="pl-5 text-success font-weight-bold">ch="    geekyshows    "</h6></pre>
                    <h6  class="pl-5">print(ch.lstrip())<span class="pl-4"> # removes only left spaces</span></h6>
                    <h6  class="pl-5">print(ch.rstrip())<span class="pl-4"> # removes only right spaces</span></h6>
                    <h6  class="pl-5">print(ch.strip())<span class="pl-4"> # removes both left and right spaces</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">geekyshows</h6>
                    <pre><h6  class="pl-5 text-success font-weight-bold">    geekyshows</h6></pre>
                    <h6  class="pl-5">geekyshows</h6>
                    </div>
                </div>

                
                <h4 style="text-decoration:underline;" class="mt-3 text-secondary text-underline;">replace() Method</h4>
                <h6 class="mt-4 ml-5">It is used to replace a word or character with aothe word or character in a string.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">variable.replace("to be replaced" , "replacing value")</h6>
                <h6 class="mt-4 ml-5">returns a new string with replaced values.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6 class="pl-5">ch="she is a very good dancer"</h6>
                    <h6  class="pl-5">print(ch.replace(" " , "_"))<span class="pl-4"> # replacing all space with underscore</span></h6>
                    <h6  class="pl-5">print(ch.replace("is" , "was"))<span class="pl-4"> # replacing all "is" with "was"</span></h6>
                    <h6  class="pl-5">print(ch.replace(" " , "_" ,1))<span class="pl-4"> # replacing only first space</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">she_is_a_very_good_dancer</h6>
                    <h6  class="pl-5">she was a very good dancer</h6>
                    <h6  class="pl-5">she_is a very good dancer</h6>
                    </div>
                </div>


            <!--<div >
                <form action="">
                    <a href="stringslicing.php" class="btn btn-primary mb-3" style="margin-left:280px;">PREV</a>
                    <a href="ifelse.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="stringslicing.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="ifelse.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>
    


<?php
    include("footer.php");
?>
