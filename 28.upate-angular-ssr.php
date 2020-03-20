https://update.angular.io/   go to this site

# delete dist
# delete node_modules
# delete package-lock.json
# npm install


# Repository is not clean.  Please commit or stash any changes before updating.
ng update @angular/cli @angular/core --allow-dirty

# update angular project
ng update @angular/cli @angular/core


# npm uninstall -g @angular/cli
# npm cache verify
# npm install -g @angular/cli@latest

# ng add @nguniversal/express-engine --clientProject projectName
# npm run build:ssr
# npm run serve:ssr



# find error
grep -nrE '[^a-zA-Z](Slow)?Buffer\s*\(' --exclude-dir node_modules

#ng new appname --enable-ivy  (rendering engine)