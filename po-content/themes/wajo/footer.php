<!-- Insert footer script here -->
<!-- Footer -->
  <footer id="footer" class="footer pb-0" data-bg-img="<?=$this->asset('/images/footer-bg.png')?>" data-bg-color="#25272e">
    <div class="container pb-10">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark mb-20"> <img alt="" src="<?=$this->asset('/images/weblogo-250.png')?>">
            <p class="font-12 mt-15 mb-10">CharityFund is a library of corporate and business templates with predefined web elements which helps you to build your own site. lorem ipsum dolor is emit san dan pan kum sadra padra</p>
            <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="#">Read more</a>
          </div>
          <div class="widget dark">
            <div class="widget-subscribe mt-20">
              <h5 class="subscribe-title font-13 text-gray">Please enter your mailig address for being update yourself</h5>
              <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                <div class="input-group">
                  <input type="email" id="mce-EMAIL" data-height="34px" class="form-control input-sm" placeholder="Your Email" name="EMAIL" value="">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored btn-xs m-0" data-height="34px">Subscribe</button>
                  </span>
                </div>
              </form>

              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                        $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                }
              </script>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Archives</h5>
            <ul class="list-divider list-border">
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Vehicle Accidents</a></li>
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Family Law</a></li>
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Case Investigation</a></li>
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
              <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Business Taxation</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Jam Kantor</h5>
            <div class="opening-hourse">
              <ul class="list-border">
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Senin :</span>
                  <div class="value pull-right"> 7.00 - 14.00 </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Selasa :  </span>
                  <div class="value pull-right"> 7.00 - 14.00 </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Rabu : </span>
                  <div class="value pull-right"> 7.00 - 14.00 </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Kamis :</span>
                  <div class="value pull-right"> 7.00 - 14.00 </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Jum'at : </span>
                  <div class="value pull-right"> 7.00 pm - 12.00 </div>
                </li> <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sabtu : </span>
                  <div class="value pull-right"> 7.00 pm - 13.00 </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Minggu :</span>
                  <div class="value pull-right"> <span class="text-highlight bg-theme-colored text-black-333">Libur</span>  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2017 WAJOKAB.GO.ID. Dinas Komunikasi Informatika dan Statistik</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->