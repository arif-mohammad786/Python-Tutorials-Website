<?php
    define("TITLE",'dictionary in python');
    define("DESCRIPTION",'dictionary data structure in python');
    define("KEYWORD",'dictionary');
    include("header.php");
    include("sidebar.php");
?>
<div class="col-xl-7  mt-5 offset-1 scroller position-relative shadow-lg" id="print">
    <div >
        <div class="mr-5">

            <h3 style="text-decoration:underline;" class="mt-3 text-center text-secondary">Dictionary in python</h3>

            <ul>
                <li>It is a data structure</li>
                <li>It is a unordered collection of items</li>
                <li>Items are stored in key value pair.</li>
                <li>Any data type value can be stored in it</li>
                <li>it is created using  <spna class="text-primary">{ }</span></li> 
                <li>Indexing and slicing can not be done with dictionary variable</li>
                <li>It is mutable (i.e elements in dictionary can be modified)</li>
                <li>Duplicates are not allowed</li>
            </ul>

            <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Creation of dictionary</h4>
            <h6 class="mt-4 ml-5">syntax:</h6>
            <h6 class="ml-5">variable={key1 : value1 , key2 : value2 ,-----}</h6>
            <h6 class="ml-5">variable=dict(key1 = value1 , key2 = value2 ,---)</h6>

            <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user1={'name': 'raj' ,'age' : 20}</h6>
                    <h6  class="pl-5">user2=dict(name ="raju" ,age =21)</h6>
                    <h6  class="pl-5">print(type(user1))</h6>
                    <h6  class="pl-5">print(user1)</h6>
                    <h6  class="pl-5">print(user2)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">class 'dict'</h6>
                    <h6  class="pl-5">{'name': 'raj', 'age': 20}</h6>
                    <h6 class="pl-5">{'name': 'raju', 'age': 21}</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Accessing dictionary elements</h4>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary['key']</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20}</h6>
                    <h6  class="pl-5">print(user['name'])</h6>
                    <h6  class="pl-5">print(user['age'])</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">raj</h6>
                    <h6  class="pl-5">20</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;"><span class="text-primary">in</span> keyword with dictionary</h4>
                <h6 class="mt-4 ml-5">Presence of a key or value can be checked using <span class="text-primary"> in</span> keyword.</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20}</h6>
                    <h6  class="pl-5">if 'name' in user :<span class="pl-5"> # checking presence of key 'name'.</span></h6>
                    <h6  class="pl-5"><span class="pl-5"></span>print("present")</h6>
                    <h6  class="pl-5">if 'raj' in user.values() :<span class="pl-5"> # checking presence of value 'raj'</span></h>
                    <h6  class="pl-5">print("present")<span class="pl-5"># values() method is used</span></h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">present</h6>
                    <h6  class="pl-5">present</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Looping in dictionary</h4>
                <h6 class="mt-4 ml-5"><span class="text-primary">values() </span> method returns object which have 
                all the values of that dictionary keys.</h6>

                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20 , 'fruit' :'apple'}</h6>
                    <h6  class="pl-5">for key in user :<span class="pl-5"> # It will give only keys.</span></h6>
                    <h6  class="pl-5"><span class="pl-5"></span>print(key)</h6>
                    <h6  class="pl-5">for values in user.values() :<span class="pl-5"> # It will give only values</span></h>
                    <h6  class="pl-5"><span class="pl-5"></span>print(values)<span class="pl-5"># values() method is used</span></h6>
                    <h6  class="pl-5"style="color:black;text-decoration:underline;"> # variables key and values will point 
                    to next key and value in every next iteretion.</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">name</h6>
                    <h6  class="pl-5">age</h6>
                    <h6  class="pl-5">fruit</h6>
                    <h6  class="pl-5">raj</h6>
                    <h6  class="pl-5">20</h6>
                    <h6  class="pl-5">apple</h6>
                    </div>
                </div>

                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">Looping with <span class="text-primary">items()</span> method</h4>
                <h6 class="mt-4 ml-5">It returns list of tuples which have key and its value.Looping becomes<br>
                 very easy because we can get keys and its values easily.</h6>

                 <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20 }</h6>
                    <h6  class="pl-5">for key,value in user.items() :</h6>
                    <h6  class="pl-5"><span class="pl-5"></span>print(f"key={key} and value={value}")</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">key=name and value=raj</h6>
                    <h6  class="pl-5">key=age and value=20</h6>
                    </div>
                </div>


                
                <h4 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">methods of dictionary</h4>
                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">To add new element</h5>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary[key]=value</h6>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">delete data</h5>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary.pop(key)<span class="pl-5"># key to be deleted</span></h6>


                
                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20 }</h6>
                    <h6  class="pl-5">user['roll']=200</h6>
                    <h6  class="pl-5">print(user)</h6>
                    <h6  class="pl-5">user.pop('name')</h6>
                    <h6  class="pl-5">print(user)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{'name': 'raj', 'age': 20, 'roll': 200}</h6>
                    <h6  class="pl-5">{'age': 20, 'roll': 200}</h6>
                    </div>
                </div>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">update() method</h5>
                <h6 class="mt-4 ml-5">It is used to merge two dictionary for form one with all elements in it.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary1.update(dictionary2)</h6>
                <h6 class="mt-4 ml-5">Since duplicates are not allowed in dictionary so if 'dictionary2' has 
                sone common keys as in dictionary1 then it will replace the existing one.</h6>


                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-2" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-2">user1={'name': 'raj' ,'age' : 20 }</h6>
                    <h6  class="pl-2">user2={'name':'prem','game':'hockey',<br><br>
                    'state':'delhi'}</h6>
                    <h6  class="pl-2">user1.update(user2)</h6>
                    <h6  class="pl-2">print(user1)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{'name': 'prem', 'age': 20, 'game': 'hockey', 'state': 'delhi'}</h6>
                    <h6  class="pl-5" style="color:black; tect-decoration:underline;"># It had duplicate key name so new value i.e. prem replaced raj.</h6>
                    </div>
                </div>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">get() method</h5>
                <h6 class="mt-4 ml-5">It is used to access values of keys of a dictionary.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary.get(key)</h6>

                
                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">copy() method</h5>
                <h6 class="mt-4 ml-5">It is used to make a copy of dictionary.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary.copy()</h6>

                
                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">clear() method</h5>
                <h6 class="mt-4 ml-5">It is used to delete all the elements of a dictionary.</h6>
                <h6 class="mt-4 ml-5">syntax:</h6>
                <h6 class="mt-4 ml-5">dictionary.clear()</h6>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">user={'name': 'raj' ,'age' : 20 }</h6>
                    <h6  class="pl-5">print(user.get('age'))</h6>
                    <h6  class="pl-5">us=user.copy()</h6>
                    <h6  class="pl-5">print(us)</h6>
                    <h6  class="pl-5">user.clear()</h6>
                    <h6  class="pl-5">print(user)</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">20</h6>
                    <h6 class="pl-5">{'name': 'raj', 'age': 20}</h6>
                    <h6 class="pl-5">{ }</h6>
                    </div>
                </div>

                <h5 class="mt-4 ml-5 text-secondary" style="text-decoration:underline;">word counter using dictionary</h5>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Example:</h6>
                    <h6  class="pl-5">def fun(s) :</h6>
                    <h6  class="pl-5"><span class="pl-5">count={ }</span></h6>
                    <h6  class="pl-5"><span class="pl-5">for i in s :</span></h6>
                    <h6  class="pl-5"><span class="pl-5"></span><span class="pl-5">count[i]=s.count(i)</span></h6>
                    <h6  class="pl-5"><span class="pl-5"></span>return count</h6>
                    <h6  class="pl-5">print(fun('london'))</h6>
                    </div>
                </div>

                <div class="jumbotron ml-5 mt-5 text-success">
                    <div style="background-color:white;">
                    <h6 class="pl-5" style="text-decoration:underline;">Output:</h6>
                    <h6  class="pl-5">{'l': 1, 'o': 2, 'n': 2, 'd': 1}</h6>
                    </div>
                </div>

            <!--<div>
                <form action="">
                <a href="tuple.php" class="btn btn-primary mb-3 " style="margin-left:280px;">PREV</a>
                <a href="sets.php" class="btn btn-primary mb-3"style="margin-left:20px;" >NEXT</a>
            
                </form>
            </div>-->

        </div>
    </div>

                <div class="col-sm-12 text-center">
                <div>
                    <form action="">
                        <a href="tuple.php" class="btn btn-primary mb-3 ml-5">PREV</a>
                        <a href="sets.php" class="btn btn-primary mb-3" >NEXT</a>
                    </form>
                </div>
                </div>

</div>


<?php
    include("footer.php");
?>