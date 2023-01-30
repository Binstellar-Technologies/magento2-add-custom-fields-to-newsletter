## Magento2 Add custom fields to Newsletter

> In this extension we are adding custom fields like firstname, lastname & Date of Birth (DOB) in the Newsletter Subscription fields. Also, we have saved this fields value in database.

Wondering how to achieve that? Don't worry we have got the solution for it.

> Install our module Binstellar/Newsletters


## Installation Steps

Step 1 : Download the Zip file from Github & Unzip it
Step 2 : Create a directory under app/code/Binstellar/Newsletters
Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Newsletters
Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1