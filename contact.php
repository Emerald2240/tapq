<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
    require_once "includes/head.php";
    ?>
    <title>Contact TA Past Questions</title>
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
        
                <?php
                require_once "includes/header.php";
                ?>
            
            <!-- Header End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <p>Contact Us</p>
                        <h2>Find Your Answer / Send Message</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="faqs">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <span>1</span> Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                <span>2</span> Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                <span>3</span> Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>4</span> Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>5</span> Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="Message" required="required" ></textarea>
                                    </div>
                                    <div><button class="btn" type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


            <!-- Footer Start -->
            <?php
    require_once "includes/footer.php";
    ?>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <?php
    require_once "includes/scripts.php";
    ?>
    </body>
</html>
