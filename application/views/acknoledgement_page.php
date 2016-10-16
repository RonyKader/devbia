<div id="main-content" class="clearfix">
	<article class="acknoledgement">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<header class="text-center">
				<h2>Bangladesh Insurance Academy</h2>
				<h4>53, Mohakhali C/A, Dhaka-1212</h4>
			</header>
		</div>
		<!-- End of Header Section -->
		<div class="clearfix"></div>
		<div class="logo-header text-center">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="logo">
					<img src="<?php echo base_url();?>assets/images/bialogo.png" alt="">
				</div>
			</div>
			<!-- End of Logo section -->

			<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
				<div class="certificate-title">
					<h2>Examination Entry Permit-May-2016</h2>
					<h4>Basic Certificate of Insurance</h4>
				</div>
			</div>
			<!-- End of Certificate Title -->

			<div class="col-lg-offset-1 col-md-offset-1 col-lg-2 col-md-2 col-sm-4 col-xs-12">
				<div class="user-photo">
					photo will be
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="main-content">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="title">
				<?php 
					if ( $acknoledgement_info ) 
					{
						foreach ($acknoledgement_info as $acknoledgement ) 
						{?>
							<ul class="list-unstyled">
								<li>Registration no. <span>98565698</span></li>
								<li>Participant no. <span><?php echo $acknoledgement->participant_id;?></span></li>
							</ul>
							
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="name-list">
							<ul class="list-unstyled">
								<li><span class="n-info">Name:</span> <span class="vl-info"><?php echo $acknoledgement->student_name;?></span></li>
								<li><span class="n-info">Father's Name:</span> <span class="vl-info"><?php echo $acknoledgement->father_name;?></span></li>
								<li><span class="n-info">Mother's Name:</span> <span class="vl-info"><?php echo $acknoledgement->mother_name;?></span></li>
								<li><span class="n-info">Address:</span> <span class="vl-info"><?php echo $acknoledgement->current_employeement_address;?></span></li>
								<li><span class="n-info">Mobile No.:</span> <span class="vl-info"><?php echo $acknoledgement->mobile_no;?></span> </li>
							</ul>
						</div>
					</div>
							
						<?php }
					}
					else
					{
						echo "hel";
					}

				 ?>
		</div>
		<!-- End of Logo  Header Section -->
	</article>
</div>
