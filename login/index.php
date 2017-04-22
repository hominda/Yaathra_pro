<?php session_start();?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(document).on("scroll", onScroll);

                //smoothscroll
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();
                    $(document).off("scroll");

                    $('a').each(function () {
                        $(this).removeClass('active');
                    })
                    $(this).addClass('active');

                    var target = this.hash,
                            menu = target;
                    $target = $(target);
                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top + 2
                    }, 500, 'swing', function () {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    });
                });
            });

            function onScroll(event) {
                var scrollPos = $(document).scrollTop();
                $('#menu-center a').each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('#menu-center ul li a').removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            }
        </script>
        <style>

            /*-------------------------------------------------------------------Navigation Bar*/
            #menu-center {
                width: 100%;
                margin: 0 auto;
            }
            #menu-center ul {
                position: fixed;
                width: 100%;
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            #menu-center ul li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-family: Verdana,sans-serif;
                font-size: 17px;
                letter-spacing: 1px;
            }
            #menu-center ul li {
                list-style: none;
                margin: 0 0 0 -4px;
                display: inline;

            }
            .active ,  #menu-center ul li a:hover{

                background-color: #4CAF50;
            }
            /*----------------------------------------------------------------------------------Body*/
            body {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;

                background-image:url(./images/blur.jpg);
                background-size: 100% 100%; 
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .scope{
                height: 100vh;
                width: 100%;
            }
            /* ---------------------------------------------------------------------------awards*/
            #award{
                width: 99%;
            }
            #box{
                padding-top:2%;
                padding-bottom: 2%;
                padding-left: 1%;
            }

            #title{
                color: white;
                font-size: 22px;
                background-color: red;
                width: 50%;
                height: 25px;
            }

            #img{
                width: 300px;
                height: 250px;
                float: left;
            }
            #dis{
                color: white;
                float: left;
                width:65%;
                height: 250px;
            }
            #acon{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            #back{
                position: absolute;
                background-color: #999999;
                opacity: 0.5;
                height: 277px;
                width: 99%;
                z-index: -1;
            }
            /*---------------------------------------------------------------------------projects*/
            div.img {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 32.4%; 
                height: 40%;
            }

            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: 100%;
            }

            div.desc {
                padding: 15px;
                text-align: center;
                color: white;
                font-size: 200%;
            }
            /*-----------------------------------------------------------------------------about*/           
            #banner
            {
                background-size: cover;
                border: 5px solid #dedede;
                height: 350px;
            }
            #myPhoto{
                width : 100%  ;
                height: 350px;
            }

            #content_area
            {
                width: 750px;
                margin: 20px 0 20px 0;
                padding: 10px;
                color: white; 
                font-size: 120%;
            }


            /*------------------------------------------------------------------------------login*/
            #loginDiv{
                height: 200px; 
                width: 450px; 
                border: 3px solid white; 
                border-radius:13px;
            }	


            #loginDiv input[type=text] ,#loginDiv input[type=password] {
                padding: 5px 25px;
                margin: 9px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=reset] {
                background-color: #ff6600;
                color: white;
                padding: 5px 35px;
                margin: 23px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }


            input[type=submit]:hover {
                background-color: #45a049;
            }
            input[type=reset]:hover {
                background-color: #cc6600;
            }

            label,input{
                font-family: Verdana,sans-serif;
                font-weight: bold;
                font-size: 18px;
            }

            label{
               color: white;
            }



        </style>
    </head>
    <body>
        <!--	<div class="container">	--->
        <div class="m1 menu">
            <div id="menu-center">
                <ul>
                    <li style="float:left;"><a class="active" href="#home">Home</a></li>
                    <li style="float:right;"><a href="#login">Login</a></li >
                    <li style="float:right;"><a href="#register">Register</a></li >
                    <li style="float:right;"><a href="#contact">Contact Us</a></li >
                    <li style="float:right;"><a href="#legal">Regulations</a></li >
                    <li style="float:right;"><a href="#projects">Projects</a></li >
                    <li style="float:right;"><a href="#awards">Awards</a></li>
                    <li style="float:right;"><a href="#about">About</a></li>

                </ul>
            </div>
        </div>
        <div class="scope" id="home">
            <img src="images/home.jpg" style="width: 100%; height: 100%;">
        </div>


        <div style="height: 20vh;"></div>


        <div  id="about">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Who I am</center>
            <div id="banner">
                <img id="myPhoto" src="images/p1.jpg" alt="architect"/>
                <script src="JS/about.js"></script>
            </div>
            <div style="text-align: left;">


                <div id="content_area" style="display:inline-block; align-content: center;">
                    <h3><strong>Biography</strong></h3>
                    <h4>B.Sc (University of Colombo), AIA (SL)</h4>
                    <p>Palinda Kannangara was born in Colombo,Sri Lanka in 1970.<br>
                        Educated at Ananda College, Colombo,<br> 
                        he entered the University of Colombo and graduated Bachelor of Science (BSc) in Physics in the year 1996.<br><br>
                        His primary calling, however, was elsewhere.<br>
                        He joined the study course conducted by the Sri Lanka Institute of Architects in 1994 and received his Charter in 2004 as an Associate Member of the Sri Lanka Institute of Architects AIA (SL).<br><br>
                        During his Under-graduate years he worked under several leading architects such as Archt.<br> 
                        K. Ganeshan, Archt. Vinod Jayasinghe and Archt. Anura Ratnavibushana before creating his own office in Kolonnawa in 2004 and later shifted to Kotikawatta, Colombo in early 2006, where his office is currently located.<br><br>
                        He was awarded the commendation prize for the Geoffery Bawa award for Excellence in Architecture in the year 2008.<br> 
                        Also he received an Award of Excellence from the Sri Lanka Institute of Architects in the year 2009 for The Residential building at Makola.<br><br> 
                    </p>
                    <h3><strong>Philosophy</strong></h3>
                    <p>We are an architectural firm in the business of recreating the space.<br>
                        We value our clients' dreams and the life style which we align with our vision,<br>
                        To be the region best valued partner in materializing the dreams of recreating the space.<br><br>
                        In realizing the vision we truly believe and committed to our mission that,<br>
                        To create beyond the expectations of the client s’ sensibility with the combined effort of professionalism and creativity in balancing the art, comfort and security.<br><br>
                        We see the beauty of silence against the noise, emptiness against the congestion,<br> 
                        simplicity against complexity and we love to share the experience with our clients.<br>
                        We accept he realities of scenery but we don’t hesitate to challenge it.<br> 
                        We enjoy the climate but don’t let it torture us.<br> 
                        We respect the tradition but we don’t abide by it. <br>
                        We exploit technology but we don’t incarcerate our feelings in it.<br><br>
                        We love playing with light, material, and shapes and driven with passion in making the client’s dream a reality beyond their expectations.<br><br> 
                    </p>
                    <h3>Co-operate Structure</h3>
                    <h4>Principal Architect</h4>
                    <p>Palinda Kannangara<br>
                        B.Sc (University of Colombo), AIA (SL)</p><br>
                    <h4>Principal Architect</h4>
                    <p>Shalika Dilrukshi<br>
                        Ishara Udayanga Gomez<br>
                        Madushani Samarajeewa<br>
                        Savindri Nanayakkara<br>
                        Shehana Fernando<br>
                        Suranjan Chanuka Pussalla<br>
                        Ruveka Peiris 
                    </p><br>
                    <h4>Structural Engineer</h4>
                    <p>K. Rajapakse BSc Eng (SL), P G Dip (SL), M I E (SL)</p><br>
                    <h4>Quantity Surveyor</h4>
                    <p>Cost Management Services (Pvt) Ltd.<br>
                        A.N. Jayadewa</p><br>
                    <h4>M&E Engineer</h4>
                    <p>P. Somarathne BSc Eng (SL)</p><br>
                </div>
                <div style="display:inline-block; padding-left: 150px;">
                    <br>
                    <img id="myPhoto" src="images/archi.jpg" />
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>



        </div>


        <div  id="awards">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Awards</center>
            <br>
            <?php require("./awards/award.php"); ?>
            <?php require("./awards/award.php"); ?>
            <?php require("./awards/award.php"); ?>

        </div>
        <div class="scope" id="projects">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Completed Projects</center>
            <br><br><br><br>
            <div class="img" >
                <a target="_blank" href="img_fjords.jpg">
                    <img src="images/industrial.jpg" alt="Trolltunga Norway" >
                </a>
                <div class="desc">Industrial</div>
            </div>
            <div class="img" >
                <a target="_blank" href="img_fjords.jpg">
                    <img src="images/residential.jpg" alt="Trolltunga Norway">
                </a>
                <div class="desc">Residential</div>
            </div>
            <div class="img" >
                <a target="_blank" href="img_fjords.jpg">
                    <img src="images/community.jpg" alt="Trolltunga Norway" >
                </a>
                <div class="desc">Community</div>
            </div>


        </div>
        <div class="scope" id="legal">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Regulations</center>
            <br><br><br><br>
            <p><font size="5" color="white">Housing and Town Improvement Ordinance – 1915<br>
                Town and Country Planning Ordinance – 1945<br>
                Urban Development Authority Act  - 1978<br>
                UDA – Planning and Building Regulations<br>
                Urban Development Authority (Special Provision) Act<br>
                Draft Regulations for Low Income Settlements<br>
                Community Building Guidelines by National Housing Development Authority (NHDA)<br></font>
            </p>

        </div>
        <div class="scope" id="contact">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Contact Us</center>
            <p style="color: white; font-size: 200%;">
                01122497787
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5643649597737!2d79.89346104990712!3d7.060361918623994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737b5b05a09%3A0xd4ef00d25a3b354a!2sK+Zone+Ja-Ela!5e0!3m2!1sen!2slk!4v1471279498706"  frameborder="0" style="border:0; height: 65%; width: 100%" allowfullscreen></iframe>

        </div>
        <div class="scope" id="register">
            <br><br><br><br>
            <center style="color: white; font-size: 50px">Register Now</center>
            <br><br><br><br>
            <div style="text-align: left;">
                <center>
                    <div style="display:inline-block;">
                        <img src="images/customer.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />

                        <h1 style="color: wheat; font-size: 20px;">As a customer</h1>
                        <div style="color: wheat; text-align: left; margin-left: 0px; width: 250px;height: 250px;">dfcsfsf c 
                            fg
                            fg fg fhg gh
                            gh
                            nj
                            gh
                            nfghfdhfgh fdghfdgh sfg  cbn  cbn vcbn   vcbn f h rfghtrfhtrdgt fdgh fghfdghdfg dfg d sfg dsf gd fg sdf
                            <br><br><b><a style="font-size: 18px; color: #4CAF50;"href="RegisterAsCustomer.php">Register now ></a></b>
                        </div>

                    </div>
                    <div style="width: 17%; display:inline-block;">

                    </div>
                    <div style="display:inline-block;">
                        <img src="images/consultant.jpg" style="height: 200px; width: 200px;border: 5px solid white;  border-radius:200px;" />

                        <h1 style="color: wheat; font-size: 20px;">As a consultant</h1>
                        <div style="color: wheat; text-align: left; margin-left: 0px; width: 250px; height: 250px;">dfcsfsf c 
                            fg
                            fg fg fhg gh
                            gh
                            nj
                            gh
                            nfghfdhfgh fdghfdgh sfg  cbn  cbn vcbn   vcbn f h rfghtrfhtrdgt fdgh fghfdghdfg dfg d sfg dsf gd fg sdf
                            <br><br><b><a style="font-size: 18px; color: #4CAF50;"href="RegisterAsConsultant.php">Register now ></a></b>
                        </div>

                    </div>

            </div>
        </center>
    </div> 
</div>

<div class="scope" id="login" >
    <div style="height: 37vh;"></div>

    <center>
        <div id="loginDiv" >

            <form action="loginAction.php" method="post">
                <br>
                <label for="uname">Username: </label><input type="text" name="email"/>
                <br>
                <label for="uname">Password: </label><input type="password" name="pass"/>
                <br>
                <input type="submit" name="login" value="Login"/>
                <input type="reset" value="Cancel"/>
            </form>

        </div>
    </center>

</div>



</body>
</html>



