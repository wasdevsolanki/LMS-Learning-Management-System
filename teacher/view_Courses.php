
<?php require_once("require/header.php"); ?>
<div class="row">
	
		
	<div class="col-sm-4" style=""><h1 class="display-6 p-5 text-center" >Course Information</h1></div>
	<div class="col-sm-8"><img src="../img/vector-3.jpg" width="400"  class="position-absolute end-0" style="z-index: -1;"></div>

</div>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6 p-4 ">
		<span class="fs-5" style="float:left;">Select Course &nbsp;</span>
		<select class="form-select w-50" aria-label="Default select example">
		  <option selected>Select Course</option>
		  <option value="1">PHP Basic</option>
		  <option value="2">PHP Advance</option>
		  <option value="3">Java Basic</option>
		  <option value="4">Java Advance</option>
		  <option value="5">Andriod Basic</option>
		  <option value="6">Andriod Advance</option>
		</select>

	</div>
	<div class="col-sm-3"></div>
</div>

<div class="row">
	<div class="col-sm-3">
			<div class="card mb-4">
				<div class="card-header p-3">	
					<h1 class="fs-5 ">Course All Topics
							<a href="index.php"><img  src="../img/icon/unhide.png" width="25" class="" style="position:absolute; left:21rem; top:1.3rem;" alt="unhide"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="27" class="" style="position:absolute; left:18rem; top:1.2rem;" alt="hide"></a>
			    			<a href="index.php"><img  src="../img/icon/add.png" width="20" class="" style="position:absolute; left:15.2rem; top:1.5rem;" alt="add"></a>
					</h1>
				</div>
			<div class="accordion accordion-flush" id="accordionFlushExample">
			  
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			    	Topic 1 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a>
			      </button>
			    </h2>
			    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>

				    <div class="p-2" style="display:inline-grid;">	
						<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
						  <path d="M6 12v-2h3v2H6z"/>
						  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
						</svg>Microsoft Excel File 
							<a href="index.php"><img  src="../img/icon/unhide.png" width="20" class=""></a>
			    			
						</a>

						<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-zip-fill" viewBox="0 0 16 16">
						  <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243z"/>
						  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3h1zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1z"/>
						  </svg>ZIP File </a>

						<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-word-fill" viewBox="0 0 16 16">
						  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z"/>
						</svg>Microsoft Word File </a>

						<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
						  <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
						  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
						  </svg>PDF Farmat File </a>

						<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel-fill" viewBox="0 0 16 16">
						<path d="M5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
						<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 6h2A1.5 1.5 0 0 1 12 7.5v2a1.5 1.5 0 0 1-1.5 1.5h-.473l.447 1.342a.5.5 0 0 1-.948.316L8.973 11H8.5v1a.5.5 0 0 1-1 0v-1h-.473l-.553 1.658a.5.5 0 1 1-.948-.316L5.973 11H5.5A1.5 1.5 0 0 1 4 9.5v-2A1.5 1.5 0 0 1 5.5 6h2a.5.5 0 0 1 1 0z"/>
						</svg>Microsoft Power-Point File </a>
						
					</div>

			    </div>
			  </div>
			 
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingTwo">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
			        Topic 2 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a	     
			      </button>
			    </h2>
			    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
			    

			      <div class="p-2" style="display:inline-grid;">	
						<a href="#" style="text-decoration: none; padding: 0.1rem;">

						Microsoft Excel File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Hypertext Preprocessor File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">

						Microsoft Word File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">PDF Farmat File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Microsoft Power-Point File </a>
					</div>

			    </div>
			  </div>
			 
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingThree">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
			        Topic 3 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a>
			      </button>
			    </h2>
			    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
			    
			      
			      <div class="p-2" style="display:inline-grid;">	
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Microsoft Excel File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Hypertext Preprocessor File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Microsoft Word File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">PDF Farmat File </a>
						<a href="#" style="text-decoration: none; padding: 0.1rem;">Microsoft Power-Point File </a>
					</div>

			    </div>
			  </div>

			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingFour">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
			        Topic 4 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a>
			      </button>
			    </h2>
			    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
			    </div>
			  </div>

			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingFive">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
			        Topic 5 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a>
			      </button>
			    </h2>
			    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
			    </div>
			  </div>

			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingSix">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
			        Topic 6 <a href="index.php"><img  src="../img/icon/unhide.png" width="20" class="" style="position:absolute; left:17rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/hide.png" width="20" class="" style="position:absolute; left:14.9rem; top:1rem;"></a>
			    			<a href="index.php"><img  src="../img/icon/delete-1.png" width="16" class="" style="position:absolute; left:13rem; top:1rem;"></a>
			      </button>
			    </h2>
			    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>

	<div class="col-sm-6">

		<div class="card  mb-3 " >
		  <div class="card-header">Current Topic</div>
		  <div class="card-body">
		    <h5 class="card-title">Loop & Branching</h5>
		    <p class="card-text"> any other language, loop in PHP is used to execute a statement or a block of statements, multiple times until and unless a specific condition is met. This helps the user to save both time and effort of writing the same code multiple times. PHP supports four types of looping techniques; for loop. while loop multiple times until and unless a specific condition is met. </p>

		    	<span class="fs-6 ">Course Material</span><br>
		    	<div class="p-2" style="display:inline-grid;">	
					<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
					  <path d="M6 12v-2h3v2H6z"/>
					  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
					</svg>Microsoft Excel File </a>

					<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-zip-fill" viewBox="0 0 16 16">
					  <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243z"/>
					  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3h1zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1z"/>
					  </svg>ZIP File </a>

					<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-word-fill" viewBox="0 0 16 16">
					  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z"/>
					</svg>Microsoft Word File </a>

					<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
					  <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
					  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
					  </svg>PDF Farmat File </a>

					<a href="#" style="text-decoration: none; padding: 0.1rem;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel-fill" viewBox="0 0 16 16">
					<path d="M5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
					<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 6h2A1.5 1.5 0 0 1 12 7.5v2a1.5 1.5 0 0 1-1.5 1.5h-.473l.447 1.342a.5.5 0 0 1-.948.316L8.973 11H8.5v1a.5.5 0 0 1-1 0v-1h-.473l-.553 1.658a.5.5 0 1 1-.948-.316L5.973 11H5.5A1.5 1.5 0 0 1 4 9.5v-2A1.5 1.5 0 0 1 5.5 6h2a.5.5 0 0 1 1 0z"/>
					</svg>Microsoft Power-Point File </a>
					
				</div>


		  </div>
		</div>
	</div>




	<div class="col-sm-3">
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title fs-4">PHP Basic</h5>
		    <h6 class="card-subtitle mb-2 text-muted">Course Info</h6>
		  	<hr>
		  	<h6 style="font-weight: bold;">Teachers</h6>
		    <ul>
		    	<li class="card-text ">Ahmed Raza</li>
			    <li class="card-text ">Shahid Khan</li>
			    <li class="card-text ">Abdul Latif</li>
			    <li class="card-text ">Muhammad Ali</li>
			    <li class="card-text ">Iqra Kanwal</li>
			    <li class="card-text ">Urooj Fatima</li>
			    <li class="card-text ">Inayat Khan</li>
			</ul>
			<hr style="width: 50%;">
		    <div>
		    	<h6 style="font-weight:bold;">Other Info</h6>
		    	<ul>
			    	<li>Total Course Topics <b>30</b></li>
			    	<li>Enrolled Studetns <b>90</b></li>
			    	<li>Duration <b>4 Months</b></li>
		    	</ul>
		    </div>
		  </div>
		</div>
	</div>
<?php require_once("require/footer.php"); ?>
