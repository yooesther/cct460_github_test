<?php
 	function aboutUs($people) {
		foreach($people as $k => $v) {
			echo "<h4 class='stuff'>" . $k . "</h4><br /> " . $v ."<br /><br />";
		}
	}; 
	$company = array(
		"Phone"			=> "905-845-9430",
		"Location"		=> "<strong>Trafalgar Campus</strong><br />
						1430 Trafalgar Road<br /> 
						Oakville, ON L6H 2L1<br /><br />
						<strong>HMC Campus</strong><br />
						4180 Duke of York Blvd<br /> 
						Mississauga, ON L5B 0G5<br /><br />
						<strong>Davis Campus</strong><br />
						7899 McLaughlin Rd<br /> 
						Brampton, ON L6Y 5H9<br /><br />"
	);
?>

	<div class="hentry__contact">	
		<div class="entry-content">
			<div class="contactus">
				<?php aboutUs( $company ); ?>
			</div>
			<form method="post" action="<?php the_permalink(); ?>sent">
			<label class="required">Name</label>
			<input name="fname" placeholder="Full Name!">
			<label class="required">Email</label>
			<input name="email" type="email"  placeholder="So we can get back to you">
			<label>Subject</label>
			<select name="subject">
				<option value="General Inquiry">General Inquiry</option>
				<option value="Photography">Photography</option>
				<option value="Graphic Design">Graphic Design</option>
				<option value="Videography">Videography</option>
			</select>
			<label>Website</label>
			<input name="website" placeholder="If you have one">
			<label class="required">Message</label>
			<textarea name="message" placeholder="What's on your mind?" rows="5"></textarea>
			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
		</div><!-- .entry-content -->
		
			<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php yuuta_entry_footer(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->

	</div>