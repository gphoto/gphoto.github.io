#!/bin/sh

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
#VERBOSE=-v

echo "Synchronizing..."
rsync -az $VERBOSE --exclude=CVS "--exclude=*.sh" "--exclude=*.swp" --exclude=.website_login --exclude=.cvsignore -e ssh . ${SERVER_HOST}:/home/groups/g/gp/gphoto/htdocs

echo "Changing perms..."
ssh ${SERVER_HOST} "cd /home/groups/g/gp/gphoto/htdocs ; chgrp -R gphoto *; chmod -R g+w *"

