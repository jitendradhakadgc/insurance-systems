<!-- pdf-post-creator-page.php -->
<main class="subscription-payment-page">
		<div class="subscription-container">
		<form method="post" enctype="multipart/form-data" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
				<input type="hidden" name="action" value="handle_pdf_post_creation">
				<?php wp_nonce_field('save_pdf_post', 'pdf_post_nonce'); ?>
				<div class="row">
					<div class="col">
						<p>Begin generating your comptete demand by providing the information below.</p>
						<h6 class="title">Plaintiff information</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="name" placeholder="Enter First Name" name="name">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter Last Name" name="last_name">
							</div>
							<div class="inputBox">
								<label for="city">Genders:</label>
								<select id="genders" name="genders" autocomplete="genders" aria-label="genders" class="Select-source">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
							<div class="inputBox">
								<label for="state">Role:</label>
								<select id="role" name="role" autocomplete="role" aria-label="role" class="Select-source">
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">State of:</label>
								<select id="stateof" name="stateof" autocomplete="stateof" aria-label="stateof" class="Select-source"><option value="1">1</option><option value="2">2</option></select>
							</div>
							<div class="inputBox">
								<label for="state">Family Status:</label>
								<select id="family_status" name="family_status" autocomplete="family_status" aria-label="Country or region" class="Select-source"><option value="1">1</option><option value="2">2</option></select>
							</div>
							<div class="inputBox">
								<label for="city">delay Status:</label>
								<select id="delay_status" name="delay_status" autocomplete="delay_status" aria-label="Country or region" class="Select-source"></option><option value="1">1</option></option><option value="2">2</option></select>
							</div>
							<div class="inputBox2">
							<label>
								<input type="radio" name="billingCountry" value="AF">
								This Plaintiff is a minor
							</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h6 class="title">Case Information</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter state">
							</div>
							<div class="inputBox">
								<label for="city">Genders:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
							<div class="inputBox">
								<label for="state">Role:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter state">
							</div>
							<div class="inputBox">
								<label for="city">Genders:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
							<div class="inputBox">
								<label for="state">Role:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h6 class="title">Policy and Carrier informaion</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter state">
							</div>
							<div class="inputBox">
								<label for="city">Genders:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
							<div class="inputBox">
								<label for="state">Role:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter state">
							</div>
							<div class="inputBox">
								<label for="city">Genders:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
							<div class="inputBox">
								<label for="state">Role:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option><option value="" disabled="" hidden=""></option><option value="AF">Afghanistan</option></select>
							</div>
						</div>
					</div>
				</div>
				<!-- Autonomy -->
				<div class="row">
					<div class="col">
						<h6 class="title">Autonomy</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="state">
									Last Name:
								</label>
								<input type="text" id="state" placeholder="Enter state">
							</div>
							
						</div>
					</div>
				</div>
				<!-- Autonomy end-->
				<!-- Additional Information -->
				<div class="row">
					<div class="col">
						<h6 class="title">Additional information</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
					</div>
				</div>
				<!-- additional information -->
				 <!-- Additional Information -->
				<div class="row">
					<div class="col">
						<h6 class="title">Additional information</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
					</div>
				</div>
				<!-- additional information -->
				 <!-- Economic Impact -->
				<div class="row">
					<div class="col">
						<h6 class="title">Economic Impact</h6>
						<div class="flex">
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
							<div class="inputBox">
								<label for="city">
									First Name:
								</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
					</div>
				</div>
				<!-- Economic Impact -->
				  <!-- Economic Impact -->
				<div class="row">
					<div class="col">
						<h6 class="title">Non-Economic Impact</h6>
						<p>For the non Economic loss components of the claim, please provide the following details </p>
						<div class="flex">
							<div class="inputBox">
								<label for="city">First Name:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="no">No</option><option value="" disabled="" hidden=""></option><option value="yes">Yes</option></select>
							</div>
							<div class="inputBox">
							<label for="city">First Name:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="no">No</option><option value="" disabled="" hidden=""></option><option value="yes">Yes</option></select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">First Name:</label>
									<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="no">No</option><option value="" disabled="" hidden=""></option><option value="yes">Yes</option></select>
							</div>
							<div class="inputBox">
							<label for="city">First Name:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="no">No</option><option value="" disabled="" hidden=""></option><option value="yes">Yes</option></select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">First Name:</label>
								<select id="billingCountry" name="billingCountry" autocomplete="billing country" aria-label="Country or region" class="Select-source"><option value="" disabled="" hidden=""></option><option value="no">No</option><option value="" disabled="" hidden=""></option><option value="yes">Yes</option></select>
							</div>
						</div>
						<div class="flex">
							<div class="inputBox">
								<label for="city">First Name:</label>
								<input type="text" id="city" placeholder="Enter city">
							</div>
						</div>
					</div>
				</div>
				<!-- Economic Impact -->
				<div class="row row-App-Overview">
					
					<div class="submit_btn_container">
						<input type="submit" name="submit_pdf_post" value="Save" class="submit_btn submit_pdf_post">
					</div>
				</div>
			</form>
		</div>
	</main>
