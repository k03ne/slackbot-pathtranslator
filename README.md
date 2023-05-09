# slackbot-pathtranslator

A slackbot that can translate server paths between Macintosh environments and Windows environments.

Problem:
In my agency we work with both systems, so when copying paths to files and / or folders there was always the problem that Mac paths look like /Volumes/DriveName/ORNDER/ORNDER/FILE , but Windows paths always come with a drive letter instead of a drive name, so for example P:\ORDNER\ORDNER\DATEI . Of course, this can be quickly rethought, but as a Mac user, you can also work within Slack with SMB links directly to the folders and files. Which ends up speeding up the work.

Solution:
The Slackbot takes no matter if /Volumes/DriveName/ORNDER/ORNDER/FILE, P:\ORDNER\ORDNER\FILE or even direct SMB links and always translates them into an SMB link + the matching path for Windows users.

![slackbot_example](https://user-images.githubusercontent.com/52171435/237045796-382779ca-d35c-4f4c-a088-1481bbbd889c.jpg)

If you need help or have made a mistake, the Slackbot also reacts in a sometimes very funny way. The messages are always related to a space theme, which is lived in our agency.


