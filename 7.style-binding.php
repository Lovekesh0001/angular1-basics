public hasError = true;
public highlightColor = 'orange';
public titleStyles = {
  color: "blue",
  fontStyle: "italic"
}

 getColor(country) { (2)
    switch (country) {
      case 'UK':
        return 'green';
      case 'USA':
        return 'blue';
      case 'HK':
        return 'red';
    }


<h2 [style.color]="'orange'">Style binding</h2>

<h2 [style.color]="hasError? 'orange' : 'blue'">Style binding</h2>

<h2 [style.color]="highlightColor">Style binding</h2>

<h2 [ngStyle]="titleStyles">Style binding</h2>

<div [ngStyle]="{'font-size.px':24}" [ngStyle]="{'background-color':'green'}"></<div>

  [ngStyle]="{'background':model.businessesLike === 0 ? '#F0F0F0' : '#C62727'}"

  [style.color] = "isLike === 'like' ? 'red' : 'black'"


<ul *ngFor="let person of people">
  <li [ngStyle]="{'color':getColor(person.country)}"> {{ person.name }} ({{ person.country }}) (1)
  </li>
</ul>
