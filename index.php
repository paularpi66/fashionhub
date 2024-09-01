<?php
    include 'get_data.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>fashionhub</title>

        <!-- css style sheet -->
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js" defer></script>

        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- font cdn -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    </head>

    <body>
        <!-- header start -->
        <header>
            <div class="container-fluid">
                <div class="row border-bottom" style="padding: 15px 15px 15px 15px;">
                    <div class="col-lg-5 col-md-6 col-sm-6 pt-1 pl-10">
                        <!-- logo start -->
                        <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png"  alt="fashionhub_logo">
                        </a>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-6 pt-1">   
						<div class="cart-container" style="float: right;">
							<!-- Shopping Bag Icon (you can replace this with an actual icon image or SVG) -->
							<span><img src="images/bag.png" style='height: 40px; width: 40px; 'alt="fashionhub_bag"></span>
							<!-- Counter Badge -->
							<div id="itm-cnt-bag" class="cart-counter color-navy">1</div>
						</div>
                    </div>    
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- slider start -->
        <section class="sproduct">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- big product image section -->
                        <img class="img-fluid rounded pb-3 w-100" id="iproductmainimg" src=<?php echo $rows[0]["image_path"] ?> alt="product_image"/>
                        <div class="small-img-group" >
                            <div class="carousel-view">
                                <!-- Left Button -->
                                <button id="prev-btn" class="prev-btn">  <img src="images/left-arrow.png" style="height: 15px; width: 15px;"></button>
                                
                                <!-- List Container -->
                                <div id="item-list" class="item-list">
                                    <!-- Items -->
									<?php
										for($i = 0; $i < count($rows); $i++) {
											echo '<div class="item">
													<img id="item" class="item" src="'.$rows[$i]["image_path"].'"/>
												</div>';
										}
									?>
                                </div>
                                
                                <!-- Right Button -->
                                <button id="next-btn" class="next-btn"> 
                                    <img src="images/right-arrow.png" style="height: 15px; width: 15px;">
                                </button>
                            </div>
                            <!-- image end -->
                        </div>
                    </div>
               
                    <!-- right section start here -->
                    <div class="col-lg-6 col-md-12 col-12" style="padding-left: 100px;">
                        <!-- heading -->
                        <div class="atext border-bottom">
                            <p class="ltext">Home  >   Decoration  >  Furniture  >  <b>Sideboard</b></p>
                            <h1 id="productName"><?php echo $name; ?></h1>
                            <p id="productSubtitle"><?php echo $subtitle; ?></p>
                        </div>
                    
                        <!-- price and review section -->
                        <div class="pricerev border-bottom" style="padding-top: 20px;">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-md-4">
                                    <h1 class="h1text">$<b id="productPrice"><?php echo $price; ?></b></h1>
                                </div>
                                <div class="col-lg-8 col-sm-4 col-md-4">
                                    <img src="images/star.png" alt="star"> <b>4.8</b>
                                    <img src="images/messenger.png" alt="messenger"><b style="color: #3A4980;">Reviews</b>
                                    <p style="color: #A3A9C2;"><b style="color: #3E9242">93%</b> of buyers have recommended this.</p>
                                </div>
                            </div>
                                
                            <!-- choose color section -->
                            <div class="ccolor">
                                <p class="choosecolor">Choose a Color</p>
                                <label class="color-option color-red">
                                    <input type="radio" name="color" value="grey" checked>
                                    <span class="checkmark">
                                        <img src="images/check.png" alt="check icon">
                                    </span>
                                </label>
                                <label class="color-option color-blue">
                                    <input type="radio" name="color" value="green">
                                    <span class="checkmark">
                                        <img src="images/check.png" alt="check icon">
                                    </span>
                                </label>
                                <label class="color-option color-green">
                                    <input type="radio" name="color" value="blue">
                                    <span class="checkmark">
                                        <img src="images/check.png" alt="check icon">
                                    </span>
                                </label>
                                <label class="color-option color-yellow">
                                    <input type="radio" name="color" value="red">
                                    <span class="checkmark">
                                        <img src="images/check.png" alt="check icon">
                                    </span>
                                </label>
                                <label class="color-option color-gradiant">
                                    <input type="radio" name="color" value="gradiant">
                                    <span class="checkmark">
                                        <img src="images/check.png" alt="check icon">
                                    </span>
                                </label>
                            </div>
                        </div>
                
                        <!-- choose size section -->
                        <div class="size border-bottom">
                            <p class="choosetext">Choose a Size</p>
                            <div class="btngroup">
                                <button type="button" class="btn btn-light" style="border-radius: 10px; color: #3A4980;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Small" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Small
                                        </label>
                                    </div>
                                </button>
                                <button type="button" class="btn btn-light" style="border-radius: 10px; color: #3A4980;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Medium">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Medium
                                        </label>
                                    </div>
                                </button>
                                <button type="button" class="btn btn-light" style="border-radius: 10px; color: #3A4980;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="large">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        large
                                        </label>
                                    </div>
                                </button>
                                <button type="button" class="btn btn-light" style="border-radius: 10px; color: #3A4980;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Extra Large">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Extra Large
                                        </label>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- choose sizee button end here -->

                        <!-- quantity button -->
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="qtybutton">
                                    <div class="wrapper">
                                        <span class="minus">-</span>
                                        <span id="productQty" class="num">01</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <!-- add to cart button -->
                            <div class="col-lg-7 col-lg-7 col-sm-7" style="padding-top: 20px;">
                                <button class="add-to-cart" id="addtocart" data-toggle="modal" data-target="#exampleModal" onclick="afterModalOpen()">
                                    $<span id="productAmount" class="amount"> </span>
                                    <span class="text"> Add to Cart</span>
                                </button>
								
								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="text-center">
															<img id="modalProductImage" src="" alt="Product Image" class="img-fluid mb-3" style="max-width: 150px;">
														</div>
													</div> 
													<div class="col-lg-8 col-md-8 col-sm-8">
														<h3 id="modalProductName"></h3>
														<p id="modalProductSubtitle" style=" color: #A3A9C2;"></p>
														<div class="qtybutton"  style="padding-left: 100px;">
															<div class="wrapper">
																<span id="modalMinus" class="minus">-</span>
																<span id="modalNum" class="num"></span>
																<span id="modalPlus" class="plus">+</span>
															</div>
														</div>
													</div> 
												</div>

												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6">
														<label id="modalProductColor" style="float: right;">
														</label>
													</div>
													<div class="col-lg-6 col-lg-6 col-sm-6">
														<button type="button" class="btn btn-light" style="border-radius: 10px; color: #3A4980;">
															<div class="form-check">
																<label id="modalProductSize" class="form-check-label" for="flexRadioDefault2">
																</label>
															</div>
														</button>
													</div>
												</div>
											</div> 
											<!-- Modal Footer -->
											<div class="row">
											<div class="footer" style="padding-left: 200px; padding-bottom: 20px;">
												<button class="add-to-cart" id="addtocart" data-toggle="modal" data-target="#exampleModal" style="width: auto;" onclick="buyNow()"> 
													$<span id="modalProductAmount" class="amount"> </span>
													<span class="text">Buy Now</span>
												</button>
											</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- </div> -->
    
        <!-- description start here -->
        <div class="container">
            <div class="row" style="padding-top: 50px;">
                <h4 class="dhead">Description</h4>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <svg width="95" height="4" viewBox="0 0 128 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="128" height="4" fill="#164C96"></rect>
                    </svg>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-11" >
                    <svg width="1050" height="4" viewBox="0 0 1279 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1050" height="4" fill="#EAECF0"></rect></svg>
                </div>
            </div>
            
            <!--product description start here -->
            <div>
                <h4 class="pdhead pt-5">Product Description</h4>
                <p class="dtext"><?php echo $description; ?></p>
            </div>
            <!-- benefits start here -->
            <div>
                <h4 class="bhead">Benefits</h4>
                <div class="list" style="list-style-image: url(images/chk.png);">
                    <?php
						foreach ($benefits as $benefit) {
							echo "<li>". $benefit."</li>";
						}
					?>
                </div>
            </div>
            <!-- product details start here -->
            <div>
                <h4 class="pdhead pt-3">Product Details</h4>
                <div class="list" style="list-style-image: url(images/chk.png);">
					<?php
						foreach ($details as $detail) {
							echo "<li>". $detail."</li>";
						}
					?>
                </div>
            </div>

            <!-- more details start here -->
            <div class="moredtl pb-10">
                <h4 class="mdhead pt-3">More Details</h4>
                <div class="list" style="list-style-image: url(images/chk.png);">
					<?php
						foreach ($more_details as $item) {
							echo "<li>". $item."</li>";
						}
					?>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <footer>
            <p></p>
        </footer>
    </body>
    
    <!-- bootstrap js, jq. propper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
