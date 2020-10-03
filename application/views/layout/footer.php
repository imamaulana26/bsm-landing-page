<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-2">
				<img src="<?= base_url('assets') . '/img/ojk_logo.png' ?>">
				<img src="<?= base_url('assets') . '/img/ayo_logo.jpg' ?>" style="max-width: 120px">
				<img src="<?= base_url('assets') . '/img/lps_logo.png' ?>">
			</div>
			<div class="offset-1 col-md-5 mt-4">
				<img src="<?= base_url('assets') . '/img/logo-bsm.png' ?>" class="mr-2" style="max-width: 120px; float: left;">
				<p class="text-left">
					PT Bank Syariah Mandiri adalah pelaku jasa keuangan terdaftar dan diawasi oleh Otoritas Jasa Keuangan
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col mt-4">
				<p class="text-center">&copy; 2020 All Right Reserved by Imamaulana26</p>
			</div>
		</div>
	</div>
</footer>
<!-- End of Footer -->

<!-- Floating Button -->
<div class="float" onclick="onTop()">
	<i class="fa fa-fw fa-arrow-up my-float"></i>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- My Script -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets') . '/js/style.js' ?>"></script>

<script>
	// nav-link active
	var uri = "<?= $this->uri->segment(1) ?>";

	if (uri == '') {
		$('.nav-link').first().addClass('active');
	} else {
		$('.nav-link').each(function() {
			if ($(this).text().toLowerCase() == uri) {
				$(this).addClass('active');
			}
		});
	}
	// end of nav-link active
</script>

</body>

</html>
