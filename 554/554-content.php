<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
	<div class="container">
		<div class="row">
			<div class="footer">
					<div class="col-md-3 col-sm-12">
						<div class="text">
							<h4 class="title">
									Links
								</h4>
						</div>
						<div class="sub-test">
							<ul>
								<li>Ambitious – Portfolio WordPress</li>
								<li>Forceful - HTML CSS Template</li>
								<li>MatchPoint – Business WordPress</li>
								<li>Shark – Magazine Template</li>
								<li>Prosto – Business Template</li>
								<li>Ambitious – HTML CSS Template</li>
								<li>Prosto – Business WordPress</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="text">
							<h4 class="title">
									Contact Information
								</h4>
						</div>
						<div class="sub-test">
							<ul>
							<li>  270 Potrero Avenue  </li>
							<li> San Francisco, CA 94103, </li>
							<li> United States  </li>
							
						   <li> <a href="maito:mail@olegnax.com">mail@olegnax.com</a> </li>
							<li> Phone: 800-321-6543 </li>
							</ul>
						</div>

					</div>
				  
					<div class="col-md-3 col-sm-12">
						<div class="text">
							<h4 class="title">
									From Twitter
								</h4>
							<ul class="twitter-title">
								<li class="twitter-item">
									Chocolat
									<a href="#" >#Magento</a> Theme designed to fits perfectly for any store:
									<a href="#" >#apparel</a>,
									<a href="#" >#food</a>,
									<a href="#" >#kids</a>,
									<a href="#" >#sport</a>,
									<a href="#" >#furniture</a>, etc.
									<a href="#" >http://t.co/wtvyXWho</a>
									<a href="#" >
										<span>7 hours ago</span></a>
								</li>
							</ul>
						</div>

					</div>
					<div class="col-md-3 col-sm-12">
						<div class="text">
							<h4 class="title">
									Contact Form
								</h4>
							<ul class="twitter-title">
								<li class="twitter-item">
									Chocolat
									<a href="#" >#Magento</a> Theme designed to fits perfectly for any store:
									<a href="#" >#apparel</a>,
									<a href="#" >#food</a>,
									<a href="#" >#kids</a>,
									<a href="#" >#sport</a>,
									<a href="#" >#furniture</a>, etc.
									<a href="#" >http://t.co/wtvyXWho</a>
									<a href="#" >
										<span >7 hours ago</span></a>
								</li>
							</ul>
						</div>
					</div>  
			</div>
		</div>
	</div>
</div>