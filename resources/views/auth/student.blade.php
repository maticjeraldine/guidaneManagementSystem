<div class="student-form hidden">
	<div class="row">
		<div class="imgUp">
			<div class="imagePreview">
				<label class="btn btn-primary">
					Upload
					<input 
						class="uploadFile img" 
						name="image" 
						style="width: 0px;height: 0px;overflow: hidden;"
						type="file" 
						value="Upload Photo"
					>
				</label>
			</div>
		</div>
		<div class="col-md">
			<div class="w-100 text-center">
				<span>Please complete to create an account</span>
				<div class="row">
					<div class="col-md-4 form-group">
						<input 
							class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
							name="first_name" 
							placeholder="First Name" 
							type="type" 
						>
					</div>
					<div class="col-md-4 form-group">
						<input 
							class="form-control {{ $errors->has('middle_name') ? ' is-invalid' : '' }}"
							name="middle_name" 
							placeholder="Middle Name" 
							type="type" 
						>
					</div>
					<div class="col-md-4 form-group">
						<input 
							class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
							name="last_name" 
							placeholder="Last Name" 
							type="type" 
						>
					</div>
					<div class="col-md-4 form-group">
						<input 
							type="type" 
							name="course" 
							placeholder="Course" 
							class="form-control {{ $errors->has('course') ? ' is-invalid' : '' }}"
						>
					</div>
					<div class="col-md-4 form-group">
						<input 
							class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}"
							name="year" 
							placeholder="Year" 
							type="type" 
						>
					</div>
					<div class="col-md-4 form-group">
						<input 
							class="form-control {{ $errors->has('semester') ? ' is-invalid' : '' }}"
							name="semester" 
							placeholder="Semester"
							type="type" 
						>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 form-group pl-0">
			<input
				class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}"
				name="gender" 
				placeholder="Gender" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group">
			<input 
				class="form-control {{ $errors->has('birth_date') ? ' is-invalid' : '' }}"
				name="birth_date" 
				placeholder="Date of Birth" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group">
			<input
				class="form-control {{ $errors->has('birth_place') ? ' is-invalid' : '' }}"
				name="birth_place" 
				placeholder="Place of Birth" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group pr-0">
			<input
				class="form-control {{ $errors->has('nationality') ? ' is-invalid' : '' }}"
				name="nationality" 
				placeholder="Nationality" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group pl-0">
			<input
				class="form-control {{ $errors->has('contact') ? ' is-invalid' : '' }}"
				name="contact" 
				placeholder="Contact No." 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group ">
			<input
				class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
				name="email" 
				placeholder="Email Address" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group ">
			<input
				class="form-control {{ $errors->has('address_city') ? ' is-invalid' : '' }}"
				name="address_city" 
				placeholder="City Address" 
				type="type" 
			>
		</div>
		<div class="col-md-3 form-group pr-0">
			<input
				class="form-control {{ $errors->has('address_provincial') ? ' is-invalid' : '' }}"
				name="address_provincial" 
				placeholder="Provincial Address" 
				type="type" 
			>
		</div>
	</div>

	<div class="row">
		<table class="table table-bordered">
		  <thead class="text-uppercase text-center">
		    <tr>
		        <th scope="col">Level</th>
		        <th scope="col">School</th>
		        <th scope="col">Location</th>
		        <th scope="col">Exclusive Date</th>
		        <th scope="col">Awards</th>
		    </tr>
		  </thead>
		    <tbody>
			    <tr>
					<th scope="row text-uppercase">
						Elementary
					</th>
					<td>
						<input
							class="form-control border-0 bg-transparent"
							name="others['education']['elementary']['school']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['elementary']['location']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['elementary']['date']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['elementary']['awards']" 
							type="type" 
						>
					</td>
			    </tr>
			    <tr>
					<th scope="row text-uppercase">
						Secondary
					</th>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['secondary']['school']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['secondary']['location']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['secondary']['date']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['secondary']['awards']" 
							type="type" 
						>
					</td>
			    </tr>
			    <tr>
					<th scope="row text-uppercase">
						College
					</th>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['college']['school']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['college']['location']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['college']['date']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['college']['awards']" 
							type="type" 
						>
					</td>
			    </tr>
			    <tr>
					<th scope="row text-uppercase">
						Vocational
					</th>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['vocational']['school']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['vocational']['location']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['vocational']['date']" 
							type="type" 
						>
					</td>
					<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['education']['vocational']['awards']" 
							type="type" 
						>
					</td>
			    </tr>
		    </tbody>
		</table>
	</div>

	<div class="row">
		<table class="table table-bordered">
		  	<thead class="text-center">
			    <tr>
			      	<th scope="col">
			      		<span class="text-uppercase">
			      			hobbies and interest
			      		</span>
			      	</th>
			      	<th scope="col">
			      		<span class="text-uppercase">
			      			dreams and aspiration
			      		</span>
			      	</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>
			      	<th>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['hobbies_interest'][]" 
							type="type" 
						>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['dreams_aspiration'][]" 
							type="type" 
						>
					</td>
			    </tr>
			    <tr>
			      	<th>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['hobbies_interest'][]" 
							type="type" 
						>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['dreams_aspiration'][]" 
							type="type" 
						>
					</td>
			    </tr>
			    <tr>
			      	<th>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['hobbies_interest'][]" 
							type="type" 
						>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['dreams_aspiration'][]" 
							type="type" 
						>
					</td>
			    </tr>
		  	</tbody>
		</table>
	</div>

	<div class="row">
		<table class="table table-bordered">
		  	<thead class="text-center text-uppercase">
			    <tr>
			      	<th></th>
			      	<th>
			      		<span>mother</span>
			      	</th>
			      	<th>
			      		<span>father</span>
			      	</th>
			      	<th>
			      		<span>guardian</span>
			      	</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>
			      	<th class="text-uppercase text-center">
			      		<span>name</span>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['mother']['name']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['father']['name']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['guardian']['name']" 
							type="type" 
						>
			      	</td>
			    </tr>
			    <tr>
			      	<th class="text-uppercase text-center">
			      		<span>address</span>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['mother']['address']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['father']['address']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['guardian']['address']" 
							type="type" 
						>
			      	</td>
			    </tr>
			    <tr>
			      	<th class="text-uppercase text-center">
			      		<span>contact no.</span>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['mother']['contact']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['father']['contact']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['guardian']['contact']" 
							type="type" 
						>
			      	</td>
			    </tr>
			    <tr>
			      	<th class="text-uppercase text-center">
			      		<span>occupation</span>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['mother']['occupation']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['father']['occupation']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['guardian']['occupation']" 
							type="type" 
						>
			      	</td>
			    </tr>
			    <tr>
			      	<th class="text-uppercase text-center">
			      		<span>birth date</span>
			      	</th>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['mother']['birth_date']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['father']['birth_date']" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['guardian']['guardian']['birth_date']" 
							type="type" 
						>
			      	</td>
			    </tr>
		  	</tbody>
		</table>
	</div>

	<div class="row">
		<table class="table table-bordered">
			<thead class="text-uppercase text-center">
				<tr>
					<th>
						<span>name of sibling</span>
					</th>
					<th>
						<span>date of birth</span>
					</th>
					<th>
						<span>education</span>
					</th>
					<th>
						<span>occupation</span>
					</th>
					<th>
						<span>school/employer</span>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['name'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['birth_date'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['education'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['occupation'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['school'][]" 
							type="type" 
						>
			      	</td>
				</tr>
				<tr>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['name'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['birth_date'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['education'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['occupation'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['school'][]" 
							type="type" 
						>
			      	</td>
				</tr>
				<tr>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['name'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['birth_date'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['education'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['occupation'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['school'][]" 
							type="type" 
						>
			      	</td>
				</tr>
				<tr>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['name'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['birth_date'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['education'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['occupation'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['school'][]" 
							type="type" 
						>
			      	</td>
				</tr>
				<tr>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['name'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['birth_date'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['education'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['occupation'][]" 
							type="type" 
						>
			      	</td>
			      	<td>
						<input 
							class="form-control border-0 bg-transparent"
							name="others['sibling']['school'][]" 
							type="type" 
						>
			      	</td>
				</tr>
			</tbody>
		</table>
	</div>

	<input type="hidden" name="role" value="student">
    
	<div class="row">
		<div class="col-md-6 form-group pl-0">
			<input 
				class="form-control"
				name="password" 
				placeholder="Password" 
				type="password" 
			>
		</div>
		<div class="col-md-6 form-group pr-0">
			<input 
				class="form-control"
				name="password_confirmation" 
				placeholder="Confirm Password" 
				type="password" 
			>
		</div>
	</div>

    <div class="w-100 text-center">
        <button type="submit" class="btn btn-primary d-inline">
            {{ __('Register') }}
        </button>
    </div>
</div>