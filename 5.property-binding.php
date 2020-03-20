Attribute vs Property

attr and prop are not the same.
attr - HTMl.
Property - DOM(Document object model).
attr initialize dom property then they are done.attr cant change when they are initialize.
Property value can be change.



public myId = 'testid';
public isDisabled = true;

<input name="" [id]="myId">
<input name="" id="{{myId}}"  [disabled]="isDisabled">     == disabled is working when using property binding
<input name="" id="{{myId}}"  bind-disabled="isDisabled"> 