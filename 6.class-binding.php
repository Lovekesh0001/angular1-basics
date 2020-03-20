public successClass = "text-success";
public hasError = true;
public isSpecial = true;
public messageClasses = {
	"text-success": !this.hasError,
	"text-danger": this.hasError,
	"text-special": this.isSpecial,
}


<h2 class="text-success">Codevolution</h2>

<h2 [class]="successClass">Codevolution</h2>

<h2 [class]="successClass" class="text-special">Codevolution</h2>   == this will take only class binding successClass it will remove text-special class

<h2 [class.text-success]="hasError">Codevolution</h2>   == if it has text-success class it will work else not work

<h2 [ngClass]="messageClasses">Codevolution</h2>


[ngClass]="{'text-success':true}"

[ngClass]="{'active': uri==='about-us'}"

<ul *ngFor="let person of people">
  <li [ngClass]="{
    'text-success':person.country === 'UK',
    'text-primary':person.country === 'USA',
    'text-danger':person.country === 'HK'
  }">{{ person.name }} ({{ person.country }})
  </li>
</ul>

<ul *ngFor="let person of people">
  <li [class.text-success]="person.country === 'UK'"
      [class.text-primary]="person.country === 'USA'"
      [class.text-danger]="person.country === 'HK'">{{ person.name }} ({{ person.country }})
  </li>
</ul>

class="btn btn-sm btn-outline-{{readonly ? 'danger' : 'success'}}" (click)="readonly = !readonly"

