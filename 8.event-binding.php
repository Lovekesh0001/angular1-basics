public greetingvalue = "Welcome";

greeting(event){
  this.greetingvalue = "Welcome to code";
}

<button (click)="greeting($event)"></button>    == $event it will gives the all information of dom

<button (click)="greetingvalue = 'Welcome to code'"></button>  == without using click event change the value
{{ greetingvalue }}