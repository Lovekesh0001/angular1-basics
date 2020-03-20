home-routing.module.ts

const routes: Routes = [
  { path: 'home1', component: HomeComponent1 },
  { path: 'homeDetails/:name/:id', component: homeDetailsComponent },

];

app.component.ts

import { Router } from '@angular/router';

constructor(private router: Router){}

onSelectId(depertment){
  this.router.navigate(['/homeDetails', depertment.name, depertment.id]);
}



  app.component.html

  <ul>
    <li (click)="onSelectId(depertment)" *ngFor="let depertment of depertments">{{depertment.name}}</li>
  </ul>

<a routerLink="/homeDetails/{{ depertment.name }}/{{ depertment.id }}">{{depertment.name}}</a>

homedetails.component.ts
import { ActivatedRoute, ParamMap } from '@angular/router';


homeId = '';
constructor(private route ActivatedRoute){}
ngOnInit() {
  let id = this.route.snapshot.paramMap.get('id');   == this has a drowback if we click next and prev it will not intialize the ids

  or
  this.route.paramMap.subscribe((params: ParamMap) => {
    let id = parseInt(params.get('id'));
    this.homeId = id;
    let name = params.name;
  })
  or

  this.route.params.subscribe((params) => {
    let id = params.id;
    let name = params.name;
  })
}