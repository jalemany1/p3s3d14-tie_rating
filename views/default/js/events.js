define(['elgg', 'jquery'], function(elgg, $) {

	var $document = $(document);

	$document.on('click', '.elgg-menu-item-add-friend > a', rate_friendship);
	// TEMPORAL SOLUTION
	//$document.on('click', '.elgg-menu-item-friend-revoke > a', rate_friendship);
	$('ul.elgg-list.elgg-list-entity').on('click', 'ul.elgg-menu.elgg-menu-friendship > li.elgg-menu-item-friend-revoke > a', rate_friendship);
	//$document.on('click', '.elgg-menu-item-friend-approve > a', rate_friendship);
	$('ul.elgg-list.elgg-list-entity').on('click', 'ul.elgg-menu.elgg-menu-friendship > li.elgg-menu-item-friend-approve > a', rate_friendship);
	//$document.on('click', '.elgg-menu-item-friend-decline > a', rate_friendship);
	$('ul.elgg-list.elgg-list-entity').on('click', 'ul.elgg-menu.elgg-menu-friendship > li.elgg-menu-item-friend-decline > a', rate_friendship);
	

	function rate_friendship() {
		var lightbox = require('elgg/lightbox');
		var spinner = require('elgg/spinner');

		var href = $(this).attr('href');
		var rx = '[?](guid|friend)=([^&]+)';
		var userguid = href.match(rx)[2];

		lightbox.open({
			onLoad: spinner.start,
			onComplete: spinner.stop,
			href: elgg.normalize_url(sprintf('ajax/view/popup/rate-user?eguid=%s',userguid)),
			width: '350px',
			height: '200px',
		});
	}
});