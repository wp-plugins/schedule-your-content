=== Schedule Your Content ===
Contributors: Jatinder Pal Singh (j_p_s)
Donate link: http://www.appinstore.com/donate-please/
Tags: schedule, content, post, page, time, expire, start, date
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Now you decide when to show what within your POST or PAGE or TEXT Widget content. Easy to use shortcode

== Description ==

Schedule your content plugin can help you in showing content within your wordpress blog for a specific period. You can decide when to start showing content and when to stop showing content. 
This plugin uses shortcodes which can be written within the post content or page content or in text widget also. This plugin uses 4 parameters to schedule your content.
shortcode: [scheduler] Here is your content[/scheduler]
Parameters: start_date, start_time, end_date, end_time

Date must be in YYYY-MM-DD format and time must be in 24-hour format.

*	Here is the simple example where you schedule your content for specific period:

[scheduler start_date='2012-05-13' start_time='06:30' end_date='2012-06-13' end_time='09:30']
This is scheduled Content.
[/scheduler]

*	Here is the example where you want to schedule your content daily within 9am to 10am.

[scheduler start_date='' start_time='09:00' end_date='' end_time='10:00']
This is scheduled Content.
[/scheduler]

*	Here is the example when you want your content should be expired on specific date and time.

[scheduler start_date='' start_time='' end_date='2012-05-16' end_time='10:00']
This is scheduled Content.
[/scheduler]

*	Here is the example when you want to start showing your content on specific date and time and do not want it to be expired.

[scheduler start_date='2012-05-12' start_time='10:00' end_date='2099-05-16' end_time='']
This is scheduled Content.
[/scheduler]


== Installation ==


1. Upload `schedule-your-content` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= Plugin not working =

There can be multiple reasons for that. Make sure you have used correct logic for your schedule. Wrong logic may result in not showing the content at all.

= Not able to make it work? =

You can always leave a comment on my blog www.appinstore.com where I generally respond to feature requests and helps.

== Screenshots ==
No screenshot

== Changelog ==

= 1.0 =
* First version


