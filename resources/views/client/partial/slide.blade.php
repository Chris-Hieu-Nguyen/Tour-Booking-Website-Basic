<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/svg/loading/static-svg/spin.svg" />
	</div>
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
		<div>
			<img data-u="image" src="/img/gallery/980x380/011.jpg" />
		</div>
		<div>
			<img data-u="image" src="/img/gallery/980x380/012.jpg" />
		</div>
		<div>
			<img data-u="image" src="/img/gallery/980x380/013.jpg" />
		</div>
		<div>
			<img data-u="image" src="/img/gallery/980x380/014.jpg" />
		</div>
		<div>
			<img data-u="image" src="/img/gallery/980x380/015.jpg" />
		</div>
		<div>
			<img data-u="image" src="/img/gallery/980x380/016.jpg" />
		</div>
		<div style="background-color:#ff7c28;">
			<div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
				which are not licensed for any other purpose.
			</div>
		</div>
	</div>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		<div data-u="prototype" class="i" style="width:16px;height:16px;">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
			</svg>
		</div>
	</div>
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<circle class="c" cx="8000" cy="8000" r="5920"></circle>
			<polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
			<line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<circle class="c" cx="8000" cy="8000" r="5920"></circle>
			<polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
			<line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
		</svg>
	</div>
</div>
@section('script')
	<script src="/js/js-carousel.js"></script>
	<script type="text/javascript">jssor_1_slider_init();</script>
@endsection