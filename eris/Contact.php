 
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>CHRIST UNIPLACER</h3>
            <p>Christ University provides comprehensive placement services to its students, aiming to facilitate their transition from academia to the professional world. Our placement cell collaborates with leading companies and organizations to offer rewarding career opportunities to our graduates.</p>
            <p>With a dedicated team of career advisors and industry experts, Christ University ensures that students are well-prepared for the job market. From resume building workshops to mock interviews, we offer a range of resources to enhance employability skills and foster career growth.</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p></p>
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       <h3>Contact me</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6">
								<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:500px;width:600px;">
    <div id="gmap_canvas" style="height:500px;width:600px;"></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
</div>
<script type="text/javascript"> 
    function init_map(){
        var myOptions = {
            zoom:14,
            center:new google.maps.LatLng(12.9343, 77.6094), // Coordinates for Christ University, Bangalore
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(12.9343, 77.6094) // Coordinates for Christ University, Bangalore
        });
        infowindow = new google.maps.InfoWindow({
            content:"<b>Christ University</b><br/>Hosur Road, Bhavani Nagar, S.G. Palya, Bengaluru, Karnataka 560029, India"
        });
        google.maps.event.addListener(marker, "click", function(){
            infowindow.open(map,marker);
        });
        infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>

								</div>
							</div>
	</div>
 
	</section>
 