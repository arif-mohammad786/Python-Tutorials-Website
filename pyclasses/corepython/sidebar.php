    <!-- container -->
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
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="print method"){echo 'activesidebar';} ?>" href="printmethod.php" style="color:black;">1.  Print Method</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="EscapeSequences"){echo 'activesidebar';} ?>" href="escapesequence.php" style="color:black;">2.  Escape Sequences</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="comments"){echo 'activesidebar';} ?>" href="comments.php" style="color:black;">3.  Comments Statements</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="Escape character as normal text"){echo 'activesidebar';} ?>" href="escapecharnormaltext.php" style="color:black;">4.  Escape Characters as Normal Text</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="python as calci"){echo 'activesidebar';} ?>" href="pythonascalci.php" style="color:black;">5.  Python Used as Calculator</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="variables"){echo 'activesidebar';} ?>" href="variables.php" style="color:black;">6.  Variables</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="string concatenation"){echo 'activesidebar';} ?>" href="stringconcatenation.php" style="color:black;">7.  String Concatenation</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="input from user"){echo 'activesidebar';} ?>" href="inputfromuser.php" style="color:black;">8.  Input From User</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="Add two numbers"){echo 'activesidebar';} ?>" href="addtwonums.php" style="color:black;">9.  Program to add Two Numbers</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="multiple inputs"){echo 'activesidebar';} ?>" href="multipleinput.php" style="color:black;">10.  Take Multiple Inputs</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="String Formatting"){echo 'activesidebar';} ?>" href="stringformatting.php" style="color:black;">11.  String Formatting</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="average of three numbers"){echo 'activesidebar';} ?>" href="pgmtogetavg.php" style="color:black;">12.  Program To Calculate Average</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="String indexing"){echo 'activesidebar';} ?>" href="stringindexing.php" style="color:black;">13.  String Indexing</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="String Slicing"){echo 'activesidebar';} ?>" href="stringslicing.php" style="color:black;">14.  String Slicing</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr  <?php if(TITLE=="String Methods"){echo 'activesidebar';} ?>" href="stringmethods.php" style="color:black;">15.  String Methods</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="If Else statement"){echo 'activesidebar';} ?>" href="ifelse.php" style="color:black;">16.  if else statement</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="and or operators"){echo 'activesidebar';} ?>" href="andoroperator.php" style="color:black;">17.  and or operators</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="in keyword"){echo 'activesidebar';} ?>" href="inkeyword.php" style="color:black;">18.  in keyword</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="loop in python"){echo 'activesidebar';} ?>" href="loop.php" style="color:black;">19.  loop in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="functions"){echo 'activesidebar';} ?>" href="function.php" style="color:black;">20.  Functions in python </a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="list in python"){echo 'activesidebar';} ?>" href="list.php" style="color:black;">21.  List in python </a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="tuple in python"){echo 'activesidebar';} ?>" href="tuple.php" style="color:black;">22.  Tuple in python </a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="dictionary in python"){echo 'activesidebar';} ?>" href="dictionary.php" style="color:black;">23.  Dictionary in python </a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="sets in python"){echo 'activesidebar';} ?>" href="sets.php" style="color:black;">24.  Sets in python </a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="comprehension"){echo 'activesidebar';} ?>" href="comprehension.php" style="color:black;">25.  Comprehension in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="*args in python"){echo 'activesidebar';} ?>" href="args.php" style="color:black;">26.  *args in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="**kwargs in python"){echo 'activesidebar';} ?>" href="kwargs.php" style="color:black;">27.  **kwargs in python</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="lambda expression"){echo 'activesidebar';} ?>" href="lambdaexp.php" style="color:black;">28.  Lambda Expression</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="enumerate and map function"){echo 'activesidebar';} ?>" href="enumeratemap.php "style="color:black;">29.  Enumerate and Map functions</a></li>
                        <li class="nav-item "><a class="nav-link  font-weight-bold hvr <?php if(TITLE=="filter and zip function"){echo 'activesidebar';} ?>" href="filterzip.php "style="color:black;">30.  Filter and zip functions</a></li>


                    </ul>
                </div>
            </nav>  <!-- end of side bar-->