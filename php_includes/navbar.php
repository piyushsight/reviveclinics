<div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-left">All Day Open: 10am to 7pm</p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-right">Call us now +91 9718172474</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php rootUrl(); ?>">
                    <?php getLogo(); ?>
                    <span style="font-size: 125%;">&nbsp;&nbsp;Revive Hair Restoration Centre</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php getUrl("intro", ""); ?>">Home</a></li>
                    <li><a href="<?php getUrl("aboutus", "aboutus.php"); ?>">About Us</a></li>
                    <li><a href="<?php rootUrl(); ?>hair-problem.php">Hair Problem</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php rootUrl(); ?>services/Hair-Transplant.php">Hair Transplant</a></li>
                            <li><a href="<?php rootUrl(); ?>services/PRP.php">PRP</a></li>
                            <li><a href="<?php rootUrl(); ?>services/Mesotherapy.php">Mesotherapy</a></li>
                            <li><a href="<?php rootUrl(); ?>services/Non-Surgical-System.php">Non Surgical System</a></li>
                        </ul></li>
                    <li><a href="<?php getUrl("gallery", "gallery.php"); ?>">Gallery</a></li>
                    <li><a href="<?php rootUrl(); ?>FAQS.php">FAQs</a></li>
                    <li><a href="<?php rootUrl(); ?>contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<script type="text/javascript">
var host = window.location.hostname;
var docURL = document.URL;
docURL = docURL.replace(host, "");
docURL = docURL.replace("http://", "");
docURL = docURL.replace("www.", "");
if(docURL.indexOf("?") >= 0)
	docURL = docURL.substring(0, docURL.indexOf('?'));
var links = document.querySelectorAll('a[href="'+docURL+'"]');
if(links[0])
    links[0].parentNode.className = 'active';
</script>