#!/usr/bin/env bash

# https://www.cyberciti.biz/faq/scp-exclude-files-when-using-command-recursively-on-unix-linux/
rsync -av -e ssh --exclude='.git' --exclude='.DS_Store' --exclude='*.sh' ./ server@146.185.150.48:/var/www/rameerez.com/public_html/success-hard-work-vs-luck/