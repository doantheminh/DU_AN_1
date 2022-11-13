<div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="upload/1061.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="upload/1003.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="upload/1004.jpg" style="width:100%">
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh="upload/".$img;
                        if (($i==2)||($ii=5)||($i==8)) {
                           $mr="";
                        }else {
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'" style="text-align: center; ">
                        <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width="160",height="120"></a></div>                       
                         <p style="color: red;">$'.$price.'</p>
                        <a style="text-decoration: none; text-transform: capitalize; paddig-bottom: 5px" href="'.$linksp.'"><h1>'.$name.'</h1></a>
                        <div class="row btnaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" class="bt-home" style="background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 8px 15px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 10px;" name="addtocart" value="Thêm vào giỏ hàng" class="mua">
                        </form>
                        </div>
                    </div> ';
                    $i+=1;
                    }
                    ?>
                </div>
            </div>
            <div class="boxphai ">
               <?php
                include "boxright.php";
               ?>
            </div>
        </div>