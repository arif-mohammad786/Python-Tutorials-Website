<?php
    define("TITLE",'writeing into file in python');
    define("DESCRIPTION",'explanation of writing data into file  in python');
    define("KEYWORD",'file writing');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Writing data into file</h3>

        <h6 class="mt-4 ml-5">To write data into file we can use <span class="text-primary">write()</span> method.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class=" ml-5 text-primary">fileobject.write(string)</h6>

                <h5 class=" ml-5 text-secondary" style="text-decoration:underline;">Writing data in write mode:</h5>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","w")</h6>
                    <h6  class="pl-5" >f.write("hello world")</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    </div>
                </div> 

                <h5 class=" ml-5 text-secondary" style="text-decoration:underline;">Writing data in append mode:</h5>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","a")</h6>
                    <h6  class="pl-5" >f.write("hello world")</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    <h6  class="pl-5" style="color:black;text-decoration:underline;" ># Difference in both modes can be 
                    seen in file i.e In write mode existing content of file will ne overwitten but in append mode 
                    it will not overwrite.</h6>
                    </div>
                </div> 

                <h5 class=" ml-5 text-secondary" style="text-decoration:underline;">writelines()  method</h5>
                <h6 class="mt-4 ml-5">This method can be used to write the content of list/tuple/set in the file.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="ml-5 ">fileobject.writelines(group of string)</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >lst=['ramesh','mukesh','sahil']</h6>
                    <h6  class="pl-5" >f=open("filename.txt","w")</h6>
                    <h6  class="pl-5" >f.writelines(lst)</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    </div>
                </div> 

            <!--<div >
                <form action="" class="mt-5">
                    <a href="readfile.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="exceptionhandling.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="readfile.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="exceptionhandling.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>