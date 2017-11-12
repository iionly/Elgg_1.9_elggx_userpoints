<?php

return [
	'admin:administer_utilities:elggx_userpoints' => 'Elggx Userpoints',
	'item:object:userpoint' => 'Userpoints',
	'sort:elggx_userpoints' => 'Userpoints',
	'members:title:elggx_userpoints' => 'Userpoints of members',
	'elggx_userpoints:admin_settings' => 'Change Userpoints Settings',
	'elggx_userpoints:settings' => 'Plugin Settings',
	'elggx_userpoints:actions' => 'Points Settings',
	'elggx_userpoints:list' => 'List',
	'elggx_userpoints:user' => 'User',
	'elggx_userpoints:action' => 'Action',
	'elggx_userpoints:reset' => 'Reset',
	'elggx_userpoints:restore' => 'Restore',
	'elggx_userpoints:restore_all' => 'Restore all user\'s userpoints',
	'elggx_userpoints:restore_help' => 'Due to server glitches it can happen sometimes that a user\'s userpoints metadata entry in the database gets corrupted (showing "Array" instead of the number of userpoints on the profile page). If the user\'s userpoints metadata entry is corrupted any further attempts in adding userpoints will fail (resulting in an Internal Server Error 500 even). Restoring the metadata entry is possible by re-calculation of the number of userpoints of this user.',
	'elggx_userpoints:restore_help:label' => 'Please enter here the username of the user account you want to restore the number of userpoints of:',
	'elggx_userpoints:restore_all_help' => 'If a lot of user\'s userpoints metadata entries are corrupted you can also select to restore the corresponding metata entries of all users of your site (Warning: this could take a while if you have a large userbase): ',
	'elggx_userpoints:detail' => 'Detail',
	'elggx_userpoints:awarded_for' => 'awarded for',
	'elggx_userpoints:moderate' => 'Moderate',
	'elggx_userpoints:moderate_empty' => 'There are no userpoints awaiting moderation.',
	'elggx_userpoints:approved_empty' => 'This user has not gained any userpoints yet.',
	'elggx_userpoints:add' => 'Add points',
	'elggx_userpoints:userpoints' => 'Userpoints',
	'elggx_userpoints:admin' => 'Userpoints Administration',
	'elggx_userpoints:admin_settings' => 'Change Userpoints Settings',
	'elggx_userpoints:pending' => 'Pending moderation',
	'elggx_userpoints:pending_message' => 'You have been awarded %d %s pending moderation.',
	'elggx_userpoints:awarded_message' => 'You have been awarded %d %s.',
	'elggx_userpoints:total' => 'Total',
	'elggx_userpoints:approved' => 'Approve',
	'elggx_userpoints:approved_message' => 'The %s have been approved.',
	'elggx_userpoints:approved_error' => 'Approval of userpoints has failed.',
	'elggx_userpoints:denied' => 'Deny',
	'elggx_userpoints:denied_message' => 'The %s have been denied.',
	'elggx_userpoints:delete' => 'Delete',
	'elggx_userpoints:deleteconfirm' => 'Are you sure you want to delete these points?',
	'elggx_userpoints:delete_success' => 'The points were successfully deleted.',
	'elggx_userpoints:delete_error' => 'Deletion of the points has failed.',
	'elggx_userpoints:settings:expire_after' => 'Expire points after a specific intervall? ',
	'elggx_userpoints:settings:expire_after:help' => 'Requires the Expirationdate plugin and that Elgg cronjobs be configured.',
	'elggx_userpoints:upperplural' => 'Points',
	'elggx_userpoints:lowerplural' => 'points',
	'elggx_userpoints:lowersingular' => 'point',
	'elggx_userpoints:settings:moderated' => 'Moderated',
	'elggx_userpoints:settings:approved' => 'Approved',
	'elggx_userpoints:settings:save:ok' => 'Successfully saved the Elggx Userpoints plugin settings.',
	'elggx_userpoints:settings:transaction_status' => 'Transaction status? ',
	'elggx_userpoints:settings:transaction_status_info' => 'Select whether all points should be approved automatically, or moderated requiring admin approval.',
	'elggx_userpoints:settings:subtract' => 'Allow points to be subtracted? ',
	'elggx_userpoints:settings:delete' => 'Allow points to be deleted? ',
	'elggx_userpoints:settings:displaymessage' => 'Display a message when points are awarded? ',
	'elggx_userpoints:settings:never' => 'Never',
	'elggx_userpoints:settings:1_hour' => '1 Hour',
	'elggx_userpoints:settings:1_day' => '1 Day',
	'elggx_userpoints:settings:1_week' => '1 Week',
	'elggx_userpoints:settings:2_weeks' => '2 Weeks',
	'elggx_userpoints:settings:4_weeks' => '4 Weeks',
	'elggx_userpoints:settings:365_days' => '365 Days',
	'elggx_userpoints:settings:toppoints:num' => 'The number of users to display',
	'elggx_userpoints:settings:profile_display' => 'Display points on users profile? ',
	'elggx_userpoints:toppoints' => 'Top Points',
	'elggx_userpoints:add:user' => 'Username:',
	'elggx_userpoints:add:description' => 'Description:',
	'elggx_userpoints:add:success' => 'Successfully added %d %s to user %s',
	'elggx_userpoints:reset:confirm' => 'Are you sure you want to reset the points of user %s to 0?',
	'elggx_userpoints:reset:success' => 'Successfully reset %s',
	'elggx_userpoints:restore:confirm' => 'Are you sure you want to restore the points of user %s?',
	'elggx_userpoints:restore:success' => 'Successfully restored userpoints of user %s.',
	'elggx_userpoints:error:invalid_username' => '%s is not a valid username.',
	'elggx_userpoints:restore_all:confirm' => 'Are you sure you want to restore the points of all users?',
	'elggx_userpoints:restore_all:success' => 'Successfully restored userpoints of all users.',
	'elggx_userpoints:reset:all' => 'Reset All Points',
	'elggx_userpoints:reset:all:confirm' => 'Are you sure you want to reset the points of all users to 0?',
	'elggx_userpoints:widget:toppoints:info' => 'A widget to display the top point earners.',

	'userpoints_standard:invitesettings' => 'Invite Settings',
	'userpoints_standard:loginsettings' => 'Login Settings',
	'userpoints_standard:activities' => 'General Activities',
	'userpoints_standard:izap_videos' => 'Izap Videos',
	'userpoints_standard:add_video' => 'Add Video',
	'userpoints_standard:tidypics' => 'Tidypics',
	'userpoints_standard:fivestar' => 'Elggx Fivestar',
	'userpoints_standard:fivestar_vote' => 'Points for voting / rating:',
	'userpoints_standard:friend' => 'Points for making another member a friend:',
	'userpoints_standard:blog' => 'Points for posting a blog entry:',
	'userpoints_standard:file' => 'Points for uploading a file:',
	'userpoints_standard:bookmarks' => 'Points for adding a bookmark:',
	'userpoints_standard:invited' => 'Inviting a friend',
	'userpoints_standard:verify_email' => 'Validate email addresses of invited friends?',
	'userpoints_standard:group' => 'Points for starting a group:',
	'userpoints_standard:profile_settings' => 'Points for editing profile information',
	'userpoints_standard:profile' => 'Points for editing profile:',
	'userpoints_standard:profileupdate_threshold' => 'Time before awarding points for editing profile again?',
	'userpoints_standard:profileicon' => 'Points for adding a profile icon:',
	'userpoints_standard:profileiconupdate_threshold' => 'Time before awarding points for adding a profile icon again?',
	'userpoints_standard:messageboard' => 'Points for posting to a user\'s message board:',
	'userpoints_standard:page_top' => 'Points for adding a page:',
	'userpoints_standard:likes' => 'Points for liking an item:',
	'userpoints_standard:create_album' => 'Points for creating a photo album:',
	'userpoints_standard:upload_photo' => 'Points for uploading a photo:',
	'userpoints_standard:comment' => 'Points for posting a comment:',
	'userpoints_standard:polls' => 'Poll Plugin',
	'userpoints_standard:poll' => 'Points for posting a poll:',
	'userpoints_standard:pollvote' => 'Points for voting on a poll:',
	'userpoints_standard:login' => 'Points for logging in:',
	'userpoints_standard:phototag' => 'Points for tagging a photo:',
	'userpoints_standard:thewire' => 'Points for posting to the wire:',
	'userpoints_standard:discussion' => 'Points for adding a discussion topic:',
	'userpoints_standard:discussion_reply' => 'Points for replying in a discussion topic:',
	'userpoints_standard:invite' => 'Points for inviting a friend:',
	'userpoints_standard:expire_invite' => 'Expire points for pending invitations / allow re-invitation after:',
	'userpoints_standard:require_registration' => 'Require registration for invited friends?',
	'userpoints_standard:login_threshold' => 'Time before awarding points again?',
	'userpoints_standard:login_interval' => 'Maximum number of days between logins to be awarded points:',
	'userpoints_standard:1hour' => '1 Hour',
	'userpoints_standard:4hours' => '4 Hours',
	'userpoints_standard:8hours' => '8 Hours',
	'userpoints_standard:12hours' => '12 Hours',
	'userpoints_standard:1day' => '1 Day',
	'userpoints_standard:1week' => '1 Week',
	'userpoints_standard:1month' => '1 Month',
];