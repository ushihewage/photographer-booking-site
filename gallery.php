<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="galleryStyles.css"> -->
	<link rel="stylesheet" type="text/css" href="lightbox.css">
	<style type="text/css">

.gallery-contain
{
	margin-top: -10%;
/*	padding: 0;*/
	box-sizing: border-box;
	font-family: sans-serif;
	width: 100%;
	min-height: 50vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 40px 8%;

}
.gallery
{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
	grid-gap: 30px;

}
.gallery img
{
	width: 100%;
}
	</style>
</head>
<body>
	<div class="gallery-contain">
		<div class="gallery">
			<a href="Gallery/gallery08.jpg" data-lightbox="models" data-title="Caption01">
				<img src="Gallery/gallery08.jpg">
			</a>
			<a href="Gallery/gallery09.jpg" data-lightbox="models" data-title="Caption02">
				<img src="Gallery/gallery09.jpg">
			</a>
			<a href="Gallery/gallery10.jpg" data-lightbox="models" data-title="Caption03">
				<img src="Gallery/gallery10.jpg">
			</a>
			<a href="Gallery/gallery11.jpg" data-lightbox="models" data-title="Caption04">
				<img src="Gallery/gallery11.jpg">
			</a>
			<a href="Gallery/gallery05.jpg" data-lightbox="models" data-title="Caption05">
				<img src="Gallery/gallery05.jpg">
			</a>
			<a href="Gallery/gallery06.jpg" data-lightbox="models" data-title="Caption06">
				<img src="Gallery/gallery06.jpg">
			</a>
			<a href="Gallery/gallery07.jpg" data-lightbox="models" data-title="Caption07">
				<img src="Gallery/gallery07.jpg">
			</a>
			<a href="Gallery/gallery01.jpg" data-lightbox="models" data-title="Caption08">
				<img src="Gallery/gallery01.jpg">
			</a>
	<!-- 		<a href="Gallery/gallery02.jpg" data-lightbox="models" data-title="Caption09">
				<img src="Gallery/gallery02.jpg">
			</a> -->
			<a href="Gallery/gallery03.jpg" data-lightbox="models" data-title="Caption10">
				<img src="Gallery/gallery03.jpg">
			</a>
			<a href="Gallery/gallery04.jpg" data-lightbox="models" data-title="Caption11">
				<img src="Gallery/gallery04.jpg">
			</a>
			<a href="Gallery/gallery12.jpg" data-lightbox="models" data-title="Caption12">
				<img src="Gallery/gallery12.jpg">
			</a>
			<a href="Gallery/gallery13.jpg" data-lightbox="models" data-title="Caption13">
				<img src="Gallery/gallery13.jpg">
			</a>
			
		
		</div>
	</div>
	<script src="lightbox-plus-jquery.js"></script>

</body>
</html>