<?php
    define("TITLE",'read file in python');
    define("DESCRIPTION",'reading a file in python');
    define("KEYWORD",'file reading');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Reading data from file</h3>

        <h6 class="mt-4 ml-5">To read a file we can use <span class="text-primary">read()</span> method.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class=" ml-5">fileobject.read(size)</h6>
        <h6 class=" ml-5">size is number of bytes to be read,if not mentioned whole content will be read.</h6>

                <h4 class=" ml-5 text-secondary" style="text-decoration:underline;">Reading whole file:</h4>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","r")</h6>
                    <h6  class="pl-5" >print(f.read())</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    </div>
                </div>

                <h4 class=" ml-5 text-secondary" style="text-decoration:underline;">Reading first 8 bytes of file:</h4>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","r")</h6>
                    <h6  class="pl-5" >print(f.read(8))</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    </div>
                </div>  

                <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Reading line by line</h4>
                <h6 class=" ml-5" ><span class="text-primary">readline()</span> method is used to read single 
                line from file.</h6>

                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class=" ml-5">fileobject.readline()</h6>

                <h4 class=" ml-5 text-secondary" style="text-decoration:underline;">Reading first line of file:</h4>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","r")</h6>
                    <h6  class="pl-5" >print(f.readline())</h6>
                    <h6  class="pl-5" >f.close()</h6>
                    </div>
                </div> 

                <h4 class=" ml-5 text-secondary" style="text-decoration:underline;">Reading whole file using loop:</h4>
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5" >f=open("filename.txt","r")</h6>
                    <h6  class="pl-5" >for line in f :</h6>
                    <h6  class="pl-5" ><span class="pl-5">print(line)</span></h6>
                    <h6  class="pl-5" >f.close()</h6>
                    <h6  class="pl-5 text-primary" ># Here variable line is pointing to next line of file 
                    in every next iteration.</h6>
                    </div>
                </div> 

                <h6 class=" ml-5" ><span class="text-primary">tell()</span> => It is used to get the current 
                position of the file cursor from begining of file .</h6>
                <h6 class=" ml-5" >syntax:</h6>
                <h6 class=" ml-5" >fileobject.tell()</h6>

                <h6 class=" ml-5" ><span class="text-primary">seek()</span> => It is used to move the cursor position 
                to particular position .</h6>
                <h6 class=" ml-5" >syntax:</h6>
                <h6 class=" ml-5" >fileobject.seek(position)</h6>
                <h6 class=" ml-5 mb-5" >position is considered from begining of file .</h6>


            <!--<div >
                <form action="" class="mt-5">
                    <a href="filehandling.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="writefile.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="filehandling.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="writefile.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>