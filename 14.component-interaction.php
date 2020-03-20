parent -child  @Input
child- parent  @Output
==============================================================
parent -child  @Input
#parent component

selector: 'app-component';

public name = 'Lovekesh';

<app-test [parentData]="name"></app-test>

#child component
import { Input } from "@angular/core";

selector: 'app-test';
@Input() public parentData;

{{ parentData }}

or
@Input('parentData') public name;
{{ name }}
==============================================================

==============================================================
child- parent  @Output
#child component

selector: 'app-test';

import { Output, EventEmitter } from "@angular/core";
@Output() public childEvent = new EventEmitter();

fireEvent(){
	this.childEvent.emit('Hey Lovekesh');
}


<button (click)="fireEvent()"></button>



#parent component

selector: 'app-component';

public message = '';

app.component.html
{{ message }}
<app-test (childEvent)='message=$event'></app-test>   ==$event give access to the argument that is send the data
 

==============================================================

