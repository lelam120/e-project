<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borderless Car</title>
    <?php include_once("html/style.php"); ?>
</head>
	<style>

* .xz-form-pnx {
			--c-theme:	#BB0010;
			--c-border:	#f0f0f0;
			--c-bg:		#fff;
			--c-label:	#333;
			--c-font:	#666;
			--c-green:	#00B160;
			--size:		1.6rem;
			--gap:		1.25em;
			--h: 		3em;
			--lh:		1.8em;
			--pd:		.4em .625em;
			--br:		4px;
			--btn-w:	18.75em;
			--btn-jc:	center;
			--lines: 	4;
		}
		.xz-form-pnx {
			font-size: var(--size);
		}
	
		.xz-form-pnx .xz-form-infos{
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap:var(--gap);
			margin-bottom: var(--gap);
		}
	
		.xz-form-pnx .xz-form-info,
		.xz-form-pnx .xz-form-msg {
			border:solid 1px var(--c-border);
			background:var(--c-bg);
			padding:var(--pd);
			display: flex;
			align-items: center;
			border-radius: var(--br);
			box-sizing: border-box;
		}
		.xz-form-pnx .xz-form-info {
			height: var(--h);
		}
		.xz-form-pnx .xz-form-msg {
			align-items: flex-start;
		}
	
		.xz-form-pnx .xz-form-input,
		.xz-form-pnx .xz-form-textarea {
			width:100%;
			border:none;
			font-size: var(--size);
			line-height: var(--lh);
			outline: 0;
			padding:0;
			margin-left: 1em;
			color:var(--c-font);
		}
		.xz-form-pnx .xz-form-textarea {
			height: calc(var(--lh) * var(--lines));
			min-height: var(--h);
			font-family: inherit;
			resize: none;
		}
	
		.xz-form-pnx .xz-form-label {
			display: block;
			color: var(--c-label);
			line-height: var(--lh);
			white-space: nowrap;
		}
		.xz-form-pnx .xz-form-label.required:after {
			content:"*";
			margin-left: .625em;
			color:var(--c-theme);
		}
	
		.xz-form-pnx .xz-form-btns {
			margin-top: var(--gap);
			display: flex;
			justify-content: var(--btn-jc);
		}
		.xz-form-pnx .xz-form-button {
			font-size: var(--size);
			border-radius: var(--br);
			display: inline-flex;
			justify-content: center;
			align-items: center;
			width:var(--btn-w);
			height: var(--h);
			background:var(--c-theme);
			color:#fff;
			border:none;
			transition:all .3s;
			display: flex;
			justify-content: center;
			align-items: center;
			gap:1em;
		}
		.xz-form-pnx .xz-form-button path {
			fill: #fff;
		}
		.xz-form-pnx .xz-form-button:hover {
			filter:brightness(1.1);
		}
		.xz-form-pnx .xz-form-button:active {
			transform:scale(.98);
		}
	
		@media screen and (max-width: 500px){
			.xz-form-pnx {
				--gap: .8em;
			}
			.xz-form-pnx .xz-form-infos {
				grid-template-columns: 1fr;
			}
			.xz-form-pnx .xz-form-button {
				width:100%;
			}
		}
	
		.xzform_o {
			position: relative;
		}
		.xz-form-pnx .xz-form-message.success {
			position: absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			z-index: 9;
			max-width:75%;
			display: flex;
			text-align: center;
			align-items: center;
			padding:4em;
			background:rgba(255,255,255,.8);
			color:var(--c-green);
			font-size:1.125em;
			line-height: 1.8em;
			font-weight: 500;
			box-shadow:0 .5rem 3rem -.5rem rgba(0,0,0,.3);
		}
</style>

<body>
	<?php include_once("html/Header.php"); ?>
    
    <div class="xz-container xz-about">
	<div class="xz-main">
		<div class="content">

			
<div class="wp-block-group alignfull about-sec-intro" style="transition: none 0s ease 0s; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<div class="wp-block-group about-intro-tit-sec"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<p>Welcome To</p>



<h2 class="wp-block-heading">Henan Borderless International Trade Co., Ltd.</h2>
</div></div>



<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><div class="wp-block-media-text__content">
<p>Our committed to providing high-quality and professional services to our customers, and creating a comprehensive automotive sales ecosystem. With over 10 years of experience and accumulated professional skills in the automotive industry, we constantly innovate and improve product quality with customer needs at the forefront, which has made us a leader in the automotive industry.</p>



<p>Our main products include electric cars, used cars, and other well-known international brands that cover various consumer groups. Through years of market practice and technological innovation, our vehicle performance and quality have reached advanced levels both domestically and internationally. Our goal is to become a leader in the automotive sales industry, achieve mutual benefit with customers, and provide them with more professional, reliable, and comfortable services during the car-buying process.</p>



<div class="xzbtn-block">
    <a class="xz-btn " href="##" target="_self">
        Learn More            </a>
</div>

</div><figure class="wp-block-media-text__media"><img decoding="async" width="720" height="540" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about1.jpg" alt="" class="wp-image-276 size-full" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about1.jpg 720w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about1-400x300.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about1-600x450.jpg 600w" sizes="(max-width: 720px) 100vw, 720px"></figure></div>
</div></div>



<div class="wp-block-group alignfull about-sec-why has-background" style="background-color: rgb(248, 248, 248); transition: none 0s ease 0s; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<h2 class="wp-block-heading has-text-align-center">Why Choose Borderless</h2>


<div class="xz-cards-block xz-cards-mly3" data-cols="3"><div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Professionalism</h4>
	</div>
	
	<p class="txt">As a professional import and export trading company, we have rich experience and professional skills. We understand the trends and demands of domestic and foreign markets and can provide customized services according to different customer needs.</p>

</div>
<div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Diverse product range</h4>
	</div>
	
	<p class="txt">Our main products include new energy vehicles, used cars, electric motorcycles, electric tricycles, electric skateboards, and charging piles. We offer a complete range of brands, years, and models for customers to choose from.</p>

</div>
<div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Quality assurance</h4>
	</div>
	
	<p class="txt">We have established long-term cooperative relationships with many well-known domestic and foreign automobile manufacturers and suppliers, and all products are guaranteed to be of high quality. We strictly control each import and export project to ensure that we can provide customers with excellent products and services.</p>

</div>
<div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Competitive pricing</h4>
	</div>
	
	<p class="txt">We have established stable cooperation relationships with multiple suppliers, have advantageous purchasing channels, and can provide flexible pricing strategies to ensure that we can offer the most favorable prices to customers.</p>

</div>
<div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Integrity-based operation</h4>
	</div>
	
	<p class="txt">As a company that operates with integrity, we always prioritize customer benefits and guarantee service quality and product quality. We value the trust and support of customers and continuously improve our service level, which has won the praise and trust of many customers.</p>

</div>
<div class="xz-card-mly3">
	<div class="card_top">
	<div class="iconfont"></div>
	<h4 class="tit">Borderless customer care is here to help you anytime.</h4>
	</div>
	
	<p class="txt"></p>

</div>
</div></div></div>



<figure class="wp-block-image size-full about-video popup-video" style="transition: none 0s ease 0s; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><a href="https://www.youtube.com/watch?v=EC9OPdIHDsU" target="_blank" rel="noreferrer noopener"><img decoding="async" width="1440" height="680" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video.jpg" alt="" class="wp-image-295" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video.jpg 1440w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video-400x189.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video-1024x484.jpg 1024w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video-768x363.jpg 768w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-video-600x283.jpg 600w" sizes="(max-width: 1440px) 100vw, 1440px"></a></figure>



<div class="wp-block-cover alignfull is-light about-sec-service has-white-color has-text-color" style="transition: none 0s ease 0s; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img decoding="async" width="1921" height="850" class="wp-block-cover__image-background wp-image-296" alt="" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg.jpg" data-object-fit="cover" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg.jpg 1921w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg-400x177.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg-1024x453.jpg 1024w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg-768x340.jpg 768w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg-1536x680.jpg 1536w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-sec-bg-600x265.jpg 600w" sizes="(max-width: 1921px) 100vw, 1921px"><div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
<h2 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-white-color">We Provide Best Services</mark></h2>



<div class="wp-block-group about-service-nav is-content-justification-center is-nowrap is-layout-flex wp-container-core-group-is-layout-4 wp-block-group-is-layout-flex">
<p class="current">Customized Services</p>



<p>Product Consultation</p>



<p>After-sales Service</p>
</div>


<div class="xz-cards-block xz-cards-ae13" data-cols="1"><div class="xz-card-ae13 current">
	
	<div class="service">
	<div class="iconfont"></div>
	<h3 class="tit">Customized Services</h3>
	<p class="txt">We prioritize our customers' needs and provide personalized customized services. Customers can choose their preferred vehicles based on their own preferences and requirements, and our sales team will provide personalized vehicle recommendations and configuration customization based on different customer needs.</p>
	</div>
	

	<div class="pic">
		<img decoding="async" width="720" height="430" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg 720w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-400x239.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-600x358.jpg 600w" sizes="(max-width: 720px) 100vw, 720px">	</div>

</div>
<div class="xz-card-ae13">
	
	<div class="service">
	<div class="iconfont"></div>
	<h3 class="tit">Product Consultation Services</h3>
	<p class="txt">Our sales team is composed of professionals with many years of industry experience and expertise, and can provide multi-brand, multi-configuration automobile consultation services. We help customers understand the performance and features of selected vehicle models by answering questions about automobile brands, performance, configuration, etc.</p>
	</div>
	

	<div class="pic">
		<img decoding="async" width="720" height="430" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg 720w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-400x239.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-600x358.jpg 600w" sizes="(max-width: 720px) 100vw, 720px">	</div>

</div>
<div class="xz-card-ae13">
	
	<div class="service">
	<div class="iconfont"></div>
	<h3 class="tit">After-sales Service</h3>
	<p class="txt">After customers purchase a vehicle from us, we actively follow up with them to promptly provide solutions and technical support for any problems they encounter during use. At the same time, we also regularly follow up with customers to understand their vehicle usage and satisfaction levels, in order to continuously improve our service quality and customer satisfaction.</p>
	</div>
	

	<div class="pic">
		<img decoding="async" width="720" height="430" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg" class="attachment-medium_large size-medium_large" alt="" srcset="https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic.jpg 720w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-400x239.jpg 400w, https://www.borderlesscar.com/wp-content/uploads/2023/07/about-secvice-pic-600x358.jpg 600w" sizes="(max-width: 720px) 100vw, 720px">	</div>

</div>
</div></div></div>



<div class="wp-block-group about-sec-say" style="transition: none 0s ease 0s; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<div class="wp-block-group about-say-x"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">





</div>
    
   <footer>
        <?php include_once("html/Footers.php"); ?>
	</footer>
   
</body>
</html>
