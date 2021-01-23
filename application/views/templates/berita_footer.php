    <div class="footer_bottom_area">
      <div class="copyright_text">
        <p>Copyright &copy; <?= date('Y') ?> KKP Universitas Haluoleo | Template Design by <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
        <p><a href="http://dlhsultraprov.id"><img src="<?php echo base_url('assets/img/logo.png'); ?>" width="23"> Dinas Lingkungan Hidup Sulawesi Tenggara</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>