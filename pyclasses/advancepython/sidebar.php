    <!--  container -->
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row"> 
     <style>
        @media (max-width:1200px){
            #sidebar{
                position:static;
            
            }
            
        }
        @media (min-width:1201px){
            #sidebar{
                position:fixed;
            }
           
        }
     </style>
        <!-- start side bar -->
               
            <nav class="col-xl-3 bg-light sidebar py-5 d-print-none mt-0 shadow-lg" > 
                <button class="btn btn-primary " id="checkbtn" onclick="myFunction()" style="display:none;" >
                    <i class="fas fa-bars"></i>
                </button> 

                <div class="sidebar-sticky " style="height:400px;overflow:auto;"id="sidebar">
                    <ul class="nav flex-column "  >
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="oop concept in python"){echo 'activesidebar';} ?>" href="oopconcept.php" style="color:black;">1.  OOP Concept in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="inheritance in python"){echo 'activesidebar';} ?>" href="inheritance.php" style="color:black;">2.  Inheritance in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="duck typing in python"){echo 'activesidebar';} ?>" href="ducktyping.php" style="color:black;">3.  Duck Typing in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="strong typing in python"){echo 'activesidebar';} ?>" href="strongtyping.php" style="color:black;">4.  Strong Typing in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="method overloading and overriding"){echo 'activesidebar';} ?>" href="overloadingriding.php" style="color:black;">5.Method overloading & overriding</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="Abstract class"){echo 'activesidebar';} ?>" href="abstractclass.php" style="color:black;">6.  Abstract class</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="thread concept"){echo 'activesidebar';} ?>" href="thread.php" style="color:black;">7.  Thread Concept</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="thread creation"){echo 'activesidebar';} ?>" href="threadcreation.php" style="color:black;">8.  Thread Creation</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="race condition in threading"){echo 'activesidebar';} ?>" href="racecondition.php" style="color:black;">9.  Race condition in threading</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="daemon thread in python"){echo 'activesidebar';} ?>" href="daemonthread.php" style="color:black;">10.  Daemon Thread</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="file handling"){echo 'activesidebar';} ?>" href="filehandling.php" style="color:black;">11.  File Handling</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="read file in python"){echo 'activesidebar';} ?>" href="readfile.php" style="color:black;">12.  Read file in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="writeing into file in python"){echo 'activesidebar';} ?>" href="writefile.php" style="color:black;">13.  writing into file in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="Exception Handling"){echo 'activesidebar';} ?>" href="exceptionhandling.php" style="color:black;">14.  Exception Handling</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="database in python"){echo 'activesidebar';} ?>" href="database.php" style="color:black;">15.  Database in python</a></li>

                       


                    </ul>
                </div>
            </nav>  <!-- end of side bar-->