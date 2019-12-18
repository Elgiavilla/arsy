<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
      <div class="row mb-5">
        <?php 
          $telp = $this->db->get_where('tb_settings', ['element_id' => 'contact_telp'])->row();
          $email = $this->db->get_where('tb_settings', ['element_id' => 'contact_email'])->row();
          $address = $this->db->get_where('tb_settings', ['element_id' => 'contact_address'])->row();
          $ig = $this->db->get_where('tb_settings', ['element_id' => 'contact_ig'])->row();
          $fb = $this->db->get_where('tb_settings', ['element_id' => 'contact_fb'])->row();
          $linkedin = $this->db->get_where('tb_settings', ['element_id' => 'contact_linkedin'])->row();
          $short = $this->db->get_where('tb_settings', ['element_id' => 'about_us_text'])->row();
		  $hp = $this->db->get_where('tb_settings', ['element_id' => 'hp_number'])->row();
        ?>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Kontak Kami</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text"><?=$address->value?></span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?=$telp->value?></span></a></li>
				  <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?=$hp->value?></span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?=$email->value?></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Arsy Organizer</h2>
            <p><?=$short->value?></p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="<?=$linkedin->value?>" target="_blank"><span class="icon-linkedin"></span></a></li>
              <li class="ftco-animate"><a href="<?=$fb->value?>" target="_blank"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="<?=$ig->value?>" target="_blank"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Arsy Organizer
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281212698211", // WhatsApp number
            call_to_action: "Hallo, ada yang bisa kami bantu ?", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>