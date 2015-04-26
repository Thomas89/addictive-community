<div class="title-bar">
	<div class="title fleft"><span><?php __($community_name) ?></span><?php __($message['subject']) ?></div>
	<div class="buttons fright">
		<a href="messenger/reply/<?php __($message['pm_id']) ?>" class="default-button"><?php __("M_REPLY") ?></a>
		<a href="messenger/forward/<?php __($message['pm_id']) ?>" class="default-button"><?php __("M_FORWARD") ?></a>
		<a href="messenger/delete/<?php __($message['pm_id']) ?>" class="default-button grey"><?php __("M_DELETE") ?></a>
	</div>
</div>

<div class="thread-post-reply">
	<div class="author">
		<div class="photostack">
			<a href="profile/<?php __($message['from_id']) ?>">
				<?php __(Html::Crop($message['avatar'], 96, 96, "avatar")) ?>
			</a>
		</div>
		<p class="name"><a href="profile/<?php __($message['from_id']) ?>"><?php __($message['username']) ?></a></p>
		<p class="member-title"><?php __($message['member_title']) ?></p>
	</div>
	<div class="content">
		<div class="date"><?php __("M_SENT_ON", array($message['sent_date'])) ?></div>
		<div class="text">
			<span class="parsing"><?php __($message['message']) ?></span>
			<div class="signature parsing"><?php __($message['signature']) ?></div>
		</div>
	</div>
</div>
