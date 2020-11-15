<?php
    define("TITLE",'inheritance in python');
    define("DESCRIPTION",'explanation of inheritance in python');
    define("KEYWORD",'inheritance');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Inheritance in python</h3>
        <h6 class="mt-4 ml-5">The mechanism of deriving a new class from old class is called inheritance .</h6>
        <h3 style="text-decoration:underline;" class="mt-3  text-secondary">Types of inheritance</h3>
        <h4 style="text-decoration:underline;" class="mt-3  text-secondary">1. single inheritance</h4>
        <h6 class="mt-4 ml-5">If a class is derived from one base class, it is called single inheritance .</h6>
        <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Declaration of child class</h4>

        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class="ml-5 text-primary">class childclassname(parentclassname) :</h6>
        <h6 class="ml-5 text-primary"><span class="pl-5">members of child class</span></h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class father :</h6>
                    <h6  class="pl-5" ><span class="pl-5">sales=100</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("parent class instance method")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">@classmethod</span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def showsales(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("parent class ,class method")</span></h6>
                    <h6  class="pl-5" >class son(father) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def disp(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("child class instance method")</span></span></h6>
                    <h6  class="pl-5" >s=son()<span class="pl-5 text-primary"># child class object.</span></h6>
                    <h6  class="pl-5" >s.disp()</h6>
                    <h6  class="pl-5" >s.show()</h6>
                    <h6  class="pl-5" >s.showsales()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">child class instance method</h6>
                    <h6  class="pl-5">parent class instance method</h6>
                    <h6  class="pl-5">parent class ,class method</h6>
                    </div>
                </div>

                <h6 class="mt-4 ml-5">constructor of parent class is also inherited in subclass.</h6>
                <h6 class="mt-4 ml-5">Instance member(variable and method) are also inherited and can be 
                accessed by child class object.</h6>
                <h6 class="mt-4 ml-5">But if child class and parent class both have constructor of 
                same signature(name,number of parameters,type of parameter) then constructor of child class
                will replace contructor of parent class.</h6>

                <h4 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Accessing super class
                constructor in sub class</h4>
                <h6 class="mt-4 ml-5">using <span class="text-primary">super()</span> method super class constructor is 
                accessed.</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class father :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self ,m) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.money=m</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("father class constructor")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def show(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("parent class instance method")</span></span></h6>
                    <h6  class="pl-5" >class son(father) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self ,m ,j) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">super().__init__(m)</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">self.job=j</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("son class constructor")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def disp(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("son class instance method",self.money,
                    "job",self.job)</h6>
                    <h6  class="pl-5" >s=son(20000,'english')<span class="pl-5 text-primary"># child class object.</span></h6>
                    <h6  class="pl-5" >s.disp()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">father class constructor</h6>
                    <h6  class="pl-5">son class constructor</h6>
                    <h6  class="pl-5">son class instance method 20000 job english</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">2. multilevel inheritance</h4>
                <h6 class="mt-4 ml-5">In multilevel inheritance the class inherits the features of another derived class .</h6>

                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >class father :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("father class constructor")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def showf(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("parent class instance method")</span></span></h6>
                    <h6  class="pl-5" >class son(father) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">super().__init__()</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("son class constructor")</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5">def shows(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("son class instance method")</h6>

                    <h6  class="pl-5" >class grandson(son) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">def __init__(self) :</span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">super().__init__()</span></span></h6>
                    <h6  class="pl-5" ><span class="pl-5"><span class="pl-5">print("grandson class constructor")</span></span></h6>
                    <h6  class="pl-5" >g=grandson()<span class="pl-5 text-primary"># grandchild class object.</span></h6>
                    <h6  class="pl-5" >g.showf()</h6>
                    <h6  class="pl-5" >g.shows()</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">father class constructor</h6>
                    <h6  class="pl-5">son class constructor</h6>
                    <h6  class="pl-5">grandson class constructor</h6>
                    <h6  class="pl-5">parent class instance method</h6>
                    <h6  class="pl-5">son class instance method</h6>
                    </div>
                </div>

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">3. Hierarchical inheritance</h4>
                <h6 class="mt-4 ml-5">When multiple subclass are derived from single parent class then this 
                is called a hierarchical inheritance.</h6>
                <h6  class="pl-5" >syntax:</h6>
                <div class="text-primary">
                    <h6  class="pl-5" >class parentclass :</h6>
                    <h6  class="pl-5" ><span class="pl-5">members of parent class</span></h6>
                    <h6  class="pl-5" >class childclass_1(parentclass) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">members of first child class</span></h6>
                    <h6  class="pl-5" >class childclass_2(parentclass) :</h6>
                    <h6  class="pl-5" ><span class="pl-5">members of second child class</span></h6>
                </div>
                
                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">4. Multiple inheritance</h4>
                <h6 class="mt-4 ml-5">If a class is derived from more than one class then this 
                is called multiple inheritance.</h6>
                <h6  class="pl-5" >syntax:</h6>
                <div class="text-primary">
                    <h6  class="pl-5" >class parentclass_1 :</h6>
                    <h6  class="pl-5" ><span class="pl-5">members of parent class</span></h6>
                    <h6  class="pl-5" >class parentclass_2 :</h6>
                    <h6  class="pl-5" ><span class="pl-5">members of first child class</span></h6>
                    <h6  class="pl-5" >class childclass(parentclass_1 , parentclass_2) :</h6>
                    <h6  class="pl-5 mb-5" ><span class="pl-5">members of second child class</span></h6>
                </div>


            <!--<div >
                <form action="">
                    <a href="oopconcept.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="ducktyping.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="oopconcept.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="ducktyping.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>