<?php
    define("TITLE",'file handling');
    define("DESCRIPTION",'explanation of file handling in python');
    define("KEYWORD",'file handling');
    include("../corepython/header.php");
    include("sidebar.php");
?>

<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print" >
    <div >
        <div class="mr-5">

        <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">File Handling</h3>

        <h6 class="mt-4 ml-5">Files are the named location on hard disk where we can store data permanently.
        Since RAM is volatile memory the data we use while executing a program get erased after the program stops execution.</h6>
        <h6 class="mt-4 ml-5">main two file operations are:</h6>
        <h6 class=" ml-5 text-primary">reading a file</h6>
        <h6 class="ml-5 text-primary">writing a file</h6>
        <h6 class="mt-4 ml-5">Before reading or writing we have to open the file.</h6>
        <h4 style="text-decoration:underline;" class="mt-3  text-secondary">Opening a file</h4>
        <h6 class="mt-4 ml-5"><span class="text-primary">open()</span> method is used to open a file.It takes two 
        required arguments filename and mode of opening in single or double quotes.</h6>
        <h6 class="mt-4 ml-5">It returns a pointer to the begining of the file.This is called file handler or file object.</h6>
        <h6 class="mt-4 ml-5">syntax:</h6>
        <h6 class="ml-5 text-primary">open(filename or path,mode)</h6>
        <h3 style="text-decoration:underline;" class="mt-3  text-secondary">Text File Modes</h3>
        <h6 class="mt-4 ml-5"><span class="text-primary">r</span> => reading mode,this is default mode i.e. if not
         specified file opens in read mode.For this file should exist.</h6>
         <h6 class="mt-4 ml-5"><span class="text-primary">w</span> => writing mode ,opens file for writing purpose
         and if file does not exists it creates the file.If file has some data it will overwrite it.</h6>
         <h6 class="mt-4 ml-5"><span class="text-primary">a</span> => append mode ,opens file in append mode that is 
         if there are some data it will not overwrite it ,it will start ahead of that content .</h6>
        
         <h6 class="mt-4 ml-5"><span class="text-primary">close() </span> is used to close file .After closing file 
         is not in memory.</h6>

         <h4 style="text-decoration:underline;" class="mt-3  text-secondary">File object variables</h4>

        <h6 class="mt-4 ml-5"><span class="text-primary">name </span>=> It shows the name of file .</h6>
        <h6 class=" ml-5">fileobject.name</h6>

        <h6 class="mt-4 ml-5"><span class="text-primary">mode </span>=> It shows the mode of file .</h6>
        <h6 class=" ml-5">fileobject.mode</h6>

        <h6 class="mt-4 ml-5"><span class="text-primary">closed </span>=> It returns True if file is closed else False .</h6>
        <h6 class=" ml-5 mb-5">fileobject.closed</h6>



            <!--<div >
                <form action="" class="mt-5">
                    <a href="daemonthread.php" class="btn btn-primary mb-3"style="margin-left:280px;" >PREV</a>
                    <a href="readfile.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
                </form>
            </div>-->

        </div>
    </div> 

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="daemonthread.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="readfile.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div> 

</div>
    


<?php
    include("../corepython/footer.php");
?>