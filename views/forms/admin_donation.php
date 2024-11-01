<!-- sidebar -->
<div class="meta-box-sortables">					
	<div class="postbox">
		<h3 class='hndle ui-sortable-handle'><span><?php echo __("Donation", 'simple-newsletter-br'); ?></span></h3>
		<div class="inside">
			<div>
				<p><?php echo __('Help this simple programmer to keep this plugin ever updated and ever with new things', 'simple-newsletter-br'); ?></p>
				<p><?php echo __('Select one of the products below to donate :)', 'simple-newsletter-br'); ?></p>
				<p>
					<ul class='donation_values'>
						<li>
							<form name="_xclick" action="https://www.paypal.com/br/cgi-bin/webscr" method="post" target="_blank">
								<input type="hidden" name="cmd" value="_xclick">
								<input type="hidden" name="business" value="ooprogramador@gmail.com">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="item_name" value="Simple Newsletter - Donation $2">
								<input type="hidden" name="amount" value="2.00">
								<input type="image" width="80" src="<?php echo plugins_url('images/2.png', dirname(dirname(__FILE__))) ?>" border="0" name="submit" alt="Thanks to Donate">
							</form>
							<div><b>Fruit ($2)</b></div>
						</li>
						<li>
							<form name="_xclick" action="https://www.paypal.com/br/cgi-bin/webscr" method="post" target="_blank">
								<input type="hidden" name="cmd" value="_xclick">
								<input type="hidden" name="business" value="ooprogramador@gmail.com">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="item_name" value="Simple Newsletter - Donation $5">
								<input type="hidden" name="amount" value="5.00">
								<input type="image" width="80" src="<?php echo plugins_url('images/5.png', dirname(dirname(__FILE__))) ?>" border="0" name="submit" alt="Thanks to Donate">
							</form>
							<div><b>Cup Cake ($5)</b></div>
						</li>
						<li>
							<form name="_xclick" action="https://www.paypal.com/br/cgi-bin/webscr" method="post" target="_blank">
								<input type="hidden" name="cmd" value="_xclick">
								<input type="hidden" name="business" value="ooprogramador@gmail.com">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="item_name" value="Simple Newsletter - Donation $7">
								<input type="hidden" name="amount" value="7.00">
								<input type="image" width="80" src="<?php echo plugins_url('images/7.png', dirname(dirname(__FILE__))) ?>" border="0" name="submit" alt="Thanks to Donate">
							</form>
							<div><b>Sandwich($7)</b></div>
						</li>
						<li>
							<form name="_xclick" action="https://www.paypal.com/br/cgi-bin/webscr" method="post" target="_blank">
								<input type="hidden" name="cmd" value="_xclick">
								<input type="hidden" name="business" value="ooprogramador@gmail.com">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="item_name" value="Simple Newsletter - Donation $12">
								<input type="hidden" name="amount" value="12.00">
								<input type="image" width="80" src="<?php echo plugins_url('images/12.png', dirname(dirname(__FILE__))) ?>" border="0" name="submit" alt="Thanks to Donate">
							</form>
							<div><b>Dinner ($12)</b></div>
						</li>
					</ul>
				</p>
				<br clear="all"/>
				<p><?php echo __('Dont worry, the plugin will be ever free!', 'simple-newsletter-br'); ?></p>
				<p><?php echo __('The products above are illustrative only , to choose one you will be donating a corresponding value or close to them.', 'simple-newsletter-br'); ?></p>
				<p>Icons by <a href="http://www.freepik.com/free-vector/flat-food-icons-collection_826665.htm">Designed by Freepik</a></p>
			</div>
		</div> <!-- .inside -->

	</div> <!-- .postbox -->

	</div> <!-- .meta-box-sortables -->