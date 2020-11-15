<?php
    define("TITLE",'Abstract class');
    define("DESCRIPTION",'explanation of abstract class in python');
    define("KEYWORD",'abstract class');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Abstract class</h3>
        <h6 class="mt-4 ml-5">A class derived from <span class="text-primary">ABC</span>class which belong to 
        abc module is known as abstract class.</h6>
        <h6 class="mt-4 ml-5">Abstract class can have abstract method and concrete method.</h6>
        <h6 class="mt-4 ml-5 text-primary">object of abstract class can not be created.It is only 
        inherited and its methods are defined in child class.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class="mt-4 ml-5">To create abstract class we need to import ABC class and abstractmethod decorator from abc module .</h6>
        <h6 class="mt-4 ml-5 text-primary">from abc import ABC ,abstractmethod</h6>
        <h6 class="mt-4 ml-5 text-primary">class classname(ABC) :</h6>
        <h6 class="text-primary ml-5"><span class="pl-5">body of class</span></h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Abstract method</h3>
        <h6 class="mt-4 ml-5">A abstract method is the method whose action(definition) is redefined in the child class.</h6>
        <h6 class="mt-4 ml-5">declare using @abstractmethod decorator.</h6>
        <h6 class="mt-4 ml-5">from abc import ABC ,abstractmethod</h6>
        <h6 class=" ml-5">class father(ABC) :</h6>
        <h6 class=" ml-5">@abstractmethod</h6>
        <h6 class=" ml-5">def disp(self) :</h6>
        <h6 class=" ml-5"><span class="pl-5">pass</span></h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Concrete method</h3>
        <h6 class="mt-4 ml-5">A method whose action is defined in the abstract class itself is called concrete method.</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >from abc import ABC ,abstractmethod</h6>
                    <h6  class="pl-5" >class parent :</h6>
                    <h6  class="pl-5" ><span class="pl-5">@abstractmethod</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">pass</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def disp(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("definition of concrete method")</span></span></h6>
                    <h6  class="pl-5" >class child(parent) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("definition of abstract method")</span></span></h6>
                    <h6  class="pl-5" >s=child()<span class="pl-5 text-primary"># child class object.</span></h6>
                    <h6  class="pl-5" >s.show()</h6>
                    <h6  class="pl-5" >s.disp()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">definition of abstract method</h6>
                    <h6  class="pl-5">definition of concrete method</h6>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Interface</h3>
                <h6 class="mt-4 ml-5 mb-5">An abstract class which contains only abstract method but not a single
                concrete method is an interface.</h6>


            <!--<div >
                <form action="">
                    <a href="overloadingriding.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="thread.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="overloadingriding.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="thread.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>