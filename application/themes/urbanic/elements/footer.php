        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                            <span id="footer-line">Copyright © 2084 <a href="#">Your Company Name</a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        print $html->javascript('urbanic/bootstrap.min.js');
        print $html->javascript('urbanic/stickUp.min.js');
        print $html->javascript('urbanic/colorbox/jquery.colorbox-min.js');
        print $html->javascript('urbanic/templatemo_script.js');
    ?>
    <?php Loader::element('footer_required'); ?>
</body>
</html>