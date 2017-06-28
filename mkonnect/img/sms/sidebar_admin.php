<section id="mail-nav" class="hidden-xs bg-black">
	<ul class="nav nav-pills nav-stacked no-radius m-t-n-xs">
		<li <?php if($page == 'dashboard') { echo 'class="active"'; } ?>>
			<a href="dashboard.php">
				<i class="fa fa-fw fa-tachometer"></i> Dashboard
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked no-radius m-t-sm">
		<li class="padder dk text-sm l-h-2x">
			<p>Bulk SMS</p>
		</li>
		<li <?php if($page == 'bulk_outbox') { echo 'class="active"'; } ?>>
			<a href="bulk_outbox.php">
				<i class="fa fa-fw fa-arrow-left"></i> Outbox
			</a>
		</li>
		<li <?php if($page == 'bulk_statement') { echo 'class="active"'; } ?>>
			<a href="bulk_statement.php">
				<i class="fa fa-fw fa-list"></i> Statement
			</a>
		</li>
		<li <?php if($page == 'bulk_alpha') { echo 'class="active"'; } ?>>
			<a href="bulk_alpha.php">
				<i class="fa fa-fw fa-sort-alpha-asc"></i> Alphanumerics
			</a>
		</li>
	</ul>
	<ul class="nav nav-pills nav-stacked no-radius m-t-sm">
		<li class="padder dk text-sm l-h-2x">
			<p>Permium SMS</p>
		</li>
		<li <?php if($page == 'premium_inbox') { echo 'class="active"'; } ?>>
			<a href="premium_inbox.php">
				<i class="fa fa-fw fa-arrow-right"></i> Inbox
			</a>
		</li>
		<li <?php if($page == 'premium_outbox') { echo 'class="active"'; } ?>>
			<a href="premium_outbox.php">
				<i class="fa fa-fw fa-arrow-left"></i> Outbox
			</a>
		</li>
		<li <?php if($page == 'subscribers') { echo 'class="active"'; } ?>>
			<a href="subscribers.php">
				<i class="fa fa-fw fa-users"></i> Subscribers
			</a>
		</li>
		<li <?php if($page == 'premium_services') { echo 'class="active"'; } ?>>
			<a href="premium_services.php">
				<i class="fa fa-fw fa-key"></i> Services
			</a>
		</li>
		<li <?php if($page == 'premium_shortcodes') { echo 'class="active"'; } ?>>
			<a href="premium_shortcodes.php">
				<i class="fa fa-fw fa-sort-numeric-asc"></i> Shortcodes
			</a>
		</li>
	</ul>
</section>