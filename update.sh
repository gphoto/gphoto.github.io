#!/bin/sh -x

# the file .website_login contain the sf.net login name.
# create it in your local tree.
if [ -f .website_login ] 
then
	LOGIN=`cat .website_login`
	SERVER_HOST=${LOGIN}@gphoto.sourceforge.net
else
	SERVER_HOST=gphoto.sourceforge.net
fi
VERBOSE=""
VERBOSE="-v"
#VERBOSE="-v --dry-run --delete"

echo "Synchronizing..."
rsync -az $VERBOSE --progress --exclude='CVS' --exclude='patch' --exclude='.#*' --exclude='*.patch' --exclude='*.sh' --exclude='*.swp' --exclude='*~' --exclude='.website_login' --exclude='.cvsignore' -e ssh . "${SERVER_HOST}:/home/groups/g/gp/gphoto/htdocs"

echo "Changing perms..."
ssh "${SERVER_HOST}" "find /home/groups/g/gp/gphoto/htdocs \( -type d -exec chgrp gphoto {} \; -exec chmod g+rwxs,a+rx {} \; \) -or \( -type f -exec chgrp gphoto {} \; -exec chmod g+rw {} \; \( -name '*.html' -or -name '*.png' -or -name '*.php' -or -name '*.jpg' \) -exec chmod a+r {} \; \)"

