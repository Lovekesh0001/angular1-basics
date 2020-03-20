home-routing.module.ts

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home.component';
import { HomeComponent1 } from './home.component1';

const routes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'home1', component: HomeComponent1 }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class HomeRoutingModule { }
export const routingComponents = [HomeComponent, HomeComponent1]


app.module.ts
import { HomeRoutingModule, routinComponents} from './home-routing.module';

declarations: [
    AppComponent,
    routingComponents
  ],
  imports: [
    BrowserModule,
    HomeRoutingModule
  ],

  app.component.html
  <a routerLink="home" routerLinkActive="active">home</a>
  <a routerLink="home1" routerLinkActive="active">home1</a>    == active is a class for active link