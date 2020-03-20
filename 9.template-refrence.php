Refer the element or all the dom property

logMessage(value){
	console.log(value);
}

<input type="text" #myInput>
<button (click)="logMessage(myInput.value)"></button>   == this will get the on click input type value