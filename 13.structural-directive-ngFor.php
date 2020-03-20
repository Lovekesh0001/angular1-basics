public colors = ["blue","green","red","yellow",];


<ul *ngFor="let color of colors; index as i">
  <li>{{ i }}{{ color }}</li>                   == i will give the index -  0 blue, 1 green, 2 red, 3 yellow
</ul>

<ul *ngFor="let color of colors; first as f">
  <li>{{ f }}{{ color }}</li>                   == f will give the first -  true blue, false green, false red, false yellow
</ul>

<ul *ngFor="let color of colors; last as l">
  <li>{{ l }}{{ color }}</li>                   == l will give the last -  false blue, false green, false red, true yellow
</ul>

<ul *ngFor="let color of colors; odd as o">
  <li>{{ l }}{{ color }}</li>                   == o will give the last -  false blue, true green, false red, true yellow
</ul>

<ul *ngFor="let color of colors; even as e">
  <li>{{ l }}{{ color }}</li>                   == e will give the last -  true blue, false green, true red, false yellow
</ul>