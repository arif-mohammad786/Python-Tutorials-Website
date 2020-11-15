<?php
    define("TITLE",'oop concept in python');
    define("DESCRIPTION",'explanation of object oriented concept in python');
    define("KEYWORD",'object oriented concept');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">OOP Concept</h3>
        <h6 class="mt-4 ml-5">Python is an object oriented programming language .It means almost everything in python 
        can be considered as objects and classes .</h6>
        <h6 class="mt-4 ml-5">Major oop concepts are :</h6>
        <ul>
        <li class=" ml-5"><h6 class="mt-4 ">object</h6></li>
        <li class=" ml-5"><h6 >class</h6></li>
        <li class=" ml-5"><h6 >Method</h6></li>
        <li class=" ml-5"> <h6 >Inheritance</h6></li>
        <li class=" ml-5"><h6 >Polymorphism</h6></li>
        <li class=" ml-5"><h6 >Data Abstraction</h6></li>
        <li class=" ml-5"><h6 >Encapsulation</h6></li>
        </ul>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">object</h3>
        <h6 class="mt-4 ml-5">objects are real world entities which have attributes and methods.
        Amost everything in python is an object.</h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">class</h3>
        <h6 class="mt-4 ml-5">class can be defined as collection of objects which have attributes and methods 
        for their objects. </h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Methods</h3>
        <h6 class="mt-4 ml-5">Methods are the functions associated with objects of any class to 
        perform specific task. In python every class can have methods that is used by their objects.</h6>

        
        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Inheritance</h3>
        <h6 class="mt-4 ml-5">Inheritance specifies that the class created using another class will
        have all the attributes and methods of parent class.</h6>
        <h6 class="mt-4 ml-5">The class used to create other class is known as super/parent class.</h6>
        <h6 class="mt-4 ml-5">The class which is created using another class is known as sub/child class.</h6>
        <h6 class="mt-4 ml-5">Because of inheritance code resuablity increases.</h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Polymorphism</h3>
        <h6 class="mt-4 ml-5">Polymorphism defines the methods that have same name as method in parent class.<br>
        Since child clsss inherits methods of parent class it is possible to modify the method in child class that 
        is inherited from parent class.</h6>

        
        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Data Abstraction</h3>
        <h6 class="mt-4 ml-5">It is the process of hiding real implementation of an application from user 
        and showing how to use it.</h6>

        
        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Encapsulation</h3>
        <h6 class="mt-4 ml-5">It is wrapping up of data and method in single unit .It is used to protect 
        the data from being getting accidently changed.</h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Creation of class</h3>
        <h6 class="mt-4 ml-5">class is created using <span class="text-primary">class</span> keyword.</h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">__init__() method</h3>
        <h6 class="mt-4 ml-5">__init__() method is constructor of class which is used to initialize the 
        class attributes.</h6>
        <h6 class="mt-4 ml-5">It is called autometically when object of the class is created.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class=" ml-5 text-primary">__init__(self ,parameters) :</h6>
        <h6 class=" ml-5 text-primary"><span class="pl-5">body of constructor</span></h6>
        <h6 class=" ml-5"><span class="text-primary">self</span> refers to current object.</h6>

        <h3 style="text-decoration:underline;" class="mt-3 text-secondary">object creation</h3>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class="ml-5 text-primary">object_name=class_name(arguments)</h6>
        
        <h6 class="mt-4 ml-5">class syntax:</h6>
        <div class="text-primary">
        <h6 class=" ml-5">class classname(Object) :<span class="pl-5">#  Object is optional .</span></h6> 
        <h6 class=" ml-5"><span class="pl-5">def __init__(self) :</span></h6>
        <h6 class=" ml-5"><span class="pl-5"><span class="pl-5">self.variablename=value</span></span></h6>
        <h6 class=" ml-5"><span class="pl-5"><span class="pl-5">self.variablename=value</span></span></h6>
        <h6 class=" ml-5"><span class="pl-5">def method_name(self) :</span></h6>
        <h6 class=" ml-5"><span class="pl-5"><span class="pl-5">body of method</span></span></h6>
        </div>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class person :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self ,fname ,lname ,age) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.first_name = fname</span></span><span class="pl-5 text-primary"># creation of instance variables</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.last_name = lname</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.age = age</span></span></h6>
                    <h6 class="pl-5">p=person('raj' ,'humar' ,20)<span class="pl-5 text-primary"> #  object creation</span></h6>
                    <h6 class="pl-5">print(p.first_name)<span class="pl-5 text-primary"># accessing instance variables</span></h6>
                    <h6 class="pl-5">print(p.last_name)</h6>
                    <h6 class="pl-5">print(p.age)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">raj</h6>
                    <h6  class="pl-5">kumar</h6>
                    <h6  class="pl-5">20</h6>
                    </div>
                </div>


                <h3 style="text-decoration:underline;" class="mt-3 text-secondary">Instance methods of class</h3>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5 text-primary">def function_name(self ,parameters) :</h6>
                <h6 class="ml-5 text-primary"><span class="pl-5">body of function</span></h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class person :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self ,fname ,lname ,age) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.first_name = fname</span></span><span class="pl-5 text-primary"># creation of instance variables</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.last_name = lname</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.age = age</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def full_name(self) :</span><span class="pl-5 text-primary"># defining instance method</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">return f"{self.first_name} {self.last_name}"</span></span></h6>
                    <h6 class="pl-5">p=person('raj' ,'humar' ,20)<span class="pl-5 text-primary"> #  object creation</span></h6>
                    <h6 class="pl-5">print(p.full_name)<span class="pl-5 text-primary"># accessing instance method</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">raj kumar</h6>
                    </div>
                </div>
               

                <h3 style="text-decoration:underline;" class="mt-3 text-secondary">instance and class variable(static)</h3>
                <h6 class="mt-4 ml-5"> Instance variable are the variables that are created separately for each 
                object of class.</h6>
                <h6 class="mt-4 ml-5">Class variables are common for all the objects of class .
                class variables are accessed using class name as <span class="text-primary">classname.variablename</span></h6>
                <h6 class="mt-4 ml-5">If a class variable is modified with class name then it will be reflected 
                in all the objects. but if class variable is modified with object name it will be reflected  in that object only.</h6>
                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class circle :</h6>
                    <h6  class="pl-5" ><span class="pl-5">pi=3.14<span class="pl-5 text-primary"># class variable</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self ,radius) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.radius=radius</span></span><span class="pl-5 text-primary"># creation of instance variables</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def circumference(self) :</span><span class="pl-5 text-primary"># defining instance method</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">return 2*circle.pi*self.radius</span></span></h6>
                    <h6 class="pl-5">c=circle(4)<span class="pl-5 text-primary"> #  object creation</span></h6>
                    <h6 class="pl-5">print(c.circumference())<span class="pl-5 text-primary"># accessing instance method</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">25.12</h6>
                    </div>
                </div>

                <h3 style="text-decoration:underline;" class="mt-3 text-secondary">class method</h3>
                <h6 class="mt-4 ml-5">class method acts upon the class variable or static variable.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class=" ml-5 text-primary">@classmethod</h6>
                <h6 class="ml-5 text-primary">def methodname(cls,parameters)</h6>
                <h6 class="mt-4 ml-5 text-primary"><span class="pl-5">method body</span></h6>

                <h6 class="mt-4 ml-5">accessing:</h6>
                <h6 class="ml-5 text-primary">classname.methodname()</h6>

                <!--<div >
                    <form action="">
                        <a href="inheritance.php" class="btn btn-primary mb-3"style="margin-left:280px;" >NEXT</a>
                    </form>
                </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="inheritance.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>