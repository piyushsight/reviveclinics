<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hair Problem | Revive Clinics</title>

    <?php include "php_includes/header.php"; ?>
</head>

<body>
    <?php include "php_includes/navbar.php"; ?>

    <section id="aboutus" class="margintop-180">
        <div class="container">
            <div class="row marginbot-50">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13998.23253421219!2d76.89826199472623!3d28.702861661872703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea79281aaaab%3A0x290fa783fc100bf8!2sPlush+Hair+Clinic!5e0!3m2!1sen!2sin!4v1550481071937"></iframe>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Contact Details</h3>
                    <p>
                        <b>Revive Hair Restoration Center<br />
                        Plot No. 6, 2nd Floor,<br/>
                        Near Metro Station Brig.<br/>
                        Hoshiyar Singh Metro Pillar No. 912,<br/>
                        Sankhol, Bahadurgarh</b>
                    </p>
                    <p>
                        <i class="fa fa-phone"></i> <abbr title="Phone">M</abbr>: +(91)-718172474</p>
                    
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: All Day Open: 10am to 7pm</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row marginbot-50">
                <div class="col-md-8">
                    <div class="panel-body">
                        <h3 class="marginbot-10">Make an appoinment</h3>
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm lead">
                            <div class="row">
                                <div class="form-group">
                                    <label>Name</label> <input type="text" name="name" id="name"
                                        class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>Phone number</label> <input type="text" name="phone" id="phone"
                                        class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>Email</label> <input type="email" name="email" id="email"
                                        class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="10" cols="100"  type="text" name="message" id="message" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 6 chars" required datmaxlength="999" style="resize:none" ></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                            </div>
                            <p class="lead-footer">* We'll contact you by phone & email later</p>

                        </form>
                    </div>
                </div>

            </div>
        <!-- /.row -->
        </div>
    </section>
    <!-- /Section: About Us -->

    <?php include "php_includes/footer.php"; ?>

    <script src="contactform/contactform.js"></script>

</body>

</html>