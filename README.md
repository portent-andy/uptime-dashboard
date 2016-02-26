# uptime-dashboard
### Version 1.0 | Last Updated 2016-2-26 | MIT License
# Uptime Dashboard
### By [Andy Schaff](https://github.com/portent-andy/ "Andy Schaff's Github")
===============

## Requirements
1. PHP 4+ with fsockopen(), file_get_contents(), and file_put_contents() capabilities

## Implementation Instructions
###To use the dashboard, follow these simple steps:
1. Download and unzip or clone files into a directory that has access to the web.
2. Update the appURL javascript variable in index.html to match the location of the directory.
3. Domain refresh is 3 seconds. Update the refreshMS javascript variable using the formula given for your desired refresh value.
4. Replace img/logo.png with your desired logo. Styles display logo with height of 49px.
5. Load the page. Add and/or delete URLs of your desire.