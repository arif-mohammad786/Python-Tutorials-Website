
    </div><!-- end of row -->
</div><!-- end of container -->

<script>
    var checkbtn=document.getElementById("checkbtn");
    var sidebar=document.getElementById("sidebar");
    var print=document.getElementById("print");
    if (window.matchMedia("(max-width: 1200px)").matches) {
        checkbtn.style.display="block";
        checkbtn.style.position="fixed";
        checkbtn.style.float="right";
        sidebar.classList.add("mt-5");
        sidebar.style.display="none";
        sidebar.classList.remove("col-sm-3");
        //print.classList.remove("col-sm-7");
} else {
    
        checkbtn.style.display="none";
}


function myFunction(){
    var sidebar=document.getElementById("sidebar");
    if(sidebar.style.display=="none"){
        sidebar.style.display="block";
    }
    else{
        sidebar.style.display="none";
    }
}
</script>

    <!-- javascript linking-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>