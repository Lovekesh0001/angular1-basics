Each feature area resides in its own folder.
Each feature has its own Angular feature module.
Each area has its own area root component.
Each area root component has its own router outlet and child routes.
Feature area routes rarely (if ever) cross with routes of other features.

**if you want to same page load in other route with more information in the route

home-routing.module.ts

const routes: Routes = [
  { path: 'home1', component: HomeComponent1 },
  { 
    path: 'homeDetails/:name/:id', component: homeDetailsComponent,
    children: [                                                        =====    add the child route in any route
        { path: 'overview', component: HomeComponent1 },               =====  localhost:4200/homeDetails/:name/:id/overview     
        { path: 'contact', component: HomeComponent1 },                =====  localhost:4200/homeDetails/:name/:id/contact    
    ]
  },

];


  homeDetails.component.html                   == make sure you have to add  <router-outlet></router-outlet> to show children data
  <router-outlet></router-outlet>

homeDetails.component.ts

this.router.navigate(['overview], {relativeTo: this.route});
this.router.navigate(['contact], {relativeTo: this.route});