home-routing.module.ts

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home.component';
import { HomeComponent1 } from './home.component1';
import { PageNotFoundComponent } from './page-not-found.component1';

const routes: Routes = [
  { path: '', redirectTo:'/home', pathMatch:'full' },   == make sure you have a default route, pathMatch:'prefix'
  { path: 'home', component: HomeComponent },
  { path: 'home1', component: HomeComponent1 },

  { path: '**', component: PageNotFoundComponent }, == wildcard route will be last
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class HomeRoutingModule { }
export const routingComponents = [HomeComponent, HomeComponent1, PageNotFoundComponent]


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