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

rsync -n -avz --exclude=CVS "--exclude=*.sh" "--exclude=*.swp" --exclude=.website_login --exclude=.cvsignore -e ssh . ${SERVER_HOST}:/home/groups/g/gp/gphoto/htdocs
