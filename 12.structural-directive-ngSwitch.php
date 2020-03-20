public color = "blue";
getColor(country) { (2)
    switch (country) {
      case 'UK':
        return 'green';
      case 'USA':
        return 'blue';
      case 'HK':
        return 'red';
    }

<div [ngSwitch] = "color">
	<div *ngSwitchCase="'red'">you picked red color</div>
	<div *ngSwitchCase="'blue'">you picked blue color</div>
	<div *ngSwitchDefault="'default'">you picked default color</div>
</div>

<ul *ngFor="let person of people">
  <li [style.color]="getColor(person.country)">{{ person.name }} ({{ person.country }})
  </li>
</ul>