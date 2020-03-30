(@)check version
ng v

(@)install angular
npm install -g @angular/cli@latest

(@)Update latest angular
npm uninstall -g @angular/cli
npm cache verify
npm install -g @angular/cli@latest


(@)install new angular app
ng new appName

(@)run app
ng serve

(@)generate new component
ng g c componentname
ng g c componentname -it -is   (for inline template or inline style)

(@)if you have more than one module  generate component
ng generate component register --module=home/home.module

or if you dont want automatic import
ng g component component-name --skip-import

@ create new model and folder
ng g m shared/material --flat   (--flat create only model)

(@)ng generate p [name]

(@)npm install --save bootstrap@3
"node_modules/bootstrap/dist/css/bootstrap.min.css",

(@)npm install --save font-awesome angular-font-awesome
"node_modules/font-awesome/css/font-awesome.css"

(@)ng add @ng-bootstrap/schematics // automatic add all files


(@) ng g class models/login --type=model 

(@)if you want to chnge the base url localhost:4200 to localhost:4200/emp/
ng serve -o --base-href /emp/ 

(@) ng build --aot

npm install tslib
