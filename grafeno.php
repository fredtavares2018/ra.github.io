 <?php
 header("Access-Control-Allow-Origin: https://quimicaaumentada.com.br", false);

 ?>

<!doctype HTML>
<html>

<style type="text/css">
	
#arjsDebugUIContainer 
{
   display: none; !important;
}
	
.a-enter-vr-button
{
   display: none; !important;		
}
</style>

<script src="js/aframe.min.js"></script>
<!-- include aframe-ar.js -->
<script src="js/aframe-ar.js"></script>


<body style='margin : 0px; overflow: hidden;'>

<a-scene embedded arjs='sourceType: webcam;'>

     
<a-marker preset='custom' type='pattern' url='https://fredtavares2018.github.io/ra/pattern-nano.patt'>
<a-video 
	 src="https://youtu.be/1iDTYnxCNXM" 
	 type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' 
	 rotation="-90 0 0" 
	 controls="true"
	 
	 loop="true" 
	 crossOrigin="anonymous" 
	 webkit-playsinline 
	 style="display:none" vidhandler>
	</a-video>

</a-marker>
	
	<a-entity camera></a-entity>
	
  </a-scene>
</body>
</html>
